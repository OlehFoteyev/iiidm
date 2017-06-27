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