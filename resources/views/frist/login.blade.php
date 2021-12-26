@extends('shared.default')
@section('content')
 <div class="jumbotron">
     <h1 style="text-align: center;">Welcom to the BOX blog.</h1>
     <p class="lead"></p>
     <p></p>
     <!-- <p><a class="btn btn-lg btn-success" href="" role="button">现在注册</a> </p> -->
     <button type="button" class="btn btn-link">
         <a href="{{route('signup')}}">还没账号 现在注册？</a>
     </button>
 </div>
@stop
