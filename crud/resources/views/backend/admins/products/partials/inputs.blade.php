<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Nombre de producto']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('description','Descripción') !!}
        {!! Form::textarea('description',null,['class' => 'form-control','placeholder' => 'Descripción de producto']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-3">
        {!! Form::label('purchasePrice','Precio de compra') !!}
        {!! Form::number('purchasePrice',null,['class' => 'form-control','placeholder' => 'Precio de compra', 'step' => '0.05' ]) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('salePrice','Precio de venta') !!}
        {!! Form::number('salePrice',null,['class' => 'form-control','placeholder' => 'Precio de venta','step' => '0.05']) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('qtyAvailable','Disponible') !!}
        {!! Form::number('qtyAvailable',null,['class' => 'form-control','placeholder' => 'Nombre de producto','step' => '0.05']) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('incomingQty','Existencia en almacén') !!}
        {!! Form::number('incomingQty',null,['class' => 'form-control','placeholder' => 'Existencia en almacén','step' => '0.05']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('virtualAvailable','Disponible total') !!}
        {!! Form::number('virtualAvailable',null,['class' => 'form-control','placeholder' => 'Disponible total','step' => '0.05']) !!}
    </div>
    <div class=" form-group col-lg-4">
        {!! Form::label('ean13','Código') !!}
        {!! Form::text('ean13',null,['class' => 'form-control','placeholder' => 'Código']) !!}
    </div>
    <div class=" form-group col-lg-4">
        {!! Form::label('image','Imagen') !!}
        {!! Form::file('image',null,['class' => 'form-control','placeholder' => 'Imagen del producto']) !!}
    </div>
</div>