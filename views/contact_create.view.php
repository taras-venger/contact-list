<?php require 'views/partials/header.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-3xl px-4 py-6 px-6 lg:px-8">
        <form method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full bg-white border border-gray-300 rounded-md focus:border-indigo-500" required>
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="mt-1 p-2 w-full bg-white border border-gray-300 rounded-md focus:border-indigo-500">
            </div>

            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" id="phone" name="phone" class="mt-1 p-2 w-full bg-white border border-gray-300 rounded-md focus:border-indigo-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full bg-white border border-gray-300 rounded-md focus:border-indigo-500">
            </div>

            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Group</label>
                <input type="text" id="category" name="category" class="mt-1 p-2 w-full bg-white border border-gray-300 rounded-md focus:border-indigo-500">
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md shadow-sm text-white font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Create
            </button>

            <button class="ml-4 inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md shadow-sm text-gray-700 font-medium hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                Cancel
            </button>
        </form>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>
