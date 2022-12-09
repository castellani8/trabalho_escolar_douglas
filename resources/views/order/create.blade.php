@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('company.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Cadastro de Empresas</h1>
                    
                    <label for="">Nome da empresa:</label>
                    <input class="form-control mb-3" id="company_name" name="company_name" required>

                    <label for="">Segmento:</label>
                    <input class="form-control mb-3" id="segment" name="segment" required>
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
