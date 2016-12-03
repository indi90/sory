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

    .no-sort::after { display: none!important; }

    .no-sort { pointer-events: none!important; cursor: default!important; }
</style>
@endpush

@push('scripts')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>

<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/pages/datatables.init.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    } );
    TableManageButtons.init();

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
                    <form method="POST" action="">
                        {{ csrf_field() }}
                        <input type="text" name="barcode" id="barcode" class="form-control input-lg" placeholder="Scan Barcode">
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title"><b>List Peripheral</b></h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Barcode</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>PIC</th>
                                <th>Status</th>
                                <th class="no-sort">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($peripherals as $peripheral)
                                <tr>
                                    <td align="center"><img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($peripheral->barcode, "EAN5") }}" alt="barcode"/></td>
                                    <td>{{ $peripheral->name }}</td>
                                    <td>{{ $peripheral->type->name }}</td>
                                    <td>{{ $peripheral->location->section->name }} ({{ $peripheral->location->description }})</td>
                                    <td>{{ $peripheral->pic->first_name }}</td>
                                    <td>
                                        @if($peripheral->status == 'NG')
                                            Not Good
                                        @elseif($peripheral->status == 'G')
                                            Good
                                        @else
                                            Error
                                        @endif
                                    </td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="{{ route('peripheral.edit', $peripheral->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('peripheral.destroy', $peripheral->id) }}" class="btn btn-danger btn-sm" data-method="delete" data-confirm="Apakah Anda yakin menghapus data {{ $peripheral->name }}?">Delete</a>
                                        </div>
                                    </td>
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