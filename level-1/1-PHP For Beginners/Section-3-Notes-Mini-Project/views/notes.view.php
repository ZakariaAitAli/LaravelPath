<?php require "views/partials/head.php"; ?>
<?php require "views/partials/nav.php"; ?>
<?php require "views/partials/banner.php"; ?>
    <main>
        <ul class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p>
                <?php foreach ($notes

                as $note): ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']) ?></a>
            </li>
            <?php endforeach; ?>
            </p>
        </ul>
        <p class="mt-6">
            <a href="note/create" class="ml-20 text-blue-500 hover:underline">Create Note</a>
        </p>
    </main>
<?php require "views/partials/footer.php"; ?>