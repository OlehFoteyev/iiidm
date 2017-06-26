@extends('layouts.main')

@section('content')
    <header class="top_header">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        На главную
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @if(Auth::user()->isAdmin())
                                        <li>
                                            <a href="{{ url('/admin') }}">
                                                Админка
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="container-fluid">
        <div class="row">
            @include('layouts.admin_menu_right')
        </div>
        <div class="container-fluid">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <h2>Страница для красных строк:</h2>
                <table class="table table-striped">
                    <thead>
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Название картинки</th>
                        <th>Цена односторонего</th>
                        <th>Цена двухсторонего</th>
                        <th>Цвет</th>
                        <th>Высота</th>
                        <th>Ширина</th>
                        <th>Тип конструкции</th>
                        <th>Шаг пикселя</th>
                        <th>Яркость</th>
                        <th>Мощность потребления</th>
                        <th>Срок службы</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    </thead>
                    <a href="{{ action ('TypeCrossController@create') }}" class="btn btn-info pull-right">Добавить новые цены</a><br><br>

                    <tbody>
                    @foreach($typeCrosses as $type)
                        <tr>
                            <td>{{ $type->type }}</td>
                            <td>{{ $type->title_img }}</td>
                            <td>{{ $type->priceUnilateral }}</td>
                            <td>{{ $type->priceBilateral }}</td>
                            <td>{{ $type->color }}</td>
                            <td>{{ $type->signHeight }}</td>
                            <td>{{ $type->signWight }}</td>
                            <td>{{ $type->typeOfDescription }}</td>
                            <td>{{ $type->	pixelPitch }}</td>
                            <td>{{ $type->brightness }}</td>
                            <td>{{ $type->powerConsumption }}</td>
                            <td>{{ $type->lifeTime }}</td>
                            <td>
                                <form class="" action="{{ action('TypeCrossController@destroy',$type->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="{{ action('TypeCrossController@update',$type->id) }}" class="btn btn-primary btn-sm-group" >Edit</a>
                                    <input type="submit" class="btn btn-danger btn-sm-group" onclick="return confirm('Вы действительно хотите это удалить?');" name="name" value="delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection