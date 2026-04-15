<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('Rice Management') }}
        </h2>
    </x-slot>

    <div id="rice-container">
        
        <h1>Rice Inventory</h1>

        <form action="/rices" method="POST">
            @csrf
            <div>
                <label>Rice Name:</label>
                <input type="text" name="rice_name" required>
            </div>

            <div>
                <label>Price Per Kg:</label>
                <input type="number" name="price_per_kg" step="0.01" required>
            </div>

            <div>
                <label>Stock Quantity:</label>
                <input type="number" name="stock_quantity" required>
            </div>

            <div>
                <label>Description:</label>
                <textarea name="description" required></textarea>
            </div>

            <button type="submit">Add Rice</button>
        </form>

        <hr>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rice Name</th>
                    <th>Price/Kg</th>
                    <th>Stock</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->rice_name }}</td>
                        <td>₱{{ number_format($item->price_per_kg, 2) }}</td>
                        <td>{{ $item->stock_quantity }} kg</td>
                        <td>{{ $item->description }}</td>
                        <td class="action-cell">
                            <a href="/rices/{{ $item->id }}/edit">Edit</a>
                            <form action="/rices/{{ $item->id }}" method="POST" onsubmit="return confirm('Delete this?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>