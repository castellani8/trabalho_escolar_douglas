@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('service-order.update', ['service_order' => $serviceOrder]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row justify-content-center">
             <div class="col-md-6">
                <h1 class="text-center mb-3">Editar ordem de serviço</h1>
                    
                <label for="">Data da Ordem:</label>
                <input value="{{ $serviceOrder->order_date }}" type="date" class="form-control mb-3" id="order_date" name="order_date" required>

                <label for="">Serviço:</label>
                <select id="service_id" name="service_id" class="form-control mb-3">
                    @foreach ($services as $service)
                        <option {{ $serviceOrder->service_id == $service->id ? 'selected' : '' }} value="{{ $service->id }}">{{ $service->service_desc }}</option>
                    @endforeach
                </select> 

                <label for="">Data da entrega:</label>
                <input value="{{ $serviceOrder->delivery_date }}" type="date" id="delivery_date" name="delivery_date" class="form-control mb-3">

                <label for="">Solicitação de Compra:</label>
                <select id="order_id" name="order_id" class="form-control mb-3">
                    @foreach ($orders as $order)
                        <option {{ $serviceOrder->order_id == $order->id ? 'selected' : '' }} value="{{ $order->id }}">{{ $order->desc_buy }}</option>
                    @endforeach
                </select> 

                <label for="">Frotas:</label>
                <select id="fleet_id" name="fleet_id" class="form-control mb-3">
                    @foreach ($fleets as $fleet)
                        <option {{ $serviceOrder->fleet_id == $fleet->id ? 'selected' : '' }} value="{{ $fleet->id }}">{{ $fleet->desc_frota }}</option>
                    @endforeach
                </select> 

                <label for="">Tipo de manutenção</label>
                <select id="maintenance_type_id" name="maintenance_type_id" class="form-control mb-3">
                    @foreach ($maintenanceTypes as $maintenanceType)
                        <option {{ $serviceOrder->maintenance_type_id == $maintenanceType->id ? 'selected' : '' }} value="{{ $maintenanceType->id }}">{{ $maintenanceType->desc_manut }}</option>
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
