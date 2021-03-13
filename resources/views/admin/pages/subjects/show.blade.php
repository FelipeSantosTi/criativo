@extends('adminlte::page')

@section('title', "Detalhes da Disciplina $subject->name")

@section('content_header')
    <h1>Detalhes da Disciplina <b>{{ $subject->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $subject->name }}
                </li>
                <li>
                    <strong>Descrição: </strong> {{ $subject->description }}
                </li>
            </ul>

            <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </div>
    </div>
@stop
