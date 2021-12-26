@extends('shared.default')
<!-- @section('title', $user->name) -->
@section('content')
{{ $user->name }} - {{ $user->email }}
<p>This is show time.</p>
@stop
