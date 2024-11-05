<section class="space-y-6">
    <form class="w-full flex space-x-2">
        <input type="text" 
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-3 py-1"
            placeholder="Pesquisar"
            name="research"/>
        <button type="submit">
            <svg class="w-5 h-5 text-lime-500 hover:text-lime-600 fill-current" viewBox="0 0 511.999 511.999">
                <path d="M496.131,435.698L374.855,332.551c-12.537-11.283-25.945-16.463-36.777-15.963C366.707,283.055,384,239.549,384,192
                C384,85.961,298.039,0,192,0C85.962,0,0,85.961,0,192s85.961,192,192,192c47.549,0,91.055-17.293,124.588-45.922
                c-0.5,10.831,4.68,24.238,15.963,36.775L435.697,496.13c17.662,19.623,46.512,21.277,64.109,3.678
                C517.406,482.209,515.754,453.359,496.131,435.698z M192,320c-70.692,0-128-57.309-128-128c0-70.692,57.308-128,128-128
                c70.691,0,128,57.308,128,128C320,262.691,262.693,320,192,320z"/>
            </svg>
        </button>
    </form>
</section>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
    <!-- ==== Book Card ==== -->
    <?php foreach($books as $book): ?>
        <div class="p-2 rounded border-stone-800 bg-stone-900 border-2">
            <div class="flex">
                <figure class="w-1/3 ml-3 mb-3 mr-3">
                    <img src="https://picsum.photos/id/<?= $book['id'] ?>/600/400" alt="">
                </figure>
                <div class="space-y-1">
                    <a href="/book?id=<?= $book['id'] ?>" class="font-semibold hover:underline"><?= $book['title'] ?></a>
                    <p class="text-xs italic"><?= $book['author'] ?></p>
                    <p class="text-xs">⭐⭐⭐ <span class="italic">(3 Avaliações)</span></p>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?= $book['description'] ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>