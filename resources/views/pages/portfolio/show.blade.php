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
        <div class="adminImages">
        <div class="container-fluid">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <h2>Страница для красных строк:</h2>
                <table class="table table-striped">
                    <thead>
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Картинка</th>
                        <th>Описание</th>
                        <th>Размер</th>
                        <th>Дата создания</th>

                        <th>Действия</th>
                    </tr>
                    </thead>
                    </thead>
                    <a href="{{ action('PortfolioController@create') }}" class="btn btn-info pull-right">Добавить новый проект</a><br><br>

                    <tbody>
                    @foreach($all as $project)
                        <tr>
                            <td>{{ $project->title_img }}</td>
                            <td><img src="{{ asset('images/ourProjects/'.$project->title_img ) }}" height="100" width="100"  /></td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->size }}</td>
                            <td>{{ $project->created_at }}</td>

                            <td>
                                <form class="" action="{{ action('PortfolioController@destroy',$project->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="#" class="btn btn-primary btn-sm-group" >Edit</a>
                                    <input type="submit" class="btn btn-danger btn-sm-group" onclick="return confirm('Вы действительно хотите это удалить?');" name="name" value="delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $all->links() }}
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection