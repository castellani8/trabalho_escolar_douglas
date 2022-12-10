@extends('layouts.app')

@section('content')

<div class="container justify-content-center">
  <div class="col-auto">
    <div class="row">
      <div class="col-md-6">
        <h1>Serviços</h1>
      </div>  
      <div class="col-md-6">
        <div class="mr-auto" style="width: 200px;">
          <a href="service/create" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Cadastrar Serviços</a>
        </div>
      </div>  
    </div>
    <table class="table table-striped table-light">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Frota</th>
          <th scope="col">Descrição do serviço</th>
          <th scope="col">Tipo de serviço</th>
          <th scope="col">Tipo de manutenção</th>
          <th scope="col">Criado em:</th>
          <th scope="col">Ultima atualização</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($services as $service)
          <tr>
            <td> {{  $service->id                  }} </td> 
            <td> {{  $service->fleet_id            }} </td> 
            <td> {{  $service->service_desc        }} </td> 
            <td> {{  $service->service_type_id     }} </td> 
            <td> {{  $service->maintenance_type_id }} </td> 
            <td> {{  $service->created_at          }} </td> 
            <td> {{  $service->updated_at          }} </td> 
            <td>           
              <form method="POST" action="{{ route('service.destroy', $service->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                  class="btn btn-danger btn-md active" 
                >Deletar</button>      
              </form>      
            </td> 
          </tr>
        @endforeach 
      </tbody>
    </table>
  </div>
</div>
@endsection