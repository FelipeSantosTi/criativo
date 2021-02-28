@extends('adminlte::page')

@section('title', 'Nova Classe')

@section('content_header')
    <h1>Cadastrar Nova Classe</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('grades.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.grades._partials.form')
            </form>
        </div>
    </div>
@stop
