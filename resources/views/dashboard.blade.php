<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rice System Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                        Welcome, {{ Auth::user()->name }}!
                    </h3>

                    <hr class="mb-6 border-gray-200 dark:border-gray-700">

                    <div style="display: flex; gap: 1.5rem;">
                        <div style="flex: 1; padding: 2rem; background-color: #374151; border-radius: 0.75rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <span style="font-size: 2.5rem; margin-bottom: 0.75rem;">🌾</span>
                            <a href="/rices" style="color: #93c5fd; font-weight: 700; font-size: 1.1rem; margin-bottom: 0.5rem; text-decoration: none;">Rice Menu</a>
                            <p style="color: #9ca3af; font-size: 0.875rem;">Manage your inventory and pricing here.</p>
                        </div>

                        <div style="flex: 1; padding: 2rem; background-color: #374151; border-radius: 0.75rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <span style="font-size: 2.5rem; margin-bottom: 0.75rem;">🛒</span>
                            <a href="/orders/create" style="color: #86efac; font-weight: 700; font-size: 1.1rem; margin-bottom: 0.5rem; text-decoration: none;">New Order</a>
                            <p style="color: #9ca3af; font-size: 0.875rem;">Click here to place a new customer order.</p>
                        </div>

                        <div style="flex: 1; padding: 2rem; background-color: #374151; border-radius: 0.75rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <span style="font-size: 2.5rem; margin-bottom: 0.75rem;">💰</span>
                            <a href="/payments" style="color: #fcd34d; font-weight: 700; font-size: 1.1rem; margin-bottom: 0.5rem; text-decoration: none;">Payments</a>
                            <p style="color: #9ca3af; font-size: 0.875rem;">Track and update payment statuses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>