@extends('layouts.app')

@section('content')


<div class="container">
    <form action="{{ route('fleet.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Frotas</h1>
                    
                    <label for="">Empresa:</label>
                    <select id="company_id" name="company_id" class="form-control mb-3" required>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                        @endforeach
                    </select>
                     
                    <label for="">Descrição da frota</label>
                    <input type="form-control" value="" class="form-control mb-3" id="desc_frota" name="desc_frota" required/>
                                                         
                    <label for="">Historico:</label>
                    <input class="form-control mb-3" id="hystory" name="hystory" required>

                    <label for="">Data Manutenção</label>
                    <input type="date" class="form-control mb-3" id="dt_manut" name="dt_manut" required/>

                    <label for="active">Ativo:</label>
                    <? let num = 1;
                    let text = num.toString('Sim')
                    let num = 2;
                    let text = num.toString('Não')> </?>
                   <input class="form-control" placeholder="(Sim) | (Não)" value="" type="string" id="active" name="active" /> 
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
