@extends('adminlte::page')

@section('title', 'Editar Curso')

@section('content_header')
    <h1>Editar Curso {{ $course->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('courses.update', $course->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.courses._partials.form')
            </form>
        </div>
    </div>
@stop
