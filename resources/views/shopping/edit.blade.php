<h1>Edit Shopping Item</h1>
<form action="{{ route('shopping.update', $item->id) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="item" value="{{ $item->item }}" required><br>
    <input type="number" name="quantity" value="{{ $item->quantity }}" required><br>
    <input type="number" step="0.01" name="price" value="{{ $item->price }}" required><br>
    <button type="submit">Update</button>
</form>
