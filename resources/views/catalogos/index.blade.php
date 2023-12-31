@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="panel"> 
        <div class="panel-heading">
            <h5 class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Usuarios</h5>
          </div>

          <div class="panel-body">
            

                <div class="card-body">
                    @if(session('notification'))
                    <div class="alert alert-success" role="alert">
                      {{session('notification')}}
                    </div>
                    @endif
                </div>
                    <div class="table-responsive">
                    <table id="table-cargos" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="1">
                                #
                            </th>
                            <th>Nombre </th>  
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($catalogos as $catalogo)

                            <tr>
                                <td> {{$catalogo-> id}} </td>
                                <td> {{$catalogo-> nombre}} </td>
                                <td>
                                  <form action="{{url('/catalogos/'.$catalogo->id.'/inactivar')}}" method="POST">
                                      @csrf 
                                      <a href="{{url('/catalogos/'.$catalogo->id.'/edit')}}" class="tabledit-edit-button btn btn-sm btn-default">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                      </a>

                                    </form>
                                   
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


@endsection

@section('scripts')
<script 
    src="{{ asset('js/per/categorias.js')}}">
</script>
@endsection
