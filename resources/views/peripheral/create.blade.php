@extends('layouts.app')

@push('scripts')
<script>
    $(document).ready(function () {
        $('#type').change(function () {
            if($(this).val() == 'new'){
                $('#type_text').removeClass('hidden');
            } else {
                $('#type_text').hide();
            }
        });
    });
</script>
@endpush

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Add Peripheral</b></h4>
                    <div class="row">
                        <div class="col-sm-10">
                            <form class="form-horizontal" action="{{ route('peripheral.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Barcode</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name='barcode' value="{{ $tmp_peripherals[1]->barcode }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name='name' value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Type</label>
                                    <div class="col-md-10">
                                        <select name="type" id="type" class="form-control">
                                            <option value=""></option>
                                            @foreach($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                            <option value="new">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="text" id="type_text" class="form-control hidden" name='type_text' value="{{ old('type_text') }}" placeholder="Add New Type">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Location</label>
                                    <div class="col-md-10">
                                        <select name="location" class="form-control" readonly>
                                            <option value=""></option>
                                            @foreach($locations as $location)
                                                @if($tmp_peripherals[2]->barcode == $location->barcode)
                                                    <option value="{{ $location->id }}" selected>{{ $location->barcode }}</option>
                                                @else
                                                    <option value="{{ $location->id }}">{{ $location->barcode }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-9">
                                        <div class="checkbox checkbox-primary">
                                            <input id="status" name="status" type="checkbox" value="NG">
                                            <label for="status">
                                                Not Good
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-md-offset-2 col-md-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                        <button type="button" id='reset' class="btn btn-danger waves-effect waves-light">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection