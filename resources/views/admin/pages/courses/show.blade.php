@extends('adminlte::page')

@section('title', "Detalhes do Curso $course->name")

@section('content_header')
    <h1>Detalhes do Curso <b>{{ $course->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $course->name }}
                </li>
                <li>
                    <strong>Descrição: </strong> {{ $course->description }}
                </li>
            </ul>

            <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </div>
    </div>
@stop
