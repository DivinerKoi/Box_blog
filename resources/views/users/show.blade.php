@extends('shared.default')


@section('content')
<div class="row">
    <div class="col-md-2">
        @include('shared._navigation')
    </div>
</div>

    <div class="offset-md-2 col-md-8" style="background-color: #aaaa7f; height: 400px;">
        <section class="status">
            @if ($statuses->count() > 0)
            <ul class="list-unstyled">
                @foreach ($statuses as $status)
                @include('statuses._status')
                @endforeach </ul>
            <div class="mt-5">
                {!! $statuses->render() !!}
            </div>
            @else <p>没有数据！</p> @endif
        </section>
    </div>

@stop
