<?php include dirname(__DIR__, 3) . '/shared/layouts/header.php'; ?>

<div class="min-h-screen flex items-center justify-center bg-npcDark relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-npcGreen rounded-full blur-[120px]"></div>
    </div>

    <div class="relative w-full max-w-md p-6">
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-10 rounded-[2.5rem] shadow-2xl">
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-npcGreen rounded-2xl shadow-glow mb-4">
                    <i class="fa-solid fa-user-shield text-white text-2xl"></i>
                </div>
                <h2 class="text-2xl font-black text-white tracking-tight uppercase">Admin Login</h2>
                <p class="text-gray-400 text-xs mt-2 tracking-widest uppercase">Gedong Meneng Baru</p>
            </div>

            <form action="<?= BASE_URL ?>/admin/login" method="POST" class="space-y-6">
                <div class="space-y-2">
                    <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-1">Username</label>
                    <input type="text" name="username" required 
                           class="w-full px-6 py-4 bg-white/5 border border-white/10 rounded-2xl text-white outline-none focus:border-npcGreen focus:ring-1 focus:ring-npcGreen transition">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-1">Password</label>
                    <input type="password" name="password" required 
                           class="w-full px-6 py-4 bg-white/5 border border-white/10 rounded-2xl text-white outline-none focus:border-npcGreen focus:ring-1 focus:ring-npcGreen transition">
                </div>
                <button type="submit" class="w-full py-4 bg-npcGreen text-white rounded-2xl font-bold shadow-glow hover:bg-green-600 transition transform active:scale-95">
                    MASUK KE PANEL
                </button>
            </form>
        </div>
    </div>
</div>