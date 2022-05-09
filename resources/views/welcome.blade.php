<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }

        .error-border{
            border: 2px solid red;
        }
    </style>
</head>
<body>
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <div>
        <label for="name" class="{{  $errors->has('name') ? 'error' : '' }}">Tên</label>
        <input id="name" type="text" name="name" placeholder="Nhập tên" value="{{ old('name') }}"
               class="{{  $errors->has('name') ? 'error-border' : '' }}">
        {!! $errors->first('name', '<div class="error">:message</div>') !!}
    </div>
    <div>
        <label for="email" class="{{  $errors->has('email') ? 'error' : '' }}">Email</label>
        <input id="email" type="text" name="email" placeholder="Nhập email" value="{{ old('email') }}"
               class="{{  $errors->has('email') ? 'error-border' : '' }}">
        {!! $errors->first('email', '<div class="error">:message</div>') !!}
    </div>
    <div>
        <label for="password" class="{{  $errors->has('password') ? 'error' : '' }}">Mật khẩu</label>
        <input id="password" type="password" name="password" placeholder="Nhập mật khẩu" value="{!! old('password') !!}"
               class="{{  $errors->has('password') ? 'error-border' : '' }}">
        {!! $errors->first('password', '<div class="error">:message</div>') !!}
    </div>
    <div>
        <label for="re_password" class="{{  $errors->has('re_password') ? 'error' : '' }}">Nhập lại mật khẩu</label>
        <input id="re_password" type="password" name="re_password" placeholder="Nhập lại mật khẩu" value="{{ old('re_password') }}"
               class="{{  $errors->has('re_password') ? 'error-border' : '' }}">
        {!! $errors->first('re_password', '<div class="error">:message</div>') !!}
    </div>
    <div>
        <button>Đăng ký</button>
    </div>
</form>
</body>
</html>
