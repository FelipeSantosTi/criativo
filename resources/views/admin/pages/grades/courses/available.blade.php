@extends('adminlte::page')

@section('title', 'Cursos Disponíveis')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('grades.index') }}">Classes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('grades.courses', $grade->id) }}">Cursos</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('grades.courses.available', $grade->id) }}">Disponíveis</a></li>
    </ol>

    <h1>Cursos Disponíveis Para a Classe <strong>{{ $grade->name }}</strong>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('grades.courses.available', $grade->id) }}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Filtro" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th width="50px">#</th>
                    <th>Nome</th>
                </tr>
                </thead>

                <tbody>
                    <form action="{{ route('grades.courses.attach', $grade->id) }}" method="POST">
                        @csrf
                        @foreach ($courses as $course)
                            <tr>
                                <td>
                                    <input type="radio" name="courses[]" value="{{ $course->id }}">
                                </td>
                                <td>
                                    {{ $course->name }}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            @include('admin.includes.alerts')

                            <td colspan="500">
                                <button type="submit" class="btn btn-primary">Vincular</button>
                            </td>
                        </tr>
                    </form>
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
