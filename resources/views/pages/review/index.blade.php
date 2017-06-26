@extends('layouts.main')

@section('content')

    @include('layouts.top_header')

    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.navbar')
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid" >
        <div class="row">
            <img src="{{ asset('images/review.jpg') }}">
            <div class="main_content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            @foreach($blogs as $blog)
                                <div>
                                    {!! $blog->description !!}
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            <h3>Оставить отзыв:</h3>
                            {!! Form::open(['url'=>'review']) !!}
                            <div class="form-group">
                                {!! Form::textarea('comment',null,['class' => 'form-control','placeholder' => 'Напишите ваш комментарий']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ваш номер телефона']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Оправить',['class' => 'btn btn-success from-control']) !!}
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Left-aligned -->
                            @foreach($comments as $comment)
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{ asset('images/anon.png') }}" class="media-object" >
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">{{ $comment->user->name }}</h4>
                                    <p>{{ $comment->comment }}</p>
                                    <small>{{ $comment->created_at->toFormattedDateString() }}</small>
                                    <hr>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection