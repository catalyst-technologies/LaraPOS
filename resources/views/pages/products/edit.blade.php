<form action="{{ route('products.update',['id'=>$products->id]) }}" method="post">
  {{ csrf_field() }}

  <input type="text" name="name" value="{{ $products->name }}" placeholder = "Enter new Name">
  <input type="text" name="description" value="{{ $products->description }}" placeholder = "Enter new description">
  <input tyoe="text" name="price" value="{{ $products->price }}" placeholder = "Enter new Price">
  <input type="submit" value="Save">

</form>
