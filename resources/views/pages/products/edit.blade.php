<form action="{{ route('products.update',['id'=>$products->id]) }}" method="post">
  {{ csrf_field() }}

  <input type="text" name="name" value="{{ $product->name }}" placeholder = "Enter new Name">
  <input type="text" name="description" value="{{ $product->description }}" placeholder = "Enter new description">
  <input type="submit" value="Save">

</form>
