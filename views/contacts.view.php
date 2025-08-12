<?php require 'views/partials/header.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/banner.php'; ?>

<main>
    <!-- TODO: add search -->

    <div class="mx-auto max-w-7xl px-4 py-6 px-6 lg:px-8">
        <?php foreach ($contacts as $contact) : ?>
            <a href="/contacts/<?= $contact['id'] ?>">
                <div class="bg-white shadow overflow-hidden rounded-lg mb-4">
                    <div class="px-4 py-5 px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900"><?= htmlspecialchars($contact['name'] . " " . $contact['last_name']) ?></h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500"><?= htmlspecialchars($contact['phone']) ?></p>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500"><?= htmlspecialchars($contact['email']) ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- TODO: add pagination -->
</main>

<?php require 'views/partials/footer.php'; ?>
