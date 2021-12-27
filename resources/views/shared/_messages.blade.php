@foreach (['danger', 'warning', 'success', 'info'] as $msg)
@if(session()->has($msg))
<div class="flash-message">
    <p class="alert alert-{{ $msg }}" style="color: red;"> {{ session()->get($msg) }} </p>
</div>
@endif
@endforeach
