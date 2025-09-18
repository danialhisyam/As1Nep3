<h1>Add Shopping Item</h1>
<form action="{{ route('shopping.store') }}" method="POST">
    @csrf
    <input type="text" name="item" placeholder="Item name" required><br>
    <input type="number" name="quantity" placeholder="Quantity" required><br>
    <input type="number" step="0.01" name="price" placeholder="Price" required><br>
    <button type="submit">Save</button>
</form>
