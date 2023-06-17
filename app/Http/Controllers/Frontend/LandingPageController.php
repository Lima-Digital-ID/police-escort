<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\DetailBooking;
use App\Models\VehicleType;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        $vehicleType = VehicleType::get();
        $countItem = is_array(old('vehicle_type')) ? count(old('vehicle_type')) : 1;
        return view('Frontend.Page.LandingPage.index', compact('vehicleType', 'countItem'));
    }

    public function ajaxSelect(Request $request)
    {
        $i = $request->no;
        $no = $request->no + 1;
        $vehicleType = VehicleType::get();
        return view('Frontend.Page.LandingPage.select', compact('i', 'no', 'vehicleType'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'pickup' => 'required',
                'drop' => 'required',
                'date' => 'required',
                'police_escort_qty' => 'required',
                'vehicle_type.*' => 'required',
                'qty.*' => 'required',
            ]);
            $model = new Booking();
            $model->name = $validated['name'];
            $model->phone = $validated['phone'];
            $model->pickup = $validated['pickup'];
            $model->drop = $validated['drop'];
            $model->date = $validated['date'];
            $model->qty_police_escort = $validated['police_escort_qty'];
            $model->save();

            foreach ($validated['vehicle_type'] as $key => $value) {
                $detail = new DetailBooking();
                $detail->booking_id = $model->id;
                $detail->vehicle_type_id = $value;
                $detail->qty = $validated['qty'][$key];
                $detail->save();
            }
            DB::commit();
            return redirect()->route('landing-page.index')->withStatus('Booking succesfully.');
        } catch (Exception $e) {
            DB::rollback();
            // return back()->withError('Terjadi kesalahan.');
            return $e;
        } catch (QueryException $e) {
            DB::rollback();
            return $e;
            // return back()->withError('Terjadi kesalahan pada database.');
        }
        DB::commit();
    }
}
