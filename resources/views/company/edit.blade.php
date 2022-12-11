@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('company.update', ['company' => $company->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Editar Empresa</h1>
                    
                    <label for="">Nome da empresa:</label>
                    <input class="form-control mb-3" id="company_name" name="company_name" value="{{ $company->company_name }}" required>

                    <label for="">Segmento:</label>
                    <input value="{{ $company->segment }}" class="form-control mb-3" id="segment" name="segment" required>

                    <label for="">Endereço:</label>
                    <input value="{{ $company->address }}" class="form-control mb-3" id="address" name="address" required>

                    <label for="">Cidade:</label>
                    <input value="{{ $company->city }}" class="form-control mb-3" id="city" name="city" required>

                    <label for="">UF:</label>
                    <select name="state" id="state" class="form-select mb-3" required>
                        <option {{ $company->state == "AC" ? 'selected' : '' }} value="AC">Acre</option>
                        <option {{ $company->state == "AL" ? 'selected' : '' }} value="AL">Alagoas</option>
                        <option {{ $company->state == "AP" ? 'selected' : '' }} value="AP">Amapá</option>
                        <option {{ $company->state == "AM" ? 'selected' : '' }} value="AM">Amazonas</option>
                        <option {{ $company->state == "BA" ? 'selected' : '' }} value="BA">Bahia</option>
                        <option {{ $company->state == "CE" ? 'selected' : '' }} value="CE">Ceará</option>
                        <option {{ $company->state == "DF" ? 'selected' : '' }} value="DF">Distrito Federal</option>
                        <option {{ $company->state == "ES" ? 'selected' : '' }} value="ES">Espírito Santo</option>
                        <option {{ $company->state == "GO" ? 'selected' : '' }} value="GO">Goiás</option>
                        <option {{ $company->state == "MA" ? 'selected' : '' }} value="MA">Maranhão</option>
                        <option {{ $company->state == "MT" ? 'selected' : '' }} value="MT">Mato Grosso</option>
                        <option {{ $company->state == "MS" ? 'selected' : '' }} value="MS">Mato Grosso do Sul</option>
                        <option {{ $company->state == "MG" ? 'selected' : '' }} value="MG">Minas Gerais</option>
                        <option {{ $company->state == "PA" ? 'selected' : '' }} value="PA">Pará</option>
                        <option {{ $company->state == "PB" ? 'selected' : '' }} value="PB">Paraíba</option>
                        <option {{ $company->state == "PR" ? 'selected' : '' }} value="PR">Paraná</option>
                        <option {{ $company->state == "PE" ? 'selected' : '' }} value="PE">Pernambuco</option>
                        <option {{ $company->state == "PI" ? 'selected' : '' }} value="PI">Piauí</option>
                        <option {{ $company->state == "RJ" ? 'selected' : '' }} value="RJ">Rio de Janeiro</option>
                        <option {{ $company->state == "RN" ? 'selected' : '' }} value="RN">Rio Grande do Norte</option>
                        <option {{ $company->state == "RS" ? 'selected' : '' }} value="RS">Rio Grande do Sul</option>
                        <option {{ $company->state == "RO" ? 'selected' : '' }} value="RO">Rondônia</option>
                        <option {{ $company->state == "RR" ? 'selected' : '' }} value="RR">Roraima</option>
                        <option {{ $company->state == "SC" ? 'selected' : '' }} value="SC">Santa Catarina</option>
                        <option {{ $company->state == "SP" ? 'selected' : '' }} value="SP">São Paulo</option>
                        <option {{ $company->state == "SE" ? 'selected' : '' }} value="SE">Sergipe</option>
                        <option {{ $company->state == "TO" ? 'selected' : '' }} value="TO">Tocantins</option>
                        <option {{ $company->state == "EX" ? 'selected' : '' }} value="EX">Estrangeiro</option>
                    </select>

                    <label for="">CEP:</label>
                    <input value="{{ $company->postal_code }}" class="form-control mb-3" id="postal_code" name="postal_code" required>
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
