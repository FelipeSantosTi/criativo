@extends('adminlte::page')

@section('title', 'Editar Disciplina')

@section('content_header')
    <h1>Editar Disciplina {{ $subject->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('subjects.update', $subject->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.subjects._partials.form')
            </form>
        </div>
    </div>
@stop
