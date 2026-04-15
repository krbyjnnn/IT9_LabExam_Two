<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order Records') }}
        </h2>
    </x-slot>

    <div id="order-container">
        
        <div class="action-bar">
            <a href="/orders/create" class="add-button">Add New Order</a>
        </div>

        <table class="order-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Rice Type</th>
                    <th>Qty (kg)</th>
                    <th>Total Price</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->customer_name }}</td>
                        <td>{{ $item->rice->rice_name ?? 'N/A' }}</td>
                        <td>{{ $item->quantity_kg }}</td>
                        <td>{{ number_format($item->total_price, 2) }}</td>
                        <td>{{ $item->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>