<?php require 'views/partials/header.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/banner.php'; ?>

<main>
    <!-- TODO: add search -->

    <div class="mx-auto max-w-7xl px-4 py-6 px-6 lg:px-8">
        <?php foreach ($users as $user) : ?>
            <a href="/users/<?= $user['id'] ?>">
                <div class="bg-white shadow overflow-hidden rounded-lg mb-4">
                    <div class="px-4 py-5 px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900"><?= htmlspecialchars($user['name']) ?></h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500"><?= htmlspecialchars($user['email']) ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- TODO: add pagination -->
</main>

<?php require 'views/partials/footer.php'; ?>
