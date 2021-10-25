<!-- Store Name Field -->
<div class="col-sm-12">
    {!! Form::label('store_name', 'Store Name:') !!}
    <p>{{ $petShop->store_name }}</p>
</div>

<!-- Store Owner Field -->
<div class="col-sm-12">
    {!! Form::label('store_owner', 'Store Owner:') !!}
    <p>{{ $petShop->store_owner }}</p>
</div>

<!-- Pets Field -->
<div class="col-sm-12">
    {!! Form::label('pets', 'Pets:') !!}
    <p>{{ $petShop->pets }}</p>
</div>

<!-- Breed Field -->
<div class="col-sm-12">
    {!! Form::label('breed', 'Breed:') !!}
    <p>{{ $petShop->breed }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $petShop->price }}</p>
</div>

