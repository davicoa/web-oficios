@extends('admin/administracion')
@section('title', 'Oficios')
@section('content')

<section class="py-3 mb-5">
	<div class="container">
        <h2 class="my-4"> Oficios</h2>
        @if (session()->has('message'))
            <div class="alert alert-{{ session('typealert') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {!! session('message') !!}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                  <th class="col-oficio" scope="col">Oficio</th>
                  <th scope="col">Especialidad</th>
                  <th class="col-acciones centrar" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaoficio as $oficio)
                <tr>
                    <td> {{ $oficio['Oficio']->nombre }}</td>
                    <td>
                        @if ($oficio['Especialidades'])
                             @foreach ($oficio['Especialidades'] as $especialidad)                                
                                     <div>  
                                        <a class="btn-descripcion" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                         {{ $especialidad->nombre }}
                                            <a class="icon-action"  href="{{ route('especialidad.destroyEspecialidad', $especialidad->id) }}" onclick="return confirm('¿Desea eliminar la especialidad?')" onkeypress="return confirm('¿Desea eliminar la especialidad?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fa fa-remove"></i>
                                         </a>
                                        </a>
                                        
                                    </div>
                                        
                              @endforeach                            
                        @endif
                    </td>
                    <td class="centrar">
                        <a class="icon-action" href="{{ route('admin.altaOficio') }}" data-toggle="tooltip" data-placement="top" title="Añadir oficio/Esp"><i class="fas fa-plus-circle"></i></a>
                        <a class="icon-action"  href="" onclick="return confirm('¿Desea eliminar la especialidad?')" onkeypress="return confirm('¿Desea eliminar la especialidad?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                            <i class="fa fa-remove"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
