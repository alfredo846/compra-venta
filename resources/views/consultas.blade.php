@extends('layout.app')
@section('title', 'Bienvenido')

@section('head')
 <link rel="stylesheet" href="{{ asset('assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
 <style>
    table th{
        background-color: #f1f2f7 !important;
        color: #121f3e;
        font-size: 15px;
    }
    table tr{
        border: inset 0pt !important;
        font-size: 14px;
        cursor:pointer:
    }

 </style>
@endsection

@section('content')
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="card">
                            <div class="card-header">
                            <strong class="text-light">&nbsp;&nbsp;<h5>Productos</h5>  &nbsp;&nbsp;&nbsp; </strong>
                            </div>
                            <div class="card-body">
                               <button type="button" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp; Agregar Nuevo &nbsp;&nbsp;</button>
                               <p class="float-right">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                <table id="productos" class="table table-striped table-bordered display ">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descrción</th>
                                            <th>EstadoEstadoEstado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixzzzzon</td>
                                            <td>Barcel, Danone</td>
                                            <td>aaaaaaaaaaa</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
@endsection

@section('script')

    <script src="{{ asset('assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/init/datatables-init.js') }}"></script>


     <script type="text/javascript">
         $(document).ready(function() {
             $('#productos').DataTable({
            language:{
                url:"{{ asset('assets/js/spanish.json') }}"
            }
        });
            } );
     </script>

    

    
    
  
@endsection