@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container">
        <div class="d-flex flex-row ">
            <div class="p-2 col-2" style="height: 45px;">
                <h1>Distribuidores</h1>
            </div>
            <div class="p-2 col-sm-10" style="height: 45px;">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success py-2" style="height: 45px;" id="msg">
                        <strong>{{ $mensaje }}</strong>
                    </div>
                @endif
                @if ($mensaje = Session::get('error'))
                    <div class="alert alert-danger py-2" style="height: 45px;" id="msg">
                        <strong>{{ $mensaje }}</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
    <div class="card mt-1">
            <div class="card-header bg-secondary"><strong>Lista de Distribuidores</strong></div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Compania</th>
                        <th>Titular</th>
                        <th>Telefono</th>
                        <th>Correo</th>                        
                    </thead>
                    <tbody>
                        @forelse ($distribuidores as $distribuidor )
                            <tr>
                                <td>{{ $distribuidor->id }}</td>
                                <td>{{ $distribuidor->compania }}</td> 
                                <td>{{ $distribuidor->titular }}</td> 
                                <td>{{ $distribuidor->telefono }}</td>
                                <td>{{ $distribuidor->correo }}</td>                    
                                <td>
                                
                                        <a class="btn btn-sm btn-info"  href="{{ route('distribuidor.show',$distribuidor->id ) }}">VER</a>
                        

                                  
                                        <a class="btn btn-sm btn-warning ml-1" href="{{ route('distribuidor.edit', $distribuidor->id) }}" >Editar</a>
                            

                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
            <card-footer>
                {{$distribuidores->links()}}
            </card-footer>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function(){
            $("#msg").fadeOut(7000);

            $('.elimina-role').submit(function(e){
                e.preventDefault();

                Swal.fire({
                title: 'Deseas eliminar el rol?',
                text: "Una vez eliminado ya no se revertira!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Deseo eliminar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                })
            });

        });
    </script>
@stop
