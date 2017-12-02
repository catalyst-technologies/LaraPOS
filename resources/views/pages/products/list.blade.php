<div style="width: 100%; float:left">
    <a href="{{ route('products.create') }}">Create</a>
</div>

@foreach ($products as $products)
<div style="width: 100%; float:left">
    <p>----------------------------</p>
    <p>Product Name: {{ $products->name }}</p>
    <p>Description: {{ $products->description }}</p>
    <p>Price: {{ $products->price }}</p>

</div>
@endforeach
