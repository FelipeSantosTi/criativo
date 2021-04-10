@extends('adminlte::page')

@section('title', 'Classes')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('grades.index') }}">Classes</a></li>
    </ol>

    <h1>Classes <a href="{{ route('grades.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('grades.search') }}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Filtro" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th width="230">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($grades as $grade)
                        <tr>
                            <td>
                                {{ $grade->name }}
                            </td>
                            <td>
                                {{ $grade->description }}
                            </td>
                            <td>
                                <a href="{{ route('grades.show', $grade->id) }}" class="btn btn-default"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ route('grades.courses', $grade->id) }}" class="btn btn-info"><i class="fas fa-graduation-cap"></i></a>
                                <a href="{{ route('grades.courses', $grade->id) }}" class="btn btn-success"><i class="fas fa-book"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $grades->appends($filters)->links() !!}
            @else
                {!! $grades->links() !!}
            @endif
        </div>
    </div>
@stop
