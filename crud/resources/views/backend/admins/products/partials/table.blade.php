<table class="table table-striped table-responsive">
    <tr>
        <th>Código</th>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio Compra</th>
        <th>Precio Venta</th>
        <th>Total Disponible</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->ean13 }} </td>
            <td><img src="data:;base64,{{ $product->image }}" width="50px" height="50px"/> </td>
            <td>{{ $product->name }} </td>
            <td>{{ $product->description }} </td>
            <td>{{ $product->purchasePrice }} </td>
            <td>{{ $product->salePrice }} </td>
            <td>{{ $product->virtualAvailable }}</td>
        </tr>
    @endforeach
</table>