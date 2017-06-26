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
            <img src="{{ asset('images/full_color_screen.png') }}"  alt="">
            <div class="main_content">
                <div class="container-fluid">
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div>
                                {!! $blog->description !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection