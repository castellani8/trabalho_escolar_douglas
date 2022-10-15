@extends('layouts.app')

@section('content')

<div class="container">
    <form>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Cadastro de Empresas</h1>
                    <label for="">Id da empresa:</label>
                    <input class="form-control mb-3" required>
                    
                    <label for="">Nome da empresa:</label>
                    <input class="form-control mb-3" required>

                    <label for="">Segmento:</label>
                    <input class="form-control mb-3" required>

                    <label for="">Endereço:</label>
                    <input class="form-control mb-3" required>

                    <label for="">Cidade:</label>
                    <input class="form-control mb-3" required>

                    <label for="">UF:</label>
                    <select id="estado" name="estado" class="form-select mb-3" required>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>

                    <label for="">CEP:</label>
                    <input class="form-control mb-3" required>
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
