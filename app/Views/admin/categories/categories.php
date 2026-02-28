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
            <a href="<?= base_url('admin/categories/create') ?>" class="flex items-center gap-1 text-primary text-sm font-bold hover:underline">
                <span class="material-symbols-outlined text-lg">add_circle</span>
                Add New
            </a>
        </div>
        <div class="bg-white dark:bg-background-dark rounded-xl border border-slate-200 dark:border-primary/10 overflow-hidden shadow-sm">
            <table class="w-full text-left">
                <thead class="bg-slate-50 dark:bg-primary/5 text-slate-500 dark:text-primary/70 text-xs font-bold uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4" >Category</th>
                        <th class="px-6 py-4 text-center">Items</th>
                        <th class="px-6 py-4 text-center"></th>
                        <th class="px-6 py-4 text-right">Action</th>
                    </tr>
                </thead>
               <tbody class="divide-y divide-slate-100 dark:divide-primary/5">

     <?php if (!empty($categories)) : ?>
            <?php foreach ($categories as $cat) : ?>
            <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors">
            <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">
                <?= esc($cat['cat_name']) ?>
                
            </td>

            <td class="px-6 py-4 text-center text-slate-500 dark:text-slate-400">
                0
            </td>

            <td class="px-6 py-4 text-center"></td>

            <td class="px-6 py-4 text-right flex items-center justify-end gap-3">
                <a href="<?= base_url('admin/categories/edit/' . $cat['id']) ?>"
                   class="text-slate-400 hover:text-primary">
                    <span class="material-symbols-outlined">edit</span>
                </a>
                <form action="<?= base_url('admin/categories/delete/' . $cat['id']) ?>" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this category?');">
                    <?= csrf_field() ?>
                    <button type="submit" class="text-slate-400 hover:text-red-500">
                        <span class="material-symbols-outlined">delete</span>
                    </button>
                </form>
            </td>
        </tr>
        
    <?php endforeach ?>
<?php else : ?>
    <tr>
        <td colspan="4" class="px-6 py-6 text-center text-slate-400">
            No categories found
        </td>
    </tr>
<?php endif ?>

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
