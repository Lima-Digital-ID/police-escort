<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        VehicleType::truncate();
        $model = new VehicleType();
        $model->name = "SUV";
        $model->save();

        $model = new VehicleType();
        $model->name = "MPV";
        $model->save();

        $model = new VehicleType();
        $model->name = "Crossover";
        $model->save();

        $model = new VehicleType();
        $model->name = "Hatchback";
        $model->save();

        $model = new VehicleType();
        $model->name = "Sedan";
        $model->save();

        $model = new VehicleType();
        $model->name = "Sport Sedan";
        $model->save();

        $model = new VehicleType();
        $model->name = "Convertible";
        $model->save();

        $model = new VehicleType();
        $model->name = "Station Wagon";
        $model->save();

        $model = new VehicleType();
        $model->name = "Off road";
        $model->save();

        $model = new VehicleType();
        $model->name = "Pickup Truck / Double Cabin";
        $model->save();

        $model = new VehicleType();
        $model->name = "Elektrik";
        $model->save();

        $model = new VehicleType();
        $model->name = "Hybrid";
        $model->save();
        Schema::enableForeignKeyConstraints();
    }
}
