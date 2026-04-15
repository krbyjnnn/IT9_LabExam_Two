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

                    <div class="space-y-4">
                        <div class="p-4 bg-black-100 dark:bg-gray-700 rounded-lg">
                            <a href="/rices" class="text-blue-600 dark:text-blue-400 font-bold text-lg">🌾 Rice Menu</a>
                            <p class="text-gray-600 dark:text-gray-400">Manage your inventory and pricing here.</p>
                        </div>

                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <a href="/orders/create" class="text-green-600 dark:text-green-400 font-bold text-lg">🛒 New Order</a>
                            <p class="text-gray-600 dark:text-gray-400">Click here to place a new customer order.</p>
                        </div>

                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <a href="/payments" class="text-yellow-600 dark:text-yellow-400 font-bold text-lg">💰 Payments</a>
                            <p class="text-gray-600 dark:text-gray-400">Track and update payment statuses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>