<?php require "views/partials/head.php";?>
<?php require "views/partials/nav.php";?>
<?php require "views/partials/banner.php";?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <?php foreach ($notes as $note):?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline"><?= $note['body']?></a>
            </li>
            <?php endforeach;?>
        </p>
    </div>
</main>
<?php require "views/partials/footer.php";?>