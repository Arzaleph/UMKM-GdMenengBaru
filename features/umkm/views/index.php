<section class="max-w-7xl mx-auto px-6 py-24">
    <div class="mb-12 text-center">
        <h2 class="text-4xl font-extrabold text-npcDark mb-4">Daftar UMKM Desa</h2>
        <p class="text-gray-500 max-w-2xl mx-auto">Jelajahi berbagai usaha lokal terbaik dari Desa Gedong Meneng Baru. Dukung produk tetangga untuk ekonomi yang lebih kuat.</p>
        <div class="w-20 h-1 bg-npcGreen mx-auto mt-6 rounded-full"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <?php foreach ($umkm as $u): ?>
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group flex flex-col">
            <div class="relative h-48 overflow-hidden bg-gray-100">
                <?php if (!empty($u['foto']) && file_exists("public/uploads/" . $u['foto'])): ?>
                    <img src="<?= BASE_URL ?>/public/uploads/<?= $u['foto'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <?php else: ?>
                    <img src="<?= BASE_URL ?>/public/img/default-umkm.jpg" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <?php endif; ?>
                
                <div class="absolute top-4 right-4">
                    <span class="bg-white/90 backdrop-blur-sm text-npcDark text-[10px] font-bold px-3 py-1 rounded-lg shadow-sm">
                        <i class="fa-solid fa-tag text-npcGreen mr-1"></i> <?= htmlspecialchars($u["kategori"]) ?>
                    </span>
                </div>
            </div>
            <div class="p-6 flex-1 flex flex-col">
                <h3 class="text-lg font-bold text-npcDark mb-2 group-hover:text-npcGreen transition"><?= htmlspecialchars($u["nama"]) ?></h3>
                <p class="text-gray-500 text-xs leading-relaxed mb-6 flex-1">
                    <?= htmlspecialchars(substr($u["deskripsi"], 0, 80)) ?>...
                </p>
                <div class="pt-4 border-t border-gray-50 flex items-center justify-between mt-auto">
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">ID: #<?= $u["id"] ?></span>
                    <a href="<?= BASE_URL ?>/umkm/detail?id=<?= $u["id"] ?>" class="text-npcGreen font-bold text-sm hover:underline flex items-center gap-1">
                        Detail <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>