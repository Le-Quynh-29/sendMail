<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }

        .error-border {
            border: 2px solid red;
        }
    </style>
</head>
<body>
<form action="{{ route('forget.password') }}" method="post">
    @csrf
    <div>
        <label for="email" class="{{  $errors->has('email') ? 'error' : '' }}">Email</label>
        <input id="email" type="text" name="email" placeholder="Nhập email để tạo mật khẩu mới" value="{!! old('email') !!}"
               class="{{  $errors->has('email') ? 'error-border' : '' }}">
        {!! $errors->first('email', '<div class="error">:message</div>') !!}
    </div>
    <div>
        <button>Gửi</button>
    </div>
</form>
</body>
</html>
