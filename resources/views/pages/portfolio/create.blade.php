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
                        <h3>Добавление нового проекта</h3>
                        <hr>
                        <br>
                        <form action="{{ route('upload.file') }}" method="post" class="form-horizontal" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <input type="file" name="file" id="file">

                            <input type="submit" value="Загрузить"  class="btn btn-info">

                        </form>

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

