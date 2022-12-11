@extends('layouts.app')

@section('content')

<div class="container justify-content-center">
  <div class="col-auto">
     <div class="row">
      <div class="col-md-6">     
        <h1>Tipos de Serviço</h1>
      </div>  
      <div class="col-md-6">
        <div class="mr-auto" style="width: 200px;">
          <a href="/public/service-type/create" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Cadastrar Tipos de Serviço</a>
        </div>
      </div>  
    </div>
    <table class="table table-striped table-light">
      <thead>
        <tr>
          <th scope="col">Descrição do tipo de serviço</th>
          <th scope="col">Criado em:</th>
          <th scope="col">Ultima atualização</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($serviceTypes as $servicetype)
            <tr>
              <td> {{  $servicetype->id                }} </td> 
              <td> {{  $servicetype->service_type_desc }} </td> 
              <td> {{  $servicetype->created_at        }} </td> 
              <td> {{  $servicetype->updated_at        }} </td> 
              <td>           
                <form method="POST" action="{{ route('service-type.destroy', $servicetype->id) }}">
                  <div class="nowrap">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                      class="btn btn-danger btn-md active" 
                    >Deletar</button>    
                    <a href="{{ route('service-type.edit', ['service_type' => $servicetype->id]) }}" class="btn btn-warning btn-md">Editar</a>      
                  </div>  
                </form>      
              </td> 
            </tr>
          @endforeach  
      </tbody>
    </table>
  </div>
</div>

@endsection