@extends('layouts.main')

@section('content')

    @include('layouts.top_header')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.navbar')
                    @include('layouts.slider')
                </div>
            </div>
        </div>
    </header>

    @include('layouts.order')
    <div class="main_content">
        <div class="container-fluid">
            <div class="row">
                <hr>
                @foreach($blogs as $blog)
                        <div class="col-lg-4  col-md-6 col-sm-6 " >
                            <div>
                                {!! $blog->description !!}
                            </div>
                        </div>
                 @endforeach
            </div>
        </div>
        <hr>
    </div>

    {{--<div id ="contactUs" class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h3> По всем вопросам сотрудничества, приобретения
                    продукции обращайтесь по телефону:</h3>
                <div class="container-fluid">
                    <div class="phone">
                        <div>phone: 333</div>
                        <div>phone: 333</div>
                        <div>phone: 333</div>
                    </div>
                    <div class="email">
                        <div>olehfoteyev@gmail.com</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h2>7 ДНЕЙ В НЕДЕЛЮ<br></h2>
                <h3>с 9:00 до 20:00</h3>
            </div>
        </div>
    </div>--}}

    @include('layouts.footer_partner_contacts')
    @include('layouts.footer')


@endsection