@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('order.update', ['order' => $order->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Pedidos</h1>
                    
                    <label for="">Descrição da compra</label>
                    <input value="{{ $order->desc_buy }}" type="text" min="1" max="50" class="form-control mb-3" id="desc_buy" name="desc_buy" required>

                    <label for="">Quantidade de itens</label>
                    <input value="{{ $order->qtd_itens }}" type="number" min="1" class="form-control mb-3" id="qtd_itens" name="qtd_itens" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-3">
                <button type="submit" class="btn w-100 btn-md btn-primary">Salvar</button>
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>
</div>
@endsection
