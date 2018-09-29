@extends('adminlte::page')

@section('content')

    <div class="container">
<table class="table table-striped table-bordered box">

    <tbody>
    <tr>
        <td>ID</td>
        <td>{{ $user->id }}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{{ $user->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $user->email  }}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{ $user->phone  }}</td>
    </tr>
    <tr>
        <td>Created_at</td>
        <td>{{ $user->created_at  }}</td>
    </tr>
    <tr>
        <td>Updated_at</td>
        <td>{{ $user->updated_at  }}</td>
    </tr>
    </tbody>
    <div class="box-footer">
        <a type="button" class="btn btn-default" href="{{ url('/admin/user/index') }}">Назад</a>
    </div>
</table>
    </div>
@endsection