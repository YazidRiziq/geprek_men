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
            <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Manage Menu</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-1">Configure your restaurant's digital menu offerings and pricing.</p>
        </div>
        <a href="<?= base_url('admin/menu/create') ?>" class="flex items-center gap-2 px-5 py-2.5 bg-primary text-background-dark font-bold rounded-lg hover:brightness-110 transition-all shadow-lg shadow-primary/20">
            <span class="material-symbols-outlined">add</span>
            Add New Menu
        </a>
    </div>
    <!-- Filters -->
    <div class="flex flex-wrap gap-2 mb-6">

        <!-- All Items -->
        <a href="/admin/menu"
        class="px-4 py-1.5 rounded-full text-sm font-semibold
        <?= empty($currentCategory)
                ? 'bg-primary text-slate-700'
                : 'bg-slate-700 text-white hover:bg-primary/20' ?>">
            All Items
        </a>

        <!-- Dynamic Categories -->
        <?php foreach ($categories as $category): ?>
            <a href="/admin/menu?category=<?= $category['id'] ?>"
            class="px-4 py-1.5 rounded-full text-sm font-medium
            <?= ($currentCategory == $category['id'])
                    ? 'bg-primary text-slate-700'
                    : 'bg-slate-700 text-white hover:bg-primary/20' ?>">
                <?= esc($category['cat_name']) ?>
            </a>
        <?php endforeach; ?>

    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="mb-4 p-4 rounded-lg bg-emerald-100 text-emerald-700 border border-emerald-200">
            <?= esc(session()->getFlashdata('success')) ?>
        </div>
    <?php endif; ?>

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

                <?php foreach ($items as $item): ?>
                <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors group">

                    <!-- IMAGE -->
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="w-12 h-12 rounded-lg overflow-hidden bg-cover bg-center"
                            style="background-image: url('<?= $item['img'] 
                                ? base_url('uploads/items/' . $item['img']) 
                                : base_url('uploads/items/default.png') ?>')">
                        </div>
                    </td>

                    <!-- NAME -->
                    <td class="px-6 py-4">
                        <p class="font-semibold text-slate-900 dark:text-white">
                            <?= esc($item['name']) ?>
                        </p>
                        <p class="text-sm text-slate-500">
                            <?= esc($item['description']) ?>
                        </p>
                    </td>

                    <!-- CATEGORY -->
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs font-medium rounded-full bg-primary text-slate-700">
                            <?= esc($item['cat_name']) ?>
                        </span>
                    </td>

                    <!-- PRICE -->
                    <td class="px-6 py-4 font-mono font-medium text-primary">
                        Rp <?= number_format($item['price'], 0, ',', '.') ?>
                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-4">
                        <?php if ($item['is_active']): ?>
                            <span class="text-emerald-600 text-sm font-medium">Available</span>
                        <?php else: ?>
                            <span class="text-slate-500 text-sm font-medium">Unavailable</span>
                        <?php endif; ?>
                    </td>

                    <!-- ACTION -->
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                <a href="<?= base_url('admin/menu/edit/' . $item['id']) ?>" class="material-symbols-outlined">Edit</a>
                            </div>

                            <form action="<?= base_url('admin/menu/delete/' . $item['id']) ?>" 
                                method="post" 
                                onsubmit="return confirm('Yakin ingin menghapus menu ini?')"
                                <?= csrf_field() ?>
                                <button type="submit"
                                    class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </form>
                        </div>
                    </td>

                </tr>
                <?php endforeach; ?>

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