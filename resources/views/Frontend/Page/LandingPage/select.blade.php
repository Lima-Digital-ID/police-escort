<div class="row row-item" data-no="{{ $no }}">
    <div class="col-md-5 form-group mt-3 mt-md-0">
        <label for="">Vehicle Type</label>
        <select name="vehicle_type[]" id="" class="form-control" data-id="1">
            <option value="">---Select Vehicle Type---</option>
            @foreach ($vehicleType as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-5 form-group mt-3 mt-md-0">
        <label for="">Qty</label>
        <input type="number" class="form-control" name="qty[]" id="qty" placeholder="Qty Vehicle Type"
            required />
    </div>
    @if ($no != 1)
        <div class="col-md-1 mt-3 mt-md-0">
            <a href="javascript:void(0)" class="btn btn-danger text-white" style="margin-top: 25px"
                onclick="remove({{ $no }})"><i class="fas fa-trash"></i></a>
        </div>
    @endif
</div>
