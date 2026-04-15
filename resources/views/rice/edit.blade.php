<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('Edit Rice Product') }}
        </h2>
    </x-slot>

    <div id="rice-edit-container">
        <div class="edit-tab">Editing: {{ $item->rice_name }}</div>

        <div class="edit-box">
            <form action="/rices/{{ $item->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Rice Name:</label>
                    <input type="text" name="rice_name" value="{{ $item->rice_name }}" required>
                </div>

                <div class="form-group">
                    <label>Price Per Kg:</label>
                    <input type="number" name="price_per_kg" step="0.01" value="{{ $item->price_per_kg }}" required>
                </div>

                <div class="form-group">
                    <label>Stock Quantity:</label>
                    <input type="number" name="stock_quantity" value="{{ $item->stock_quantity }}" required>
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea name="description" required>{{ $item->description }}</textarea>
                </div>

                <div class="button-group">
                    <button type="submit" class="update-btn">Update Rice</button>
                    <a href="/rices" class="cancel-link">Back to Menu</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>