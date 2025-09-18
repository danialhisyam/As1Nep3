<!DOCTYPE html>
<html>
<head><title>Shopping List</title></head>
<body>
    <h1>Shopping List</h1>
    <a href="{{ route('shopping.create') }}">Add Item</a>
    <table border="1">
        <tr><th>Item</th><th>Qty</th><th>Price</th><th>Actions</th></tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->item }}</td>
            <td>{{ $item->quantity }}</td>
            <td>${{ $item->price }}</td>
            <td>
                <a href="{{ route('shopping.edit', $item->id) }}">Edit</a>
                <form action="{{ route('shopping.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
