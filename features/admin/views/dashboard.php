<div class="flex min-h-screen bg-gray-50">
    <aside class="w-64 bg-slate-900 text-gray-400 flex flex-col fixed h-full shadow-2xl z-20">
        <div class="h-20 flex items-center gap-3 px-6 bg-slate-950 border-b border-slate-800">
            <div class="w-10 h-10 bg-npcGreen rounded-xl flex items-center justify-center shadow-glow">
                <i class="fa-solid fa-user-shield text-white text-lg"></i>
            </div>
            <div class="flex flex-col">
                <span class="text-gray-100 font-bold text-base leading-tight">Panel Admin</span>
                <span class="text-[10px] text-npcGreen font-bold uppercase tracking-widest">Gedong Meneng</span>
            </div>
        </div>
        
        <nav class="flex-1 px-4 py-8 space-y-2">
            <div class="px-4 mb-4 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Menu Utama</div>
            
            <a href="<?= BASE_URL ?>/admin/dashboard" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-npcGreen/10 text-npcGreen border border-npcGreen/20 shadow-sm transition-all">
                <i class="fa-solid fa-chart-line w-5 text-center"></i>
                <span class="font-bold text-sm">Dashboard</span>
            </a>
            
            <a href="<?= BASE_URL ?>/admin/umkm/create" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-white transition-all group">
                <i class="fa-solid fa-plus w-5 text-center group-hover:scale-110 transition"></i>
                <span class="font-medium text-sm">Tambah UMKM</span>
            </a>

            <div class="pt-6 px-4 mb-4 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Sistem</div>
            <a href="<?= BASE_URL ?>/" target="_blank" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-white transition-all">
                <i class="fa-solid fa-globe w-5 text-center"></i>
                <span class="font-medium text-sm">Lihat Website</span>
            </a>
        </nav>

        <div class="p-4 bg-slate-950 border-t border-slate-800">
            <a href="<?= BASE_URL ?>/admin/logout" class="flex items-center justify-center gap-3 w-full py-3 bg-red-500/10 hover:bg-red-600 text-red-500 hover:text-white rounded-xl transition-all text-sm font-bold shadow-sm">
                <i class="fa-solid fa-right-from-bracket"></i> Keluar Sesi
            </a>
        </div>
    </aside>

    <main class="flex-1 ml-64">
        <header class="bg-white h-20 border-b border-gray-100 flex items-center justify-between px-10 sticky top-0 z-10 backdrop-blur-md bg-white/80">
            <div>
                <h2 class="text-xl font-black text-npcDark tracking-tight">Ringkasan Data</h2>
                <p class="text-xs text-gray-400 font-medium">Selamat datang kembali, <?= $_SESSION["admin"]["username"] ?>!</p>
            </div>
            
            <div class="flex items-center gap-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold text-npcDark"><?= $_SESSION["admin"]["username"] ?></p>
                    <p class="text-[10px] text-npcGreen font-bold uppercase tracking-widest">Administrator</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-slate-800 to-slate-900 text-white flex items-center justify-center font-bold shadow-lg border-2 border-white">
                    <?= strtoupper(substr($_SESSION["admin"]["username"], 0, 1)) ?>
                </div>
            </div>
        </header>

        <div class="p-10 space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm flex items-center gap-5">
                    <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-npcGreen text-xl shadow-inner">
                        <i class="fa-solid fa-shop"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Total UMKM</p>
                        <p class="text-2xl font-black text-npcDark"><?= count($umkm) ?></p>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm flex items-center gap-5">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-500 text-xl shadow-inner">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Update Terakhir</p>
                        <p class="text-sm font-bold text-npcDark"><?= date('d M Y') ?></p>
                    </div>
                </div>

                <div class="bg-npcGreen p-6 rounded-[2rem] shadow-glow flex items-center gap-5 text-white">
                    <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center text-xl backdrop-blur-md">
                        <i class="fa-solid fa-check-double"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-white/70 uppercase tracking-widest">Status Sistem</p>
                        <p class="text-sm font-bold">Terhubung & Aktif</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-8 py-6 border-b border-gray-50 flex items-center justify-between bg-white">
                    <h3 class="font-black text-npcDark uppercase tracking-wider text-sm">Manajemen Daftar UMKM</h3>
                    <a href="<?= BASE_URL ?>/admin/umkm/create" class="px-5 py-2.5 bg-npcDark text-white rounded-xl text-xs font-bold hover:bg-slate-800 transition-all flex items-center gap-2">
                        <i class="fa-solid fa-plus"></i> Tambah Baru
                    </a>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="px-8 py-5 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">No</th>
                                <th class="px-8 py-5 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Informasi UMKM</th>
                                <th class="px-8 py-5 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Kategori</th>
                                <th class="px-8 py-5 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Kontak</th>
                                <th class="px-8 py-5 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <?php foreach ($umkm as $i => $u): ?>
                            <tr class="hover:bg-gray-50/50 transition-all group">
                                <td class="px-8 py-5 text-sm font-bold text-gray-300">#<?= $i+1 ?></td>
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-xl bg-gray-100 overflow-hidden border border-gray-200">
                                            <img src="<?= BASE_URL ?>/public/uploads/<?= $u['foto'] ?? 'default.jpg' ?>" 
                                                 class="w-full h-full object-cover group-hover:scale-110 transition"
                                                 onerror="this.src='https://placehold.co/400x400?text=UMKM'">
                                        </div>
                                        <div>
                                            <p class="font-bold text-npcDark text-sm group-hover:text-npcGreen transition"><?= htmlspecialchars($u["nama"]) ?></p>
                                            <p class="text-[10px] text-gray-400 font-medium"><?= htmlspecialchars($u["alamat"]) ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="px-3 py-1 bg-green-50 text-npcGreen rounded-lg text-[10px] font-black uppercase tracking-widest border border-green-100">
                                        <?= htmlspecialchars($u["kategori"]) ?>
                                    </span>
                                </td>
                                <td class="px-8 py-5 text-xs font-bold text-gray-500">
                                    <?= htmlspecialchars($u["kontak"]) ?>
                                </td>
                                <td class="px-8 py-5">
                                    <div class="flex justify-center gap-3">
                                        <a href="<?= BASE_URL ?>/admin/umkm/edit?id=<?= $u["id"] ?>" 
                                           class="w-9 h-9 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all shadow-sm">
                                            <i class="fa-solid fa-pen-to-square text-xs"></i>
                                        </a>
                                        <a onclick="return confirm('Yakin ingin menghapus data ini?')" 
                                           href="<?= BASE_URL ?>/admin/umkm/delete?id=<?= $u["id"] ?>" 
                                           class="w-9 h-9 bg-red-50 text-red-600 rounded-xl flex items-center justify-center hover:bg-red-600 hover:text-white transition-all shadow-sm">
                                            <i class="fa-solid fa-trash text-xs"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <?php if (empty($umkm)): ?>
                <div class="py-20 text-center">
                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-300">
                        <i class="fa-solid fa-box-open text-3xl"></i>
                    </div>
                    <p class="text-gray-400 text-sm font-medium">Belum ada data UMKM yang terdaftar.</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>