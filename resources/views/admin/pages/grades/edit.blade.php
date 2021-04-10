@extends('adminlte::page')

@section('title', 'Editar Classe')

@section('content_header')
    <h1>Editar Classe {{ $grade->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('grades.update', $grade->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.grades._partials.form')
            </form>
        </div>
    </div>
@stop
