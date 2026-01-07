<section id="beranda" class="relative min-h-[80vh] flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=2000" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-npcDark/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-npcDark via-transparent to-npcDark/50"></div>
    </div>

    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-green-400 text-xs font-bold uppercase tracking-wider mb-8">
            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
            Promosi Produk Lokal Desa
        </div>
        
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight tracking-tight">
            Dukung Ekonomi Lokal <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-400">Desa Gedong Meneng Baru</span>
        </h1>
        
        <p class="text-lg text-gray-300 mb-10 max-w-2xl mx-auto font-light">
            Temukan produk UMKM terbaik mulai dari kuliner, kerajinan, hingga jasa pelayanan dari warga desa kami.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="text-3xl font-bold text-npcDark">UMKM Unggulan</h2>
            <p class="text-gray-500 mt-2">Daftar usaha lokal yang siap melayani Anda</p>
        </div>
        <a href="<?= BASE_URL ?>/umkm" class="text-npcGreen font-bold flex items-center gap-2 hover:gap-3 transition-all">
            Lihat Semua <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($umkm as $u): ?>
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
            <div class="relative h-48 overflow-hidden">
                <img src="<?= BASE_URL ?>/public/img/default-umkm.jpg" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute top-4 left-4">
                    <span class="bg-npcGreen text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Unggulan</span>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-npcDark mb-2 group-hover:text-npcGreen transition"><?= $u["nama"] ?></h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    <?= substr($u["deskripsi"], 0, 100) ?>...
                </p>
                <a href="<?= BASE_URL ?>/umkm/detail?id=<?= $u["id"] ?>" class="block w-full text-center py-3 rounded-xl bg-gray-50 text-npcDark font-bold hover:bg-npcGreen hover:text-white transition shadow-sm">
                    Lihat Detail
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>