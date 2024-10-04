<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Support</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="/" class="flex items-center text-2xl font-bold text-gray-800">
                        MyCompany
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/dashboard" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                    <a href="/support" class="text-blue-600 font-semibold">Support</a>
                    <a href="/settings" class="text-gray-600 hover:text-gray-900">Settings</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">How can we help you?</h1>
                <p class="text-lg text-gray-600 mb-6">We're here to provide you with the best support possible. Whether you have a technical issue or need help with your account, we're just one step away.</p>
                
                <!-- Contact Form -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Us</h2>
                        <form action="submit_support.php" method="POST" class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                                <textarea name="message" id="message" rows="4" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- FAQ Section -->
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Frequently Asked Questions</h2>
                        <div class="space-y-4">
                            <details class="bg-gray-100 p-4 rounded-md shadow-md">
                                <summary class="cursor-pointer text-lg font-semibold text-gray-700">How do I reset my password?</summary>
                                <p class="mt-2 text-gray-600">To reset your password, go to the settings page, click on "Change Password", and follow the instructions to receive a reset link via email.</p>
                            </details>
                            <details class="bg-gray-100 p-4 rounded-md shadow-md">
                                <summary class="cursor-pointer text-lg font-semibold text-gray-700">How can I contact customer support?</summary>
                                <p class="mt-2 text-gray-600">You can contact us using the form on this page, or by sending an email to support@mycompany.com. Our team is available 24/7 to assist you.</p>
                            </details>
                            <details class="bg-gray-100 p-4 rounded-md shadow-md">
                                <summary class="cursor-pointer text-lg font-semibold text-gray-700">Where can I find my billing information?</summary>
                                <p class="mt-2 text-gray-600">All billing information can be found in your account settings under the "Billing" section. You can view invoices, update payment methods, and more.</p>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; 2024 MyCompany. All rights reserved.</p>
            <p class="mt-2"><a href="/privacy" class="text-blue-400 hover:underline">Privacy Policy</a> | <a href="/terms" class="text-blue-400 hover:underline">Terms of Service</a></p>
        </div>
    </footer>

</body>
</html>
