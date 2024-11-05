<div class="p-2 rounded border-stone-800 bg-stone-900 border-2">
    <div class="flex">
        <figure class="w-1/3 ml-3 mb-3 mr-3">
            <img src="https://picsum.photos/id/<?= $book['id'] ?>/600/400" alt="">
        </figure>
        <div class="space-y-1">
            <a href="/book.php?id=<?= $book['id'] ?>" class="font-semibold hover:underline"><?= $book['title'] ?></a>
            <p class="text-xs italic"><?= $book['author'] ?></p>
            <p class="text-xs">⭐⭐⭐ <span class="italic">(3 Avaliações)</span></p>
        </div>
    </div>
    <div class="text-sm mt-2">
        <?= $book['description'] ?>
    </div>
</div>