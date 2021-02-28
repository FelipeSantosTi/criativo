@extends('adminlte::page')

@section('title', 'Curso da Classe')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('grades.index') }}">Classes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('grades.courses', $grade->id) }}">Cursos</a></li>
    </ol>

    <h1>Curso da Classe <strong>{{ $grade->name }}</strong>
        <a href="{{ route('grades.courses.available', $grade->id) }}" class="btn btn-primary"><i class="fas fa-plus"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th width="80">Ações</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>
                            {{ $course->name }}
                        </td>
                        <td>
                            {{ $course->description }}
                        </td>
                        <td>
                            <a href="{{ route('grades.courses.detach', [$grade->id, $course->id]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $courses->appends($filters)->links() !!}
            @else
                {!! $courses->links() !!}
            @endif
        </div>
    </div>
@stop
