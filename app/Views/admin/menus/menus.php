<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Header -->
<header class="h-16 flex items-center justify-between px-8 bg-white dark:bg-background-dark border-b border-slate-200 dark:border-primary/10">
    <div class="flex items-center gap-4 flex-1 max-w-xl">
        <div class="relative w-full">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">search</span>
            <input class="w-full pl-10 pr-4 py-2 bg-slate-100 dark:bg-primary/5 border-none rounded-lg focus:ring-2 focus:ring-primary text-sm placeholder:text-slate-400" placeholder="Search menu items..." type="text" />
        </div>
    </div>
    <div class="flex items-center gap-4">
        <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-slate-100 dark:bg-primary/5 text-slate-600 dark:text-slate-300 hover:bg-primary/20 hover:text-primary transition-colors">
            <span class="material-symbols-outlined">notifications</span>
        </button>
        <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-slate-100 dark:bg-primary/5 text-slate-600 dark:text-slate-300 hover:bg-primary/20 hover:text-primary transition-colors">
            <span class="material-symbols-outlined">settings</span>
        </button>
    </div>
</header>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-8">
    <!-- Page Title Section -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Manage Menu Items</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-1">Configure your restaurant's digital menu offerings and pricing.</p>
        </div>
        <button class="flex items-center gap-2 px-5 py-2.5 bg-primary text-background-dark font-bold rounded-lg hover:brightness-110 transition-all shadow-lg shadow-primary/20">
            <span class="material-symbols-outlined">add</span>
            Add New Menu Item
        </button>
    </div>
    <!-- Filters -->
    <div class="flex flex-wrap gap-2 mb-6">
        <button class="px-4 py-1.5 rounded-full bg-primary text-background-dark text-sm font-semibold">All Items</button>
        <button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-primary/10 text-slate-700 dark:text-slate-300 text-sm font-medium hover:bg-primary/20 transition-colors">Appetizers</button>
        <button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-primary/10 text-slate-700 dark:text-slate-300 text-sm font-medium hover:bg-primary/20 transition-colors">Main Course</button>
        <button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-primary/10 text-slate-700 dark:text-slate-300 text-sm font-medium hover:bg-primary/20 transition-colors">Desserts</button>
        <button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-primary/10 text-slate-700 dark:text-slate-300 text-sm font-medium hover:bg-primary/20 transition-colors">Beverages</button>
        <button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-primary/10 text-slate-700 dark:text-slate-300 text-sm font-medium hover:bg-primary/20 transition-colors">Specials</button>
    </div>
    <!-- Table Container -->
    <div class="bg-white dark:bg-slate-900/50 rounded-xl border border-slate-200 dark:border-primary/10 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-primary/5">
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-primary/70">Image</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-primary/70">Name</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-primary/70">Category</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-primary/70">Price</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-primary/70">Status</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-primary/70 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-primary/10">
                    <!-- Row 1 -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="w-12 h-12 rounded-lg bg-primary/20 overflow-hidden bg-cover bg-center" data-alt="Classic beef burger with melting cheese" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBFhhRcodPlgfTmmO4EXIeORp5B64optQzgdfrvWhuFNbTOKj7bhBCrgjc0s-L87AQbUx1SNkwlRaK2bb3rDh7AkSOpR4l3Funs1I_bMqA9bABfTtBH1LyywVeSGqk1l9C04wlwEIs4__CZgcWBIgr17yH6GPL3e3tjj3Xk2x3YS7TiyQOeDx7ab3AAqC4yTLCIYKwBaRwhXPq_2jququqrbGpvrcr0KCbhz1wAxeoeTXgYyRX3Z3zPSBmz2-2lfFM56yK0krwJRrYf')"></div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-semibold text-slate-900 dark:text-white">Classic Beef Burger</p>
                            <p class="text-sm text-slate-500">Angus beef patty with secret sauce</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">Main Course</span>
                        </td>
                        <td class="px-6 py-4 font-mono font-medium text-primary">$14.99</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                Available
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="w-12 h-12 rounded-lg bg-primary/20 overflow-hidden bg-cover bg-center" data-alt="Fresh mediterranean salad bowl" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA0RwDvK2uQhWsiKJNslGqvvA_V7r_GBlmrpsb8_Gg0pprLjoRFc_ZWjJlAGcutxx1nS8zo5kN81TdUN6LnGNWUPUlc5eALF8I7iGSq6Rp5pbkggjWjZ4g2ebgAyUpooFvaKFKVp4982qKiY3jFQef6PX7yljEHtBV1oL-VFJqmiX-r_UcI0LN6UOjQ2THnpAL32dEqLPeUkM1PShSIQ9HCrwZRhsvHky-mxmNytOd6vLSUrJPyUlnhLZPQqU7Z5bbcVhQhm3DRvLUc')"></div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-semibold text-slate-900 dark:text-white">Quinoa Salad Bowl</p>
                            <p class="text-sm text-slate-500">Gluten-free organic greens</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-400">Appetizers</span>
                        </td>
                        <td class="px-6 py-4 font-mono font-medium text-primary">$12.50</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                Available
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="w-12 h-12 rounded-lg bg-primary/20 overflow-hidden bg-cover bg-center" data-alt="Dark chocolate lava cake" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAsLJCb0HwSg9MZaxgrorCfw0IrnYTIUSbEt6Vl0-o38P5iw3FG8IJdRjFICUFU_Bdy8xaWDXQyhRApAsNcfKMS3T5_tEiQkgtGe4jEdfKXjKpDx0tw_X6cUDE_2yAl9tXyJguYTDessMYA8sHszsCRVzv-LjOPXMPLDXmgemVMCR4exymzyCf24QEOh2ivWkyTtE3JfUZw2hWiDXHmVbKuxoOO5ggBaS10EJHO4T3bpif7jGqA0d-8bjHgVvADmkDggjYbBctEVbNr')"></div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-semibold text-slate-900 dark:text-white">Molten Lava Cake</p>
                            <p class="text-sm text-slate-500">Dark chocolate with vanilla bean ice cream</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-400">Desserts</span>
                        </td>
                        <td class="px-6 py-4 font-mono font-medium text-primary">$8.00</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-400">
                                <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                Unavailable
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="w-12 h-12 rounded-lg bg-primary/20 overflow-hidden bg-cover bg-center" data-alt="Iced fruit cocktail drink" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCQgXHYFKceaLALQ120YhlQdJWeykKa1cvBHegcSru5_sEzorKPjNJX-qdGMljWX77mM1sIp5RvRGMhzyHFiUyhz6BOFIiimle1JF_rrX9KE9UseAQeFwsA_6QHjCnN77mgYSI4j5uqb1WqQknCjPF8H8eczsq_xBbOouKuMnrKKAAWoN4qMqdZU-tihCgXHtmOGmvAzPcyyAlJpHBuJ_lSxygpxEA4x_FDOoVwJ7lOKvunWBd5JSPFseRGQ7UhKV4pQx_FrEB0B-XY')"></div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-semibold text-slate-900 dark:text-white">Summer Mocktail</p>
                            <p class="text-sm text-slate-500">Passionfruit, lime, and fresh mint</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-pink-100 text-pink-700 dark:bg-pink-900/30 dark:text-pink-400">Beverages</span>
                        </td>
                        <td class="px-6 py-4 font-mono font-medium text-primary">$6.50</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                Available
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="px-6 py-4 bg-slate-50 dark:bg-primary/5 flex items-center justify-between border-t border-slate-100 dark:border-primary/10">
            <p class="text-sm text-slate-500">Showing 1 to 4 of 24 items</p>
            <div class="flex gap-2">
                <button class="px-3 py-1 rounded border border-slate-200 dark:border-primary/20 text-slate-500 hover:bg-white dark:hover:bg-primary/10 transition-colors text-sm font-medium">Previous</button>
                <button class="px-3 py-1 rounded bg-primary text-background-dark font-bold text-sm">1</button>
                <button class="px-3 py-1 rounded border border-slate-200 dark:border-primary/20 text-slate-500 hover:bg-white dark:hover:bg-primary/10 transition-colors text-sm font-medium">2</button>
                <button class="px-3 py-1 rounded border border-slate-200 dark:border-primary/20 text-slate-500 hover:bg-white dark:hover:bg-primary/10 transition-colors text-sm font-medium">3</button>
                <button class="px-3 py-1 rounded border border-slate-200 dark:border-primary/20 text-slate-500 hover:bg-white dark:hover:bg-primary/10 transition-colors text-sm font-medium">Next</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>