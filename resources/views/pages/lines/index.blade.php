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
        <img src="{{ asset('images/line.jpg') }}"  alt="">
        <div class="main_content">
            <div class="container">
                @foreach($blogs as $blog)
                    {!! $blog->description !!}
                @endforeach
            </div>
            <div class="container">
                <hr>
                <h2>Стоимость бегущих строк</h2>
                <hr>
                <table class="table table-bordered">
                    <h5>Цены указаны на бегущие строки красного цвета*</h5>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($redLines as $line)
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <table class="table table-bordered">
                    <h5>Цены указаны на бегущие строки другого цвета*</h5>
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($anotherLines as $line)
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                <table class="table table-bordered">
                    <h5>Цены указаны на бегущие полноцветные строки *</h5>
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
                    </tr>
                    </thead>
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer_partner_contacts')

@include('layouts.footer')
@endsection