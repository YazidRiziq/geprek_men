<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Top Navbar -->
<header class="h-16 flex items-center justify-between px-8 bg-white dark:bg-background-dark border-b border-slate-200 dark:border-emerald-900/50">
    <div class="flex items-center gap-4 flex-1">
        <div class="relative w-full max-w-md">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
            <input class="w-full bg-slate-100 dark:bg-emerald-900/20 border-none rounded-lg py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/50 text-slate-900 dark:text-slate-100 placeholder:text-slate-400" placeholder="Search orders, IDs, or tables..." type="text" />
        </div>
    </div>
    <div class="flex items-center gap-4">
        <button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-emerald-900/30 rounded-lg relative">
            <span class="material-symbols-outlined text-2xl">notifications</span>
            <span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full border-2 border-white dark:border-background-dark"></span>
        </button>
        <button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-emerald-900/30 rounded-lg">
            <span class="material-symbols-outlined text-2xl">settings</span>
        </button>
    </div>
</header>
<!-- Page Content -->
<div class="flex-1 overflow-y-auto p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
            <div>
                <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">All Orders</h2>
                <p class="text-slate-500 dark:text-emerald-500/80 mt-1">Real-time overview of all restaurant transactions and fulfillment.</p>
            </div>
            <div class="flex items-center gap-3">
                <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-emerald-900/50 rounded-lg text-sm font-semibold hover:bg-slate-50 dark:hover:bg-emerald-900/20 transition-colors">
                    <span class="material-symbols-outlined text-lg">download</span>
                    Export CSV
                </button>
                <button class="flex items-center gap-2 px-4 py-2 bg-primary text-background-dark rounded-lg text-sm font-bold hover:brightness-110 transition-all shadow-lg shadow-primary/10">
                    <span class="material-symbols-outlined text-lg">add</span>
                    New Order
                </button>
            </div>
        </div>
        <!-- Filter Tabs -->
        <div class="flex items-center border-b border-slate-200 dark:border-emerald-900/50 mb-6 overflow-x-auto no-scrollbar">
            <button class="px-6 py-3 text-sm font-bold text-primary border-b-2 border-primary whitespace-nowrap">All Orders (248)</button>
            <button class="px-6 py-3 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 border-b-2 border-transparent whitespace-nowrap">Active (12)</button>
            <button class="px-6 py-3 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 border-b-2 border-transparent whitespace-nowrap">Completed (231)</button>
            <button class="px-6 py-3 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 border-b-2 border-transparent whitespace-nowrap">Cancelled (5)</button>
        </div>
        <!-- Table Card -->
        <div class="bg-white dark:bg-emerald-950/10 border border-slate-200 dark:border-emerald-900/50 rounded-xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto @container">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 dark:bg-emerald-900/20 border-b border-slate-200 dark:border-emerald-900/50">
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-emerald-500/70">Order ID</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-emerald-500/70">Customer/Table</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-emerald-500/70">Status</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-emerald-500/70">Total Amount</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-emerald-500/70">Time</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-emerald-500/70 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 dark:divide-emerald-900/30">
                        <!-- Order Row 1 -->
                        <tr class="hover:bg-slate-50 dark:hover:bg-emerald-900/10 transition-colors">
                            <td class="px-6 py-5 font-medium text-slate-900 dark:text-white">#ORD-9021</td>
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded bg-primary/20 flex items-center justify-center text-primary font-bold text-xs">T4</div>
                                    <span class="text-slate-700 dark:text-slate-300">Table 4</span>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/40 dark:text-blue-300">
                                    Active
                                </span>
                            </td>
                            <td class="px-6 py-5 text-slate-700 dark:text-slate-300 font-semibold">$45.50</td>
                            <td class="px-6 py-5 text-slate-500 dark:text-slate-400 text-sm">2 mins ago</td>
                            <td class="px-6 py-5 text-right">
                                <button class="text-primary hover:text-primary/80 font-bold text-sm tracking-wide">VIEW DETAILS</button>
                            </td>
                        </tr>
                        <!-- Order Row 2 -->
                        <tr class="hover:bg-slate-50 dark:hover:bg-emerald-900/10 transition-colors">
                            <td class="px-6 py-5 font-medium text-slate-900 dark:text-white">#ORD-9020</td>
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded bg-slate-200 dark:bg-emerald-900/40 flex items-center justify-center overflow-hidden">
                                        <img alt="JD" data-alt="Initials avatar for John Doe" src="https://lh3.googleusercontent.com/aida-public/AB6AXuASxCVmhjYquG6OEVrG8z64jt9Wm4lqWU4RYIjhWpo9ctaN8t5bz9mZb5mXOgeqHBW9bGyiF-HKs4RgvJXG6Oadt9sOaozX0wT-WaMCDEZGiwaU5vaRfT8BcG7Z3auEc0qIFMkZEDiDcC_mL7Whnt_cU90cTPyi0TXmyPr2O-k8NdGdm-e14hKLcUz2DmVG_PkFz28g-GSORVZp29ba0OtOqUapinbaRbWNQ0b8BzjI5jiDb6nqmF3_eOc-t96Y31nqBassvAAJAJax" />
                                    </div>
                                    <span class="text-slate-700 dark:text-slate-300">John Doe</span>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-primary/20 dark:text-primary">
                                    Completed
                                </span>
                            </td>
                            <td class="px-6 py-5 text-slate-700 dark:text-slate-300 font-semibold">$120.00</td>
                            <td class="px-6 py-5 text-slate-500 dark:text-slate-400 text-sm">15 mins ago</td>
                            <td class="px-6 py-5 text-right">
                                <button class="text-primary hover:text-primary/80 font-bold text-sm tracking-wide">VIEW DETAILS</button>
                            </td>
                        </tr>
                        <!-- Order Row 3 -->
                        <tr class="hover:bg-slate-50 dark:hover:bg-emerald-900/10 transition-colors">
                            <td class="px-6 py-5 font-medium text-slate-900 dark:text-white">#ORD-9019</td>
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded bg-primary/20 flex items-center justify-center text-primary font-bold text-xs">T12</div>
                                    <span class="text-slate-700 dark:text-slate-300">Table 12</span>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">
                                    Cancelled
                                </span>
                            </td>
                            <td class="px-6 py-5 text-slate-500 dark:text-slate-500 font-semibold strike-through">$0.00</td>
                            <td class="px-6 py-5 text-slate-500 dark:text-slate-400 text-sm">45 mins ago</td>
                            <td class="px-6 py-5 text-right">
                                <button class="text-primary hover:text-primary/80 font-bold text-sm tracking-wide">VIEW DETAILS</button>
                            </td>
                        </tr>
                        <!-- Order Row 4 -->
                        <tr class="hover:bg-slate-50 dark:hover:bg-emerald-900/10 transition-colors">
                            <td class="px-6 py-5 font-medium text-slate-900 dark:text-white">#ORD-9018</td>
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded bg-slate-200 dark:bg-emerald-900/40 flex items-center justify-center overflow-hidden">
                                        <img alt="JS" data-alt="Initials avatar for Jane Smith" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtDIZfwqY7SRpVEyIQGfDifcQkX180tBTPzkzMVMvXYbMPpscR6UuVKwAHmYekMQ8Dzjijdrs8Syjfn3kN7k1qCJjXb46grr10wm0SKSdmCZyJE1LdJ7l7Y6bKyLe0pVN6IVA19mWnUuKXWDNAZ6OD81_f7I304N5fMMnAWcytmaoNdacwZ61L6utcf4QzIlsFL4o45PE3TiZF5hi-AHlyT95AmqCXjJdi5qQO9c4cSQEtZMKKQzWVc3K1y82hXSkYQU0uVc590R29" />
                                    </div>
                                    <span class="text-slate-700 dark:text-slate-300">Jane Smith</span>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-primary/20 dark:text-primary">
                                    Completed
                                </span>
                            </td>
                            <td class="px-6 py-5 text-slate-700 dark:text-slate-300 font-semibold">$65.25</td>
                            <td class="px-6 py-5 text-slate-500 dark:text-slate-400 text-sm">1 hour ago</td>
                            <td class="px-6 py-5 text-right">
                                <button class="text-primary hover:text-primary/80 font-bold text-sm tracking-wide">VIEW DETAILS</button>
                            </td>
                        </tr>
                        <!-- Order Row 5 -->
                        <tr class="hover:bg-slate-50 dark:hover:bg-emerald-900/10 transition-colors">
                            <td class="px-6 py-5 font-medium text-slate-900 dark:text-white">#ORD-9017</td>
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded bg-primary/20 flex items-center justify-center text-primary font-bold text-xs">T2</div>
                                    <span class="text-slate-700 dark:text-slate-300">Table 2</span>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/40 dark:text-blue-300">
                                    Active
                                </span>
                            </td>
                            <td class="px-6 py-5 text-slate-700 dark:text-slate-300 font-semibold">$32.10</td>
                            <td class="px-6 py-5 text-slate-500 dark:text-slate-400 text-sm">1.5 hours ago</td>
                            <td class="px-6 py-5 text-right">
                                <button class="text-primary hover:text-primary/80 font-bold text-sm tracking-wide">VIEW DETAILS</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="px-6 py-4 bg-slate-50 dark:bg-emerald-900/10 border-t border-slate-200 dark:border-emerald-900/50 flex items-center justify-between">
                <span class="text-sm text-slate-500 dark:text-slate-400 font-medium">Showing 1 to 5 of 248 orders</span>
                <div class="flex items-center gap-2">
                    <button class="w-8 h-8 flex items-center justify-center rounded border border-slate-200 dark:border-emerald-900/50 text-slate-400 hover:bg-slate-100 dark:hover:bg-emerald-900/20 disabled:opacity-50" disabled="">
                        <span class="material-symbols-outlined text-sm">chevron_left</span>
                    </button>
                    <button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-background-dark font-bold text-xs">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded border border-slate-200 dark:border-emerald-900/50 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-emerald-900/20 font-medium text-xs">2</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded border border-slate-200 dark:border-emerald-900/50 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-emerald-900/20 font-medium text-xs">3</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded border border-slate-200 dark:border-emerald-900/50 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-emerald-900/20">
                        <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>