@extends('adminlte::page')

@section('content')
        <div class="container">

            <a type="button" class="btn btn-success" href="#">Добавить пользователя</a>

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
                        <td>{{ $user-> id }}</td>
                        <td>{{ $user-> name }}</td>
                        <td>{{ $user-> email }}</td>
                        <td>{{ $user-> phone }}</td>
                        <td>{{ $user-> updated_at }}</td>
                </tr>
                    </tbody>

                @endforeach

                </thead>
            </table>
        </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection