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
                <h2>Страница таблицы  для полноцветных строк:</h2>
                <table class="table table-striped">
                    <thead>
                    <thead>
                    <tr>
                        <th>Размер в см</th>
                        <th>32</th>
                        <th>64</th>
                        <th>96</th>
                        <th>128</th>
                        <th>160</th>
                        <th>192</th>
                        <th>224</th>
                        <th>256</th>
                        <th>288</th>
                        <th>320</th>
                        <th>352</th>
                        <th>384</th>
                        <th>416</th>
                        <th>448</th>
                        <th>480</th>
                        <th>512</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    </thead>
                    <a href="{{ action('FullColorController@create') }}" class="btn btn-info pull-right">Добавить новые цены </a><br><br>

                    <tbody>
                    @foreach($fullLines as $line)
                        <tr>
                            <td>{{ $line->Size }}</td>
                            <td>{{ $line->One }}</td>
                            <td>{{ $line->Two }}</td>
                            <td>{{ $line->Three }}</td>
                            <td>{{ $line->Four }}</td>
                            <td>{{ $line->Five }}</td>
                            <td>{{ $line->Six }}</td>
                            <td>{{ $line->Seven }}</td>
                            <td>{{ $line->Eight }}</td>
                            <td>{{ $line->Nine }}</td>
                            <td>{{ $line->Ten }}</td>
                            <td>{{ $line->Eleven }}</td>
                            <td>{{ $line->Twelve }}</td>
                            <td>{{ $line->Thirteen }}</td>
                            <td>{{ $line->Fourteen }}</td>
                            <td>{{ $line->Fifteen }}</td>
                            <td>{{ $line->Sixteen }}</td>
                            <td>
                                <form class="" action="{{ action('FullColorController@destroy',$line->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="{{ action('FullColorController@update',$line->id) }}" class="btn btn-primary btn-sm-group" >Edit</a>
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