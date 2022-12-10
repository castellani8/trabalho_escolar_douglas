@extends('layouts.app')

@section('content')

<div class="mx-auto" style="width: 200px;">
  <a href="company/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar Empresas</a>
</div>

<div class="container justify-content-center">
  <div class="col-auto">
     <h1>Pedidos</h1>
     <table class="table table-striped table-light">
     <thead>
      <tr>
        <th scope="col">Quantidade de itens</th>
        <th scope="col">Descrição manutenção</th>
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
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Mark</td>
        <td>Mark</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>Mark</td>
        <td>Mark</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Mark</td>
        <td>Mark</td>
        <td>Mark</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Jacob</td>
        <td>Mark</td>
        <td>Mark</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Larry</td>
        <td>Mark</td>
        <td>Mark</td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>Mark</td>
        <td>Mark</td>
        <td>Mark</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>Jacob</td>
        <td>Mark</td>
        <td>Mark</td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td>Larry</td>
        <td>Mark</td>
        <td>Mark</td>
      </tr> 
    </tbody>
  </table>


@endsection