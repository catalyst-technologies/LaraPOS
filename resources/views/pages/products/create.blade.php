<form action="{{ route('products.save') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="Enter Product Name">
    <input type="text" name="description" placeholder="Enter Desc.">
    <input type="number" name="price" placeholder="Enter Price">
    <input type="submit" value="Save">
</form>
