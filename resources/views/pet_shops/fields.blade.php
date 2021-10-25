<!-- Store Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('store_name', 'Store Name:') !!}
    {!! Form::text('store_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Store Owner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('store_owner', 'Store Owner:') !!}
    {!! Form::text('store_owner', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pets Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pets', 'Pets:') !!}
    {!! Form::text('pets', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Breed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('breed', 'Breed:') !!}
    {!! Form::text('breed', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>