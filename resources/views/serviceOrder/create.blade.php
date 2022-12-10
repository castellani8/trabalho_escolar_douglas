@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('service-order.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
             <div class="col-md-6">
                <h1 class="text-center mb-3">Ordem de serviço</h1>
                    
                <label for="">Data do pedido:</label>
                <input type="date" class="form-control mb-3" id="order_date" name="order_date" required>

                <label for="">Serviço:</label>
                <select id="service_id" name="service_id" class="form-control mb-3">
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->service_desc }}</option>
                    @endforeach
                </select> 

                <label for="">Data de Envio:</label>
                <input type="date" id="delivery_date" name="delivery_date" class="form-control mb-3">

                <label for="">Pedido:</label>
                <select id="order_id" name="order_id" class="form-control mb-3">
                    @foreach ($orders as $order)
                        <option value="{{ $order->id }}">{{ $order->desc_buy }}</option>
                    @endforeach
                </select> 

                <label for="">Frotas:</label>
                <select id="fleet_id" name="fleet_id" class="form-control mb-3">
                    @foreach ($fleets as $fleet)
                        <option value="{{ $fleet->id }}">{{ $fleet->desc_frota }}</option>
                    @endforeach
                </select> 

                <label for="">Tipo de manutenção</label>
                <select id="maintenance_type_id" name="maintenance_type_id" class="form-control mb-3">
                    @foreach ($maintenanceTypes as $maintenanceType)
                        <option value="{{ $maintenanceType->id }}">{{ $maintenanceType->desc_manut }}</option>
                    @endforeach
                </select> 

                
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
