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

    <div class="container-fluid">
        <div class="row">
            @include('layouts.admin_menu_right')
        </div>
            <div class="container-fluid">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <h2>Главная страница:</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Содержание</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <a href="{{ action('MainController@create') }}" class="btn btn-info pull-right">Добавить новый контент</a><br><br>

                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->description }}</td>
                                <td>
                                    <form class="" action="{{ url('admin/show/delete',$blog->id) }}" method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <a href="{{ action('MainController@update',$blog->id) }}" class="btn btn-primary btn-sm-group" >Edit</a>
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