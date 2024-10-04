<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Main Content -->
                <div class="col-span-2 bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg transition transform hover:scale-105 duration-300">
                    <div class="p-8 text-gray-900 dark:text-gray-100">
                        <h3 class="text-3xl font-bold mb-4">
                            {{ __("You're logged in!") }}
                        </h3>
                        <p class="text-lg mb-6">
                            Welcome back! Explore the latest updates and manage your account settings here.
                        </p>
                        <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-110 shadow-md">
                            Explore Dashboard
                        </button>
                    </div>
                </div>

                <!-- Sidebar or Additional Info -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 transition transform hover:scale-105 duration-300">
                    <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
                        {{ __('Quick Links') }}
                    </h4>
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">
                                {{ __('View Reports') }}
                            </a>
                        </li>
                        <li>
                            <a href="profile" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">
                                {{ __('Account Settings') }}
                            </a>
                        </li>
                        <li>
                            <a href="support" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">
                                {{ __('Support') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
