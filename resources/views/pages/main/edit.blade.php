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
                <div class="row">
                    <h2>Обновить информацию</h2>
                    {!! Form::model($blogs,['method' => 'PATCH','action' => ['MainController@update',$blogs ->id]]) !!}
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