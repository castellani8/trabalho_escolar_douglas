@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('service.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Tipo de serviço</h1>                   
            </div> 

            <label for="">Selecione a frota</label>
            <select id="fleet_id" name="fleet_id" class="form-control mb-3">
                @foreach ($fleets as $fleet)
                    <option value="{{ $fleet->id }}">{{ $fleet->desc_frota }}</option>
                @endforeach
            </select> 

            <label for="">Selecione o tipo do serviço</label>
            <select id="service_type_id" name="service_type_id" class="form-control mb-3">
                @foreach ($serviceTypes as $serviceType)
                    <option value="{{ $serviceType->id }}">{{ $serviceType->service_type_desc}}</option>
                @endforeach
            </select> 

            <label for="">Selecione o tipo de manutenção:</label>
            <select id="maintenance_type_id" name="maintenance_type_id" class="form-control mb-3">
                @foreach ($maintenanceTypes as $maintenanceType)
                    <option value="{{ $maintenanceType->id }}">{{ $maintenanceType->desc_manut }}</option>
                @endforeach
            </select> 

            <label for="">Descrição do serviço</label>
            <input type="string" min="1" maxlength="10" class="form-control mb-3" id="service_desc" name="service_desc" required>

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
