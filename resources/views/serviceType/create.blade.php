@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('service-type.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Tipos de serviço</h1>
                    
                    <label for="">Tipos de serviço</label>
                    <input class="form-control mb-3" id="service_type_desc" name="service_type_desc" required>                
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
