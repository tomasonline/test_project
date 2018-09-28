@extends('adminlte::page')

@section('content')
        <div class="container">
            @if (session()->has('flash_message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session()->get('flash_message') }}
                </div>
            @endif
            <a type="button" class="btn btn-info" href="{{ url('/admin/user/create') }}">Добавить пользователя</a>

            <table class="table table-hover box">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Cteated_at</th>
                </tr>
                <tbody>
                @foreach($users as $user)
                <tr>
                        <td>
                            <a type="button" class="btn btn-primary" href="{{ url('/admin/user/show', $user->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                            <a type="button" class="btn btn-warning" href="{{ url('/admin/user/edit', $user->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a type="button" class="btn btn-danger" href="{{ url('/admin/user/destroy', $user->id) }}"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                        <td>{{ $user-> name }}</td>
                        <td>{{ $user-> email }}</td>
                        <td>{{ $user-> phone }}</td>
                        <td>{{ $user-> updated_at }}</td>
                </tr>
                    </tbody>

                @endforeach

                </thead>
            </table>

                {{ $users->links() }}

        </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection