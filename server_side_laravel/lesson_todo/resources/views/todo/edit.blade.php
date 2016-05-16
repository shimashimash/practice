<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <h2 class="page-header">ToDo編集</h2>
        {!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::input('text', 'title', $todo->title, ['required', 'class' => 'form-control']) !!}
        </div>
        <button type="submit" class="btn btn-success pull-right">更新</button>
        {!! Form::close() !!}
        <a href="{{action('TodoController@index')}}">戻る</a>
        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </div>
</body>
</html>