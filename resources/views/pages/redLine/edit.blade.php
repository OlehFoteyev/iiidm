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
                <div class="container">
                    <div class="row">
                        <h3>Добавление новых цен красного цвета</h3>
                        {!! Form::model($redLines,['method'=>'PATCH','action'=>['RedLineController@update',$redLines->id]]) !!}

                        @include('forms._formTablePrice',['submitButtontext' => 'Редактировать'])

                        {!! Form::close() !!}
                    </div>
                    @include('layouts.errors')

                </div>
                <hr>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('description');
    </script>
@endsection

