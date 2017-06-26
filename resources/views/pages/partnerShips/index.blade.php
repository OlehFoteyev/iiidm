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
            <img src="{{ asset('images/partner.jpg') }}" >
            <div class="main_content">
                <div class="container-fluid">
                    <div class="row">
                        <h3>ПАРТНЕРСКОЕ ПРЕДЛОЖЕНИЕ</h3>
                        <hr>
                        @foreach($blogs as $blog)
                            <div class="col-md-4">
                                {!! $blog->description !!}
                            </div>
                        @endforeach
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id ="nameOfPartner" class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <h4>Вопросы по сотрудничеству</h4>
                @foreach($contacts as $all )
                       <h4> <i class="fa fa-handshake-o" aria-hidden="true"></i> {{ $all->name }}</h4>
                        <a href="#"><i class="fa fa-mobile" >{{ $all->phone }}</i></a>
                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true">{{ $all->email }}</i></a><br>
                @endforeach
            </div>
            <div class="col-md-6">
                <h3>Работаем 7 дней в неделю</h3>
                <h4>С 8:00 до 20:00</h4>
            </div>
        </div>
    </div>
@endsection