<div class="form-group">
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ваше имя']) !!}
</div>

<div class="form-group">
    {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ваш номер телефона']) !!}
</div>

<div class="form-group">
    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>' Ваш email']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtontext,['class' => 'btn btn-danger from-control']) !!}
</div>