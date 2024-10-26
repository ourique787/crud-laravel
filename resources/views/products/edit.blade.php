<form action="{{ url('products/'.$product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $product->name }}" required>
    <textarea name="description" placeholder="Description" required>{{ $product->description }}</textarea>
    <button type="submit">Update Product</button>
</form>