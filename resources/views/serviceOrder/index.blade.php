@extends('layouts.app')

@section('content')

<div class="container justify-content-center">
  <div class="col-auto">
    <div class="row">
      <div class="col-md-6">     
        <h1>Ordem de serviço</h1>
      </div>  
      <div class="col-md-6">
        <div class="mr-auto" style="width: 200px;">
          <a href="service-order/create" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Cadastrar ordem de serviço</a>
        </div>
      </div>  
    </div>
     <table class="table table-striped table-light">
    <thead>
      <tr>
        <th scope="col">Data da compra</th>
        <th scope="col">Pedido</th>
        <th scope="col">Serviço</th>
        <th scope="col">Data de envio</th>
        <th scope="col">Data da compra</th>
        <th scope="col">Frota</th>
        <th scope="col">Tipo de Manutenção</th>
        <th scope="col">Criado em:</th>
        <th scope="col">Ultima atualização</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($serviceOrders as $serviceOrder)
          <tr>
            <td> {{  $serviceOrder->id                  }} </td> 
            <td> {{  $serviceOrder->order_date          }} </td> 
            <td> {{  $serviceOrder->service_desc        }} </td> 
            <td> {{  $serviceOrder->delivery_date       }} </td> 
            <td> {{  $serviceOrder->desc_buy            }} </td> 
            <td> {{  $serviceOrder->desc_frota          }} </td> 
            <td> {{  $serviceOrder->desc_manut          }} </td> 
            <td> {{  $serviceOrder->created_at          }} </td> 
            <td> {{  $serviceOrder->updated_at          }} </td> 
            <td>           
              <form method="POST" action="{{ route('service-order.destroy', $serviceOrder->id) }}">
                <div class="nowrap" style="white-space: nowrap">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="btn btn-danger btn-md active" 
                  >Deletar</button>      
                  <a href="{{  route('service-order.edit', ['service_order' => $serviceOrder->id]) }}" class="btn btn-warning btn-md">Editar</a>      
                </div>
              </form>      
            </td> 
          </tr>
        @endforeach 
    </tbody>
  </table>


@endsection