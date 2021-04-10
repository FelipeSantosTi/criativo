@extends('adminlte::page')

@section('title', 'Nova Disciplina')

@section('content_header')
    <h1>Cadastrar Nova Disciplina</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('subjects.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.subjects._partials.form')
            </form>
        </div>
    </div>
@stop
