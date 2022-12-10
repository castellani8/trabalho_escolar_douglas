@extends('layouts.app')

@section('content')



<div class="row justify-content-center">
  <div class="col-auto">
    <div class="row">
      <div class="col-md-6">
        <h1>Empresas</h1>
      </div>  
      <div class="col-md-6">
        <div class="mr-auto" style="width: 200px;">
          <a href="company/create" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Cadastrar Empresas</a>
        </div>
      </div>  
    </div>
    <table class="table table-responsive">
    <table class="table table-striped table-light">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome da Empresa</th>
        <th scope="col">Segmento</th>
        <th scope="col">Endereço</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Código-Postal</th>
        <th scope="col">Criado em:</th>
        <th scope="col">Ultima atualização</th>
        <th scope="col">Ações</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)
          <tr>
            <td> {{  $company->id           }} </td> 
            <td> {{  $company->company_name }} </td> 
            <td> {{  $company->segment      }} </td> 
            <td> {{  $company->address       }} </td> 
            <td> {{  $company->city         }} </td> 
            <td> {{  $company->state        }} </td> 
            <td> {{  $company->postal_code  }} </td> 
            <td> {{  $company->created_at   }} </td> 
            <td> {{  $company->updated_at   }} </td> 
            <td>           
              <form method="POST" action="{{ route('company.destroy', $company->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit"
                  class="btn btn-danger btn-md active" 
                >Deletar</input>      
              </form>      
            </td> 
          </tr>
        @endforeach           
    </tbody>
  </table>


@endsection