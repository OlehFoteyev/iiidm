<div class="form-group">
    {!! Form::text('type',null,['class'=>'form-control','placeholder'=>'Тип аптечного креста']) !!}
</div>

<div class="form-group">
    {!! Form::text('title_img',null,['class'=>'form-control','placeholder'=>'Название картинки']) !!}
</div>

<div class="form-group">
    {!! Form::text('priceUnilateral',null,['class'=>'form-control','placeholder'=>'Цена одностороннего креста']) !!}
</div>

<div class="form-group">
    {!! Form::text('priceBilateral',null,['class'=>'form-control','placeholder'=>'Цена двухстороннего креста']) !!}
</div>

<div class="form-group">
    {!! Form::text('color',null,['class'=>'form-control','placeholder'=>'Цвет или количество цветов креста']) !!}
</div>

<div class="form-group">
    {!! Form::text('signHeight',null,['class'=>'form-control','placeholder'=>'Высота вывески']) !!}
</div>

<div class="form-group">
    {!! Form::text('signWight',null,['class'=>'form-control','placeholder'=>'Ширина вывески']) !!}
</div>

<div class="form-group">
    {!! Form::text('typeOfDescription',null,['class'=>'form-control','placeholder'=>'Тип конструкции']) !!}
</div>

<div class="form-group">
    {!! Form::text('pixelPitch',null,['class'=>'form-control','placeholder'=>'Шаг пикселя']) !!}
</div>

<div class="form-group">
    {!! Form::text('brightness',null,['class'=>'form-control','placeholder'=>'Яркость']) !!}
</div>

<div class="form-group">
    {!! Form::text('powerConsumption',null,['class'=>'form-control','placeholder'=>'Мощность потребления']) !!}
</div>

<div class="form-group">
    {!! Form::text('lifeTime',null,['class'=>'form-control','placeholder'=>'Срок службы']) !!}
</div>



<div class="form-group">
    {!! Form::submit($submitButtontext,['class' => 'btn btn-danger from-control']) !!}
</div>