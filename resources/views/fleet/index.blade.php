@extends('layouts.app')

@section('content')

<div class="container justify-content-center">
  <div class="col-auto">
    <div class="row">
      <div class="col-md-6">
        <h1>Frotas</h1>
      </div>  
      <div class="col-md-6">
        <div class="mr-auto" style="width: 200px;">
          <a href="fleet/create" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Cadastrar Frotas</a>
        </div>
      </div>  
    </div>
    <table class="table table-striped table-light">
    <thead>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Empresa</th>
        <th scope="col">Descrição</th>
        <th scope="col">Historico</th>
        <th scope="col">Data manutenção</th>
        <th scope="col">Ativo</th>
        <th scope="col">Criado em:</th>
        <th scope="col">Ultima atualização</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($fleets as $fleet)
          <tr>
            <td> {{  $fleet->id         }} </td> 
            <td> {{  $fleet->company_id }} </td> 
            <td> {{  $fleet->desc_frota }} </td> 
            <td> {{  $fleet->hystory    }} </td> 
            <td> {{  $fleet->dt_manut   }} </td> 
            <td> {{  $fleet->active     }} </td> 
            <td> {{  $fleet->created_at }} </td> 
            <td> {{  $fleet->updated_at }} </td> 
          </tr>
        @endforeach      
    </tbody>
  </table>

@endsection

