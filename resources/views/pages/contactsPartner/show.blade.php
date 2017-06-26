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
                <h2>Партнёрство:</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ФИО</th>
                        <th>телефон</th>
                        <th>email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <a href="{{ action('PartContactsController@create') }}" class="btn btn-info pull-right">Добавить новый контакт</a><br><br><hr>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                <form class="" action="{{ action('PartContactsController@destroy',$contact->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="{{ action('PartContactsController@update',$contact->id) }}" class="btn btn-primary btn-sm-group" >Edit</a>
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