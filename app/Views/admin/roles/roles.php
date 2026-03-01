<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?> 

<!-- Header -->
<div class="flex-1 overflow-y-auto p-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Manage Roles</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-1">Configure your restaurant's role.</p>
        </div>
        <a href="<?= base_url('admin/roles/create') ?>" class="flex items-center gap-2 px-5 py-2.5 bg-primary text-background-dark font-bold rounded-lg hover:brightness-110 transition-all shadow-lg shadow-primary/20">
            <span class="material-symbols-outlined">add</span>
            Add New Role
        </a>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="mb-4 p-4 rounded-lg bg-emerald-100 text-emerald-700 border border-emerald-200">
            <?= esc(session()->getFlashdata('success')) ?>
        </div>
    <?php elseif (session()->getFlashdata('error')): ?>
        <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-700 border border-red-200">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
    <?php endif; ?>

    <!-- Table Container -->
    <div class="bg-white dark:bg-slate-900/50 rounded-xl border border-slate-200 dark:border-primary/10 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-primary/5">
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-primary/70">Role</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-primary/70 text-center">User</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-primary/70 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-primary/5">
                    <?php if (!empty($role)) : ?>
                        <?php foreach ($role as $rl) : ?>
                            <tr class="hover:bg-slate-50 dark:hover:bg-primary/5 transition-colors">

                                <!-- Category Name -->
                                <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">
                                    <p>
                                        <?= esc($rl['role_name']) ?>
                                    </p>
                                    <p class="text-sm text-slate-500">
                                        <?= esc($rl['description']) ?>
                                    </p>
                                </td>

                                <!-- Total Items -->
                                <td class="px-6 py-4 text-center text-slate-500 dark:text-slate-400">
                                    <?= $rl['total_users'] ?>
                                </td>

                                <!-- Action Buttons -->
                                <td class="px-6 py-4 text-right flex items-center justify-end gap-3">
                                    <a href="<?= base_url('admin/roles/edit/' . $rl['id']) ?>"
                                        class="text-slate-400 hover:text-primary">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <form action="<?= base_url('admin/roles/delete/' . $rl['id']) ?>" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this role?');">
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
                                No roles found
                            </td>
                        </tr>
                    <?php endif ?>
                </tbody>
        </table>
    </div>

</div>

<?= $this->endSection() ?>