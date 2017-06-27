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
            <img src="{{ asset('images/cross.jpg') }}"  alt="">
            <div class="main_content">
                <div class="container-fluid">
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-lg-6 col-md-6" >
                                {!! $blog->description !!}
                            </div>
                        @endforeach
                        </div>
                    </div>
                <hr>
                <h3>СТАНДАРТНЫЕ ВАРИАНТЫ АПТЕЧНЫХ КРЕСТОВ</h3>
                <h6>У нас Вы можете как купить стандартный аптечный крест, так и заказать нестандартное решение. Современные технологии позволяют изготовить оригинальные аптечные кресты с оптимальным соотношением цена/качество.</h6>
                <hr>
                <div class="row">
                    @foreach($Crosses as $type)
                        <div class="cross col-md-6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="images/{{ $type->title_img}}" width="175" height="218" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <h4><b>{{ $type->type }}</b></h4>
                                        <p>{{ $type->priceUnilateral}}$ - одностороний</p>
                                        <p>{{ $type->priceBilateral}}$ - двуxстороний</p>
                                        <h4><b>Характеристика</b></h4>
                                        <ul>
                                            <li>Цвет: {{ $type->color }}</li>
                                            <li>Высота вывески: {{ $type->signHeight }} см</li>
                                            <li>Ширина вывески: {{ $type->signWight }} см</li>
                                            <li>Тип конструкции: {{ $type->typeOfDescription }}</li>
                                            <li>Шаг пикселей: {{ $type->pixelPitch }} мм</li>
                                            <li>Яркость: {{ $type->brightness }} кд/м</li>
                                            <li>Мощность потребления: {{ $type->powerConsumption }} Вт/м</li>
                                            <li>Срок службы: {{ $type->lifeTime }}лет</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer_partner_contacts')

    @include('layouts.footer')
@endsection