@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('service.update', ['service' => $service]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Tipo de serviço</h1>                   
            </div> 

            <label for="">Selecione a frota</label>
            <select id="fleet_id" name="fleet_id" class="form-control mb-3">
                @foreach ($fleets as $fleet)
                    <option {{$service->fleet_id == $fleet->id ? 'selected' : '' }} value="{{ $fleet->id }}">{{ $fleet->desc_frota }}</option>
                @endforeach
            </select> 

            <label for="">Selecione o tipo do serviço</label>
            <select id="service_type_id" name="service_type_id" class="form-control mb-3">
                @foreach ($serviceTypes as $serviceType)
                    <option {{$service->service_type_id== $serviceType->id ? 'selected' : '' }} value="{{ $serviceType->id }}">{{ $serviceType->service_type_desc}}</option>
                @endforeach
            </select> 

            <label for="">Selecione o tipo de manutenção:</label>
            <select id="maintenance_type_id" name="maintenance_type_id" class="form-control mb-3">
                @foreach ($maintenanceTypes as $maintenanceType)
                    <option {{$service->maintenance_type_id== $maintenanceType->id ? 'selected' : '' }} value="{{ $maintenanceType->id }}">{{ $maintenanceType->desc_manut }}</option>
                @endforeach
            </select> 

            <label for="">Descrição do serviço</label>
            <input value="{{ $service->service_desc }}" type="int" min="1" max="50" class="form-control mb-3" id="service_desc" name="service_desc" required>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <button type="submit" class="btn w-100 btn-md btn-primary">Salvar</button>
                </div>
                <div class="col-md-3"></div>        
            </div>   
        </div>   
    </form>
</div>
@endsection
