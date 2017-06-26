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
            <img src="{{ asset('images/portfolio.jpg') }}" >
            <div class="main_content">
                <div class="container-fluid">
                    <div class="row">
                        <h2>Наши реализованые проекты</h2>
                        <div id="project" class="container-fluid">
                            @foreach($all as $photo)
                                <div class="col-md-2">
                                    <div class="our_photos">
                                        <a class="fancybox"  data-fancybox-group="group" href=" images/ourProjects/{{ $photo->title_img }}">
                                            <img src="images/ourProjects/{{ $photo->title_img }}" />
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $all->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

@endsection