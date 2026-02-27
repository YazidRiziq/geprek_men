<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<section class="flex-1 flex flex-col overflow-hidden bg-slate-50 dark:bg-slate-900/20">
    <!-- Header Section -->
    <div class="flex flex-wrap justify-between items-center gap-4 p-6 bg-white dark:bg-background-dark border-b border-slate-200 dark:border-primary/10">
        <div class="flex flex-col gap-1">
            <h2 class="text-slate-900 dark:text-slate-100 text-2xl font-black leading-tight tracking-tight">Manage Categories &amp; Roles</h2>
            <p class="text-slate-500 dark:text-primary/60 text-sm font-normal">Organize your menu structure and define user access levels.</p>
        </div>
        <div class="flex gap-3">
            <button class="flex items-center justify-center rounded-lg h-10 px-4 bg-slate-100 dark:bg-primary/10 text-slate-700 dark:text-slate-200 text-sm font-bold hover:bg-slate-200 dark:hover:bg-primary/20 transition-all">
                Discard
            </button>
            <button class="flex items-center justify-center rounded-lg h-10 px-6 bg-primary text-background-dark text-sm font-bold hover:opacity-90 transition-all shadow-lg shadow-primary/20">
                Save Changes
            </button>
        </div>
    </div>
    
    <!-- Right Side: User Roles & Permissions -->
    <div class="flex-1 flex flex-col gap-4">
        <div class="flex items-center justify-between">
            <h3 class="text-slate-900 dark:text-slate-100 text-lg font-bold flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">security</span>
                User Roles &amp; Permissions
            </h3>
        </div>
        <div class="space-y-4">
            <!-- Role Card: Admin -->
            <div class="bg-white dark:bg-background-dark rounded-xl border border-slate-200 dark:border-primary/10 p-5 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="size-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary font-bold">AD</div>
                        <div>
                            <h4 class="text-slate-900 dark:text-slate-100 font-bold">Admin</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Full system access and settings</p>
                        </div>
                    </div>
                    <span class="material-symbols-outlined text-primary">verified_user</span>
                </div>
                <div class="grid grid-cols-2 gap-3 mt-4">
                    <div class="flex items-center justify-between p-2 rounded-lg bg-slate-50 dark:bg-primary/5 border border-slate-100 dark:border-primary/10">
                        <span class="text-xs font-medium">Manage Menu</span>
                        <div class="w-8 h-4 bg-primary rounded-full relative">
                            <div class="absolute right-1 top-1 size-2 bg-background-dark rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg bg-slate-50 dark:bg-primary/5 border border-slate-100 dark:border-primary/10">
                        <span class="text-xs font-medium">Refund Orders</span>
                        <div class="w-8 h-4 bg-primary rounded-full relative">
                            <div class="absolute right-1 top-1 size-2 bg-background-dark rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Role Card: Chef -->
            <div class="bg-white dark:bg-background-dark rounded-xl border border-slate-200 dark:border-primary/10 p-5 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="size-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary font-bold">CH</div>
                        <div>
                            <h4 class="text-slate-900 dark:text-slate-100 font-bold">Chef</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Manage kitchen and food prep</p>
                        </div>
                    </div>
                    <button class="text-xs text-primary font-bold hover:underline">Customize</button>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="flex items-center justify-between p-2 rounded-lg bg-slate-50 dark:bg-primary/5 border border-slate-100 dark:border-primary/10">
                        <span class="text-xs font-medium">Kitchen Display</span>
                        <div class="w-8 h-4 bg-primary rounded-full relative">
                            <div class="absolute right-1 top-1 size-2 bg-background-dark rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg bg-slate-50 dark:bg-primary/5 border border-slate-100 dark:border-primary/10">
                        <span class="text-xs font-medium">Edit Menu Items</span>
                        <div class="w-8 h-4 bg-slate-300 dark:bg-slate-700 rounded-full relative">
                            <div class="absolute left-1 top-1 size-2 bg-white dark:bg-slate-400 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Role Card: Cashier -->
            <div class="bg-white dark:bg-background-dark rounded-xl border border-slate-200 dark:border-primary/10 p-5 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="size-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary font-bold">CA</div>
                        <div>
                            <h4 class="text-slate-900 dark:text-slate-100 font-bold">Cashier</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Handle payments and checkout</p>
                        </div>
                    </div>
                    <button class="text-xs text-primary font-bold hover:underline">Customize</button>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="flex items-center justify-between p-2 rounded-lg bg-slate-50 dark:bg-primary/5 border border-slate-100 dark:border-primary/10">
                        <span class="text-xs font-medium">Create Order</span>
                        <div class="w-8 h-4 bg-primary rounded-full relative">
                            <div class="absolute right-1 top-1 size-2 bg-background-dark rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg bg-slate-50 dark:bg-primary/5 border border-slate-100 dark:border-primary/10">
                        <span class="text-xs font-medium">Daily Reports</span>
                        <div class="w-8 h-4 bg-slate-300 dark:bg-slate-700 rounded-full relative">
                            <div class="absolute left-1 top-1 size-2 bg-white dark:bg-slate-400 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>