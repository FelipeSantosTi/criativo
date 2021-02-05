@extends('adminlte::page')

@section('title', 'Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plans.store') }}" class="form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome: </label>
                    <input type="text" name="name" class="form-control" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="name">Descrição: </label>
                    <input type="text" name="description" class="form-control" placeholder="Descrição">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@stop
