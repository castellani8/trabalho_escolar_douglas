@extends('layouts.app')

@section('content')


<div class="container">
    <form action="{{ route('fleet.update', ['fleet' => $fleet]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Frotas</h1>
                    
                    <label for="">Empresa:</label>
                    <select id="company_id" name="company_id" class="form-control mb-3">
                        @foreach ($companies as $company)
                            <option {{ $fleet->company_id == $company->id ? 'selected' : '' }} value="{{ $company->id }}">{{ $company->company_name }}</option>
                        @endforeach
                    </select>

                    <label for="">Descrição da frota</label>
                    <input value="{{ $fleet->desc_frota }}" class="form-control mb-3" id="desc_frota" name="desc_frota" required>

                    <input type="hidden" value="1" class="form-control mb-3" id="active" name="active" />

                    <label for="">Historico:</label>
                    <input value="{{ $fleet->hystory }}" class="form-control mb-3" id="hystory" name="hystory" required>

                    <label for="">Data:</label>
                    <input value="{{ $fleet->dt_manut }}" type="date" class="form-control mb-3" id="dt_manut" name="dt_manut" required>
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
