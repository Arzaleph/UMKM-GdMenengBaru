<div class="pt-24 pb-12 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        <?php if (isset($umkm) && $umkm): ?>
            <nav class="flex mb-8 text-sm text-gray-500">
                <a href="<?= BASE_URL ?>" class="hover:text-npcGreen">Beranda</a>
                <span class="mx-2">/</span>
                <span class="text-gray-800 font-bold"><?= htmlspecialchars($umkm['nama']) ?></span>
            </nav>

            <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 h-[400px] md:h-auto bg-gray-200">
                        <?php if (!empty($umkm['foto']) && file_exists("public/uploads/" . $umkm['foto'])): ?>
                            <img src="<?= BASE_URL ?>/public/uploads/<?= $umkm['foto'] ?>" class="w-full h-full object-cover">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center text-gray-400 italic text-sm">
                                <div class="text-center">
                                    <i class="fa-solid fa-image text-5xl mb-2"></i>
                                    <p>No Image Available</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="md:w-1/2 p-8 md:p-12">
                        <span class="px-4 py-1.5 bg-green-100 text-npcGreen text-[10px] font-black uppercase tracking-widest rounded-full border border-green-200">
                            <?= htmlspecialchars($umkm['kategori']) ?>
                        </span>
                        <h1 class="text-4xl font-black text-npcDark mt-4 mb-6 uppercase tracking-tight"><?= htmlspecialchars($umkm['nama']) ?></h1>
                        
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Tentang Usaha</h3>
                                <p class="text-gray-600 leading-relaxed"><?= nl2br(htmlspecialchars($umkm['deskripsi'])) ?></p>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-npcGreen border border-gray-100">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase">Lokasi</p>
                                    <p class="text-gray-700 font-medium"><?= htmlspecialchars($umkm['alamat']) ?></p>
                                </div>
                            </div>

                            <div class="pt-6 border-t border-gray-50">
                                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $umkm['kontak']) ?>" target="_blank"
                                   class="inline-flex items-center gap-3 px-8 py-4 bg-npcGreen text-white rounded-2xl font-bold shadow-glow hover:bg-green-600 transition">
                                    <i class="fa-brands fa-whatsapp text-xl"></i>
                                    Hubungi Via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="text-center py-20">
                <h2 class="text-2xl font-bold text-gray-400">Data UMKM tidak ditemukan.</h2>
                <a href="<?= BASE_URL ?>" class="text-npcGreen mt-4 inline-block">Kembali ke Beranda</a>
            </div>
        <?php endif; ?>
    </div>
</div>