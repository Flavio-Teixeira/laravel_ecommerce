@extends('layouts.app')

@section('content')

    <a href="/admin/stores/create" class="btn btn-sm btn-success">Criar loja</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>
                        <a href="/admin/stores/{{$store->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/admin/stores/destroy/{{$store->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$stores->links('pagination::bootstrap-5')}}

@endsection
