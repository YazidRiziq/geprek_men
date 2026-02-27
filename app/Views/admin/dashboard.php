<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Header -->
<header class="h-16 border-b border-slate-200 dark:border-primary/10 bg-white dark:bg-background-dark flex items-center justify-between px-8 shrink-0">
    <div class="flex items-center gap-4 flex-1">
        <div class="relative max-w-md w-full">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">search</span>
            <input class="w-full bg-slate-100 dark:bg-primary/5 border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary focus:bg-white transition-all" placeholder="Search analytics, orders..." type="text" />
        </div>
    </div>
    <div class="flex items-center gap-3">
        <button class="p-2 rounded-lg text-slate-500 hover:bg-slate-100 dark:hover:bg-primary/10 relative">
            <span class="material-symbols-outlined">notifications</span>
            <span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-background-dark"></span>
        </button>
        <button class="p-2 rounded-lg text-slate-500 hover:bg-slate-100 dark:hover:bg-primary/10">
            <span class="material-symbols-outlined">settings</span>
        </button>
        <div class="h-6 w-[1px] bg-slate-200 dark:bg-primary/20 mx-2"></div>
        <button class="flex items-center gap-2 bg-primary text-background-dark px-4 py-2 rounded-lg text-sm font-bold">
            <span class="material-symbols-outlined text-lg">add</span>
            <span>New Order</span>
        </button>
    </div>
</header>
<!-- Scrollable Area -->
<div class="flex-1 overflow-y-auto p-8 space-y-8">
    <!-- Welcome Section -->
    <div>
        <h2 class="text-3xl font-black tracking-tight">Dashboard Overview</h2>
        <p class="text-slate-500 dark:text-primary/60 mt-1">Welcome back! Here's what's happening at your restaurant today.</p>
    </div>
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white dark:bg-primary/5 p-6 rounded-xl border border-slate-200 dark:border-primary/10">
            <div class="flex items-center justify-between mb-4">
                <div class="size-10 rounded-lg bg-primary/20 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <span class="text-primary text-sm font-bold flex items-center">+12.5% <span class="material-symbols-outlined text-xs">trending_up</span></span>
            </div>
            <p class="text-slate-500 dark:text-primary/60 text-sm font-medium">Total Sales</p>
            <h3 class="text-2xl font-bold mt-1">$12,450.00</h3>
        </div>
        <div class="bg-white dark:bg-primary/5 p-6 rounded-xl border border-slate-200 dark:border-primary/10">
            <div class="flex items-center justify-between mb-4">
                <div class="size-10 rounded-lg bg-orange-500/20 text-orange-500 flex items-center justify-center">
                    <span class="material-symbols-outlined">shopping_cart</span>
                </div>
                <span class="text-primary text-sm font-bold flex items-center">+5.2% <span class="material-symbols-outlined text-xs">trending_up</span></span>
            </div>
            <p class="text-slate-500 dark:text-primary/60 text-sm font-medium">Active Orders</p>
            <h3 class="text-2xl font-bold mt-1">24</h3>
        </div>
        <div class="bg-white dark:bg-primary/5 p-6 rounded-xl border border-slate-200 dark:border-primary/10">
            <div class="flex items-center justify-between mb-4">
                <div class="size-10 rounded-lg bg-blue-500/20 text-blue-500 flex items-center justify-center">
                    <span class="material-symbols-outlined">group</span>
                </div>
                <span class="text-red-500 text-sm font-bold flex items-center">-2% <span class="material-symbols-outlined text-xs">trending_down</span></span>
            </div>
            <p class="text-slate-500 dark:text-primary/60 text-sm font-medium">Total Employees</p>
            <h3 class="text-2xl font-bold mt-1">48</h3>
        </div>
        <div class="bg-white dark:bg-primary/5 p-6 rounded-xl border border-slate-200 dark:border-primary/10">
            <div class="flex items-center justify-between mb-4">
                <div class="size-10 rounded-lg bg-purple-500/20 text-purple-500 flex items-center justify-center">
                    <span class="material-symbols-outlined">star</span>
                </div>
                <span class="text-primary text-sm font-bold flex items-center">+18% <span class="material-symbols-outlined text-xs">trending_up</span></span>
            </div>
            <p class="text-slate-500 dark:text-primary/60 text-sm font-medium">Popular Items</p>
            <h3 class="text-2xl font-bold mt-1">Margherita Pizza</h3>
        </div>
    </div>
    <!-- Secondary Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Recent Orders -->
        <div class="lg:col-span-2 bg-white dark:bg-primary/5 rounded-xl border border-slate-200 dark:border-primary/10 overflow-hidden">
            <div class="p-6 border-b border-slate-200 dark:border-primary/10 flex items-center justify-between">
                <h3 class="font-bold text-lg">Recent Orders</h3>
                <button class="text-primary text-sm font-bold hover:underline">View All</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-50 dark:bg-primary/10 text-slate-500 dark:text-primary/60 text-xs uppercase font-bold">
                        <tr>
                            <th class="px-6 py-4">Order ID</th>
                            <th class="px-6 py-4">Customer</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Total</th>
                            <th class="px-6 py-4 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-primary/10">
                        <tr>
                            <td class="px-6 py-4 font-medium">#ORD-2849</td>
                            <td class="px-6 py-4">James Wilson</td>
                            <td class="px-6 py-4">
                                <span class="bg-yellow-100 text-yellow-700 dark:bg-yellow-500/20 dark:text-yellow-500 text-[10px] px-2 py-1 rounded-full font-black uppercase">Preparing</span>
                            </td>
                            <td class="px-6 py-4 font-bold">$42.50</td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1 hover:bg-slate-100 dark:hover:bg-primary/20 rounded">
                                    <span class="material-symbols-outlined text-slate-400">visibility</span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-medium">#ORD-2848</td>
                            <td class="px-6 py-4">Sarah Connor</td>
                            <td class="px-6 py-4">
                                <span class="bg-primary/20 text-primary text-[10px] px-2 py-1 rounded-full font-black uppercase">Delivered</span>
                            </td>
                            <td class="px-6 py-4 font-bold">$124.00</td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1 hover:bg-slate-100 dark:hover:bg-primary/20 rounded">
                                    <span class="material-symbols-outlined text-slate-400">visibility</span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-medium">#ORD-2847</td>
                            <td class="px-6 py-4">Marcus Fenix</td>
                            <td class="px-6 py-4">
                                <span class="bg-primary/20 text-primary text-[10px] px-2 py-1 rounded-full font-black uppercase">Delivered</span>
                            </td>
                            <td class="px-6 py-4 font-bold">$18.90</td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1 hover:bg-slate-100 dark:hover:bg-primary/20 rounded">
                                    <span class="material-symbols-outlined text-slate-400">visibility</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Category Distribution -->
        <div class="bg-white dark:bg-primary/5 rounded-xl border border-slate-200 dark:border-primary/10 p-6">
            <h3 class="font-bold text-lg mb-6">Top Categories</h3>
            <div class="space-y-6">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium">Main Course</span>
                        <span class="text-sm font-bold">45%</span>
                    </div>
                    <div class="h-2 w-full bg-slate-100 dark:bg-primary/10 rounded-full overflow-hidden">
                        <div class="h-full bg-primary rounded-full" style="width: 45%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium">Beverages</span>
                        <span class="text-sm font-bold">30%</span>
                    </div>
                    <div class="h-2 w-full bg-slate-100 dark:bg-primary/10 rounded-full overflow-hidden">
                        <div class="h-full bg-orange-500 rounded-full" style="width: 30%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium">Desserts</span>
                        <span class="text-sm font-bold">15%</span>
                    </div>
                    <div class="h-2 w-full bg-slate-100 dark:bg-primary/10 rounded-full overflow-hidden">
                        <div class="h-full bg-purple-500 rounded-full" style="width: 15%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium">Appetizers</span>
                        <span class="text-sm font-bold">10%</span>
                    </div>
                    <div class="h-2 w-full bg-slate-100 dark:bg-primary/10 rounded-full overflow-hidden">
                        <div class="h-full bg-blue-500 rounded-full" style="width: 10%"></div>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-slate-200 dark:border-primary/10">
                <div class="flex items-center gap-4">
                    <div class="flex-1 bg-slate-100 dark:bg-primary/10 p-4 rounded-lg text-center">
                        <p class="text-xs text-slate-500 dark:text-primary/60 uppercase font-black">Orders</p>
                        <p class="text-xl font-bold">1,204</p>
                    </div>
                    <div class="flex-1 bg-slate-100 dark:bg-primary/10 p-4 rounded-lg text-center">
                        <p class="text-xs text-slate-500 dark:text-primary/60 uppercase font-black">Income</p>
                        <p class="text-xl font-bold">$12k</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>