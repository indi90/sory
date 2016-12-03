@extends('layouts.app')

@push('styles')
<link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    ::-webkit-input-placeholder {
        text-align: center;
    }

    :-moz-placeholder { /* Firefox 18- */
        text-align: center;
    }

    ::-moz-placeholder {  /* Firefox 19+ */
        text-align: center;
    }

    :-ms-input-placeholder {
        text-align: center;
    }

    #barcode {
        text-align: center;
    }
</style>
@endpush

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        document.getElementById("barcode").focus();
    } );
</script>
@endpush

@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    @include('flash::message')
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form method="POST" action="{{ route('peripheral') }}">
                        {{ csrf_field() }}
                        <input type="text" name="barcode" id="barcode" class="form-control input-lg" placeholder="Scan Barcode">
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title"><b>Add Peripheral</b></h4>

                        <table id="datatable-buttons" class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Barcode</th>
                                <th>PIC</th>
                                <th>Information</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tmp_peripherals as $key => $tmp_peripheral)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $tmp_peripheral->barcode }}</td>
                                    <td>{{ $tmp_peripheral->pic->first_name }}</td>
                                    <td>tes</td>
                                    <td>clear</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop