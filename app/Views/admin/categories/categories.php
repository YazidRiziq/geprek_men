<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<section class="p-6 flex-1 flex flex-col overflow-hidden bg-slate-50 dark:bg-slate-900/20">
    <!-- Header Section -->
    <div class="flex flex-wrap justify-between items-center gap-4 p-6 bg-white dark:bg-background-dark border-b border-slate-200 dark:border-primary/10">
        <div class="flex flex-col gap-1">
            <h2 class="text-slate-900 dark:text-slate-100 text-2xl font-black leading-tight tracking-tight">Manage Categories</h2>
            <p class="text-slate-500 dark:text-primary/60 text-sm font-normal">Manage your menu categories here.</p>
        </div>
        <div class="flex gap-3">
            <a href="<?= base_url('admin/categories/create') ?>" class="flex items-center justify-center rounded-lg h-10 px-6 bg-primary text-background-dark text-sm font-bold hover:opacity-90 transition-all shadow-lg shadow-primary/20">
                Add Category
            </a>
        </div>
    </div>

    <!-- Left Side: Menu Categories -->
    <div class="flex-1 flex flex-col gap-4">
        <div class="pt-4 flex items-center justify-between">
            <h3 class="text-slate-900 dark:text-slate-100 text-lg font-bold flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">inventory_2</span>
                Menu Categories
            </h3>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="mb-4 p-4 rounded-lg bg-emerald-100 text-emerald-700 border border-emerald-200">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>
        <?php endif; ?>

        <!-- Table Category -->
        <div class="bg-white dark:bg-background-dark rounded-xl border border-slate-200 dark:border-primary/10 overflow-hidden shadow-sm">
            <table class="w-full text-left">
                <thead class="bg-slate-50 dark:bg-primary/5 text-slate-500 dark:text-primary/70 text-xs font-bold uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4 text-center">Items</th>
                        <th class="px-6 py-4 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-primary/5">
                    <?php if (!empty($categories)) : ?>
                        <?php foreach ($categories as $cat) : ?>
                            <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors">

                                <!-- Category Name -->
                                <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">
                                    <p>
                                        <?= esc($cat['cat_name']) ?>
                                    </p>
                                    <p class="text-sm text-slate-500">
                                        <?= esc($cat['description']) ?>
                                    </p>
                                </td>

                                <!-- Total Items -->
                                <td class="px-6 py-4 text-center text-slate-500 dark:text-slate-400">
                                    <?= $cat['total_items'] ?>
                                </td>

                                <!-- Action Buttons -->
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

        <!-- Quick Tips -->
        <div class="mt-2 bg-primary/5 border border-primary/20 rounded-xl p-4 flex items-start gap-4">
            <span class="material-symbols-outlined text-primary">info</span>
            <div>
                <p class="text-sm font-semibold text-slate-900 dark:text-slate-100">Quick Tip</p>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Kamu dapat melihat berapa banyak items pada setiap Kategori yang ada.</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>