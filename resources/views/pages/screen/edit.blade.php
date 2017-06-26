@extends('layouts.main')

@section('content')

    <header class="top_header">
        <div class="header_topline">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <button class="auth_buttons hidden-md hidden-lg hidden-sm"><i class="fa fa-user"></i></button>
                        <div class="top_links">
                            <a href="{{ route('login') }}" >Вход</a> /
                            <a href="{{ route('register') }}" >Регистрация</a>
                        </div>
                        <div class="soc_buttons">
                            <a href="#" ><i class="fa fa-vk"></i></a>
                            <a href="#" ><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.navbar')
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            @include('layouts.admin_menu_right')
        </div>
        <div class="container-fluid">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <h2>Обновить информацию</h2>
                    {!! Form::model($blogs,['method' => 'PATCH','action' => ['ScreenController@update',$blogs ->id]]) !!}
                    @include('forms._formMain',['submitButtontext' => 'Обновить блог'])
                    {!! Form::close() !!}
                </div>
                @include('layouts.errors')
                <script>
                    CKEDITOR.replace('description');
                </script>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>

@endsection