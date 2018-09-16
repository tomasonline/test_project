@extends('adminlte::page')

@section('content')
    <div class="container">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Создать пользователя</h3>
            </div>
            <form action="{{ url('/admin/user/create') }}" method="POST" accept-charset="UTF-8" class="form-horizontal">

                @csrf

                <div class="box-body">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Введите имя">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="+7(___) ___-____">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>

                </div>

                <div class="box-footer">
                    <a type="button" class="btn btn-default" href="{{ url('/admin/user/index') }}">Отменить</a>
                    <input type="submit" class="btn pull-right btn-success " value="Добавить">
                </div>
            </form>
        </div>

    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script> jQuery(function($){
            $("#phone").mask("+7(999) 999-9999");
        }); </script>
@stop