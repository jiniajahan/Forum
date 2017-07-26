@extends('layouts.app')

@section('content')
    <div class="container">

        hello threads
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">forum threads</div>

                    <div class="panel-body">
                        @foreach($threads as $thread)
                        <a href="{{ $thread->path() }}"> <h4>{{$thread->title}}</h4></a>
                            <div>{{$thread->body}}</div>

                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection