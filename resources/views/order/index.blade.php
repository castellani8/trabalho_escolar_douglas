@extends('layouts.app')

@section('content')
  
<div class="container justify-content-center">
  <div class="col-auto">
    <div class="row">
      <div class="col-md-6">     
        <h1>Pedidos</h1>
      </div>  
      <div class="col-md-6">
        <div class="mr-auto" style="width: 200px;">
          <a href="order/create" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Cadastrar Pedido</a>
        </div>
      </div>  
    </div>
     <table class="table table-striped table-light">
     <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Descrição do pedido</th>
        <th scope="col">Quantidade de itens</th>
        <th scope="col">Criado em:</th>
        <th scope="col">Ultima atualização</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
          <tr>
            <td> {{  $order->id             }} </td> 
            <td> {{  $order->desc_buy       }} </td> 
            <td> {{  $order->qtd_itens }} </td> 
            <td> {{  $order->created_at        }} </td> 
            <td> {{  $order->updated_at     }} </td> 
            <td>           
              <form method="POST" action="{{ route('order.destroy', $order->id) }}">
                <div class="nowrap">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="btn btn-danger btn-md active" 
                  >Deletar</button>  
                  <a href="{{ url('order/edit/'. $order->id) }}" class="btn btn-warning btn-md">Editar</a>         
                </div> 
              </form>      
            </td> 
          </tr>
        @endforeach 
    </tbody>
  </table>


@endsection