@extends('layouts.main')

@section('content')
    <header class="top_header">
        <div class="header_topline">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <button class="auth_buttons hidden-md hidden-lg hidden-sm"><i class="fa fa-user"></i></button>
                        <div class="top_links">
                            <a href="//webdesign-master.ru" target="_blank">Вход</a> /
                            <a href="//webdesign-master.ru" target="_blank">Регистрация</a>
                        </div>
                        <div class="soc_buttons">
                            <a href="//webdesign-master.ru" target="_blank"><i class="fa fa-vk"></i></a>
                            <a href="//webdesign-master.ru" target="_blank"><i class="fa fa-facebook-square"></i></a>
                            <a href="//webdesign-master.ru" target="_blank"><i class="fa fa-twitter"></i></a>
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

    <div class="container-fluid" >
        <div class="row">
            <div class="main_content">
                <div class="container-fluid">
                    <div class="row">
                        <h3>Register</h3>
                        <form method="post" action="/reg">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Зарегистрироватся</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection