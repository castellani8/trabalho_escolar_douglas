@extends('layouts.app')

@section('content')


<div class="container justify-content-center">
 <div class="col-auto">
  <div class="row">
    <div class="col-md-6">
      <h1>Tipos de Manutenção</h1>
    </div>  
    <div class="col-md-6">
      <div class="mr-auto" style="width: 200px;">
        <a href="/maintenance/create" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Cadastrar tipos de manutenção</a>
      </div>
    </div>  
  </div>
    <table class="table table-striped table-light">
    <thead>
      <tr>
        <th scope="col">Tipos de Manutenção</th>
        <th scope="col">Descrição manutenção</th>
        <th scope="col">Criado em:</th>
        <th scope="col">Ultima atualização</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($maintenanceTypes as $maintenanceType)
          <tr>
            <td> {{  $maintenanceType->id         }} </td> 
            <td> {{  $maintenanceType->desc_manut }} </td> 
            <td> {{  $maintenanceType->created_at }} </td> 
            <td> {{  $maintenanceType->updated_at }} </td> 
            <td>           
              <form method="POST" action="{{ route('maintenance.destroy', $maintenanceType->id) }}">
                <div class="nowrap">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="btn btn-danger btn-md active" 
                  >Deletar</button>     
                  <a href="{{  route('maintenance.edit', ['maintenance' => $maintenanceType->id]) }}" class="btn btn-warning btn-md">Editar</a>      
                </div> 
              </form>      
            </td> 
          </tr>
        @endforeach    
    </tbody>  

@endsection