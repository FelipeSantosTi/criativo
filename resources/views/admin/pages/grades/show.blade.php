@extends('adminlte::page')

@section('title', "Detalhes da Classe $grade->name")

@section('content_header')
    <h1>Detalhes da Classe <b>{{ $grade->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $grade->name }}
                </li>
                <li>
                    <strong>Descrição: </strong> {{ $grade->description }}
                </li>
            </ul>

            <form action="{{ route('grades.destroy', $grade->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </div>
    </div>
@stop
