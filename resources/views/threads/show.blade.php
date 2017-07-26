@extends('layouts.app')

@section('content')
    <div class="container">

        hello threads
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    @foreach($thread as $thr)
                    <div class="panel-heading">{{ $thr->title }}</div>

                    <div class="panel-body">
                        {{$thr->body}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
