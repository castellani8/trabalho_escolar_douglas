@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('maintenance.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Tipos de manutenção</h1>
                    
                    <label for="">Tipo de manutenção</label>
                    <input type="text" min="1" max="50" class="form-control mb-3" id="desc_manut" name="desc_manut" required>
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
