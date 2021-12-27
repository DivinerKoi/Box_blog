@extends('shared.default')
@section('content')
<div class="container">
    <div class="row">
        <div class=" col-md-10">
            <div class="jumbotron" style="float: right;">
                <h1 style="text-align: center;">Welcom to the BOX blog.</h1>
                <p class="lead"></p>
                <p></p>
                <button type="button" class="btn btn-link">
                    <a href="{{route('signup')}}">还没账号 现在注册？</a>
                </button>
            </div>
        </div>
    </div>
</div>

@stop
