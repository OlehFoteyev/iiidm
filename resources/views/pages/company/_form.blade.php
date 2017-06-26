<div class="form-group">
    {!! Form::label('description','Описание блока') !!}
    {!! Form::textarea('description',null,['class' => 'form-control','placeholder' => 'Введите свой текст']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtontext,['class' => 'btn btn-danger from-control']) !!}
</div>