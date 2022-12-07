<?php

@extends('layouts.app')
@section('content')

namespace ;



class formulary.blade

{
<div class="container">
    <form action="{{ route('formulary.edit') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Formulario de Empresas</h1>
 
 
    @if(isset($customer))
 
        {!! <form action="{{ route('formulary.edit') }}" method="POST">};
 
    @else
 
        {!! Form::open(['method' => 'post','route' => 'formulary.store', 'class' => 'form-horizontal']) !!}
 
    @endif
 
    <div class="card">
        <div class="card-header">
      <span class="card-title">
          @if (isset($customer))
        Editando registro #{{ $formulary->id }}
          @else
        Criando novo registro
          @endif
      </span>
        </div>
        <div class="card-body">
      <div class="form-row form-group">
        <div class="col-sm-4">

            <h1>Frota</h1>
 
            {!! Form::label('company_id', $id, ['class' => 'col-form-label col-sm-2 text-right']) !!}
        
            {!! Form::text('desc_frota', null, ['class' => 'form-control', 'placeholder'=>'Defina o Descrição da frota']) !!}
    
            {!! Form::label('active', $id, ['class' => 'col-form-label col-sm-2 text-right']) !!}

            {!! Form::text('hystory', null, ['class' => 'form-control', 'placeholder'=>'Defina o Historico da frota']) !!}

            {!! Form::data('dt_manut', data, ['class' => 'col-form-label col-sm-2 text-right']) !!}

          </div>
 
      </div>
      
      <div class="form-row form-group">

         <h1>Pedidos</h1>
 
          {!! Form::label('desc_buy', text ['class' => 'col-form-label col-sm-2 text-right']) !!}

          {!! Form::label('items_quantity', text ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">

            <h1>Serviços</h1>
 
        {!! Form::text('service_type_desc', null, ['class' => 'form-control', 'placeholder'=>'Descrição do serviço']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
         <h1>Detalhes Frota</h1>

         {!! Form::text('fleet_id', ['class' => 'form-control', 'placeholder'=>'Numero da frota']) !!}
         {!! Form::text('maintenance_type_id', ['class' => 'form-control', 'placeholder'=>'Manutenção']) !!}



        </div>
        <div class="form-row form-group">

            <h1>Manutenção e consulta de frotas</h1>
 
            {!! Form::text('service_id', ['class' => 'form-control', 'placeholder'=>'Numero do serviço']) !!}
            {!! Form::text('delivery_date', ['class' => 'form-control', 'placeholder'=>'Data de entrega']) !!}
            {!! Form::text('order_id', ['class' => 'form-control', 'placeholder'=>'Ordem do serviço']) !!}
            {!! Form::text('maintenance_type_id', ['class' => 'form-control', 'placeholder'=>'Numero da manuntenção do pedido']) !!}
 
      </div>
 
      </div>
        </div>
        <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']) !!}
      {!! Form::submit(  isset($company) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!};
 
        </div>
    </div>
 
    {!! Form::close() !!}
 
</div>
@endsection
} 

