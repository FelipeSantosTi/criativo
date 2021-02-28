@extends('adminlte::page')

@section('title', 'Novo Curso')

@section('content_header')
    <h1>Cadastrar Novo Curso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('courses.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.courses._partials.form')
            </form>
        </div>
    </div>
@stop
