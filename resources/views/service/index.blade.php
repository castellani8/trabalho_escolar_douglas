@extends('layouts.app')

@section('content')

<div class="mx-auto" style="width: 200px;">
  <a href="company/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar Empresas</a>
</div>


<div class="container justify-content-center">
  <div class="col-auto">
    <h1>Serviços</h1>
    <table class="table table-striped table-light">
      <thead>
        <tr>
          <th scope="col">Frota</th>
          <th scope="col">Descrição do serviço</th>
          <th scope="col">Tipo de serviço</th>
          <th scope="col">Tipo de manutenção</th>
          <th scope="col">Criado em:</th>
          <th scope="col">Ultima atualização</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Larry</td>
          <td>the Bird</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Larry</td>
          <td>the Bird</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Larry</td>
          <td>the Bird</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Mark</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Larry</td>
          <td>the Bird</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Jacob</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Larry</td>
          <td>the Bird</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Larry</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Larry</td>
          <td>the Bird</td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Mark</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Larry</td>
          <td>the Bird</td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Jacob</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Larry</td>
          <td>the Bird</td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Larry</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Larry</td>
          <td>the Bird</td>
        </tr>      
      </tbody>
    </table>
  </div>
</div>
@endsection