<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Payment Management') }}
        </h2>
    </x-slot>

    <div id="payment-container">
        <h1>Transaction Records</h1>

        <table class="payment-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $payment)
                    <tr>
                        <td>{{ $payment->order_id }}</td>
                        <td>{{ $payment->order->customer_name }}</td>
                        <td>₱{{ number_format($payment->amount, 2) }}</td>
                        <td>
                            <span class="status-badge {{ strtolower($payment->status) }}">
                                {{ $payment->status }}
                            </span>
                        </td>
                        <td>
                            @if($payment->status == 'Unpaid')
                                <form action="/payments/{{ $payment->id }}/pay" method="POST">
                                    @csrf
                                    <button type="submit" class="pay-btn">Mark as Paid</button>
                                </form>
                            @else
                                <span class="completed-text">✅ Completed</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>