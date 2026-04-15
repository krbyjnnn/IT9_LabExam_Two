<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('New Transaction') }}
        </h2>
    </x-slot>

    <div id="create-order-container">
        <div class="form-card">
            <h1>Create New Order</h1>

            <form action="/orders" method="POST" class="order-form">
                @csrf
                
                <div class="form-group">
                    <label>Customer Name:</label>
                    <input type="text" name="customer_name" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label>Select Rice:</label>
                    <select name="rice_id" required>
                        <option value="">-- Choose Rice Type --</option>
                        @foreach($rices as $rice)
                            <option value="{{ $rice->id }}">
                                {{ $rice->rice_name }} (₱{{ number_format($rice->price_per_kg, 2) }}/kg)
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Quantity (kg):</label>
                    <input type="number" name="quantity_kg" step="0.01" placeholder="0.00" required>
                </div>

                <div class="button-group">
                    <button type="submit" class="submit-btn">Place Order</button>
                    <a href="/orders" class="cancel-link">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>