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

    <!-- Left Side: Menu Categories -->
    <div class="flex-1 flex flex-col gap-4">
        <div class="flex items-center justify-between">
            <h3 class="text-slate-900 dark:text-slate-100 text-lg font-bold flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">inventory_2</span>
                Menu Categories
            </h3>
            <button class="flex items-center gap-1 text-primary text-sm font-bold hover:underline">
                <span class="material-symbols-outlined text-lg">add_circle</span>
                Add New
            </button>
        </div>
        <div class="bg-white dark:bg-background-dark rounded-xl border border-slate-200 dark:border-primary/10 overflow-hidden shadow-sm">
            <table class="w-full text-left">
                <thead class="bg-slate-50 dark:bg-primary/5 text-slate-500 dark:text-primary/70 text-xs font-bold uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4 text-center">Items</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-primary/5">
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">Appetizers</td>
                        <td class="px-6 py-4 text-center text-slate-500 dark:text-slate-400">12</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-primary/20 text-primary">Active</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">Main Course</td>
                        <td class="px-6 py-4 text-center text-slate-500 dark:text-slate-400">28</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-primary/20 text-primary">Active</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">Drinks</td>
                        <td class="px-6 py-4 text-center text-slate-500 dark:text-slate-400">45</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-primary/20 text-primary">Active</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">Desserts</td>
                        <td class="px-6 py-4 text-center text-slate-500 dark:text-slate-400">14</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400">Inactive</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">Specials</td>
                        <td class="px-6 py-4 text-center text-slate-500 dark:text-slate-400">5</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-primary/20 text-primary">Active</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-2 bg-primary/5 border border-primary/20 rounded-xl p-4 flex items-start gap-4">
            <span class="material-symbols-outlined text-primary">info</span>
            <div>
                <p class="text-sm font-semibold text-slate-900 dark:text-slate-100">Quick Tip</p>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Inactive categories are hidden from the customer-facing menu but preserved in the management dashboard.</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>