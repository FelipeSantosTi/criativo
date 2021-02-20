@extends('adminlte::page')

@section('title', 'Perfis do Plano')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('plans.profiles', $plan->id) }}">Perfis</a></li>
    </ol>

    <h1>Perfis do Plano <strong>{{ $plan->name }}</strong>
        <a href="{{ route('plans.profiles.available', $plan->id) }}" class="btn btn-primary"><i class="fas fa-plus"></i></a></h1>
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
                @foreach ($profiles as $profile)
                    <tr>
                        <td>
                            {{ $profile->name }}
                        </td>
                        <td>
                            {{ $profile->description }}
                        </td>
                        <td>
                            <a href="{{ route('plans.profiles.detach', [$plan->id, $profile->id]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $profiles->appends($filters)->links() !!}
            @else
                {!! $profiles->links() !!}
            @endif
        </div>
    </div>
@stop
