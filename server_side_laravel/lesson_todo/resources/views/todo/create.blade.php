@extends('app')

@section('content')
<div class="container">
    <h2 class="page-header">ToDo作成</h2>
    {!! Form::open(['route' => 'todo.store']) !!}
        <div class="form-group">
            <!-- データ型,name,value,[validation?,class,placeholder] -->
            {!! Form::input('text', 'title', null, ['required', 'class' => 'form-controll', 'placeholder' => 'ToDo内容']) !!}
        </div>
        <button type="submit" class="btn btn-success pull-right">追加</button>
    {!! Form::close() !!}
    <a href="{{action('TodoController@index')}}">戻る</a>
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</div>
@endsection