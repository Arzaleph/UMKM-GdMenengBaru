<section class="max-w-7xl mx-auto px-6 py-24">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
        <div>
            <span class="text-npcGreen font-bold text-xs uppercase tracking-[0.2em]">Klasifikasi</span>
            <h2 class="text-3xl font-extrabold text-npcDark mt-2">Kategori UMKM</h2>
        </div>
        <p class="text-gray-500 text-sm max-w-md md:text-right">Pilih kategori untuk menemukan jenis usaha yang spesifik sesuai kebutuhan Anda.</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <?php foreach ($kategori as $k): ?>
        <a href="<?= BASE_URL ?>/umkm?kategori=<?= urlencode($k['kategori']) ?>" class="group p-8 bg-white rounded-2xl border border-gray-100 shadow-sm hover:border-npcGreen hover:shadow-glow transition-all text-center">
            <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-npcGreen group-hover:text-white transition-colors text-npcGreen">
                <i class="fa-solid fa-layer-group text-2xl"></i>
            </div>
            <h4 class="font-bold text-npcDark group-hover:text-npcGreen transition"><?= htmlspecialchars($k['kategori']) ?></h4>
            <p class="text-[10px] text-gray-400 uppercase mt-2 tracking-widest font-bold">Lihat <?= $k['total'] ?> Produk</p>
        </a>
        <?php endforeach; ?>
    </div>
</section>