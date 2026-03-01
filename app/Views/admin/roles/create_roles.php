<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<!-- Header -->
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
    <div>
        <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100 leading-tight tracking-tight">Add New Role</h1>
        <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Create a new role.</p>
    </div>
    <div class="bg-primary/10 p-3 rounded-full">
        <span class="material-symbols-outlined text-primary text-3xl">person</span>
    </div>
</div>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="p-6">
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

<form action="<?= base_url('admin/roles/store') ?>" method="post" enctype="multipart/form-data" class="p-8 space-y-6">
    
    <!-- Item Name -->
    <div class="flex flex-col gap-2">
        <label class="text-slate-900 dark:text-slate-100 font-semibold text-sm flex items-center gap-1">
            Role Name <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <input value="<?= old('role_name') ?>" id="role_name" name="role_name" class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all text-slate-900 dark:text-slate-100 placeholder:text-slate-400" placeholder="e.g. Admin" type="text" required/>
        </div>
    </div>

    <!-- Description Textarea -->
    <div class="flex flex-col gap-2">
        <label class="text-slate-900 dark:text-slate-100 font-semibold text-sm flex items-center gap-1">
            Description <span class="text-red-500">*</span>
        </label>
        <textarea name="description" class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all text-slate-900 dark:text-slate-100 placeholder:text-slate-400 resize-none" placeholder="Describe the role..." rows="4"
        required><?= old('description') ?></textarea>
    </div>

    <!-- Footer Action Buttons -->
    <div class="flex items-center justify-end gap-4 pt-4 border-t border-slate-100 dark:border-slate-800">
        <a class="px-6 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 font-semibold text-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= base_url('admin/roles') ?>">
            Cancel
        </a>
        <button class="px-8 py-2.5 bg-primary text-slate-900 font-bold rounded-lg shadow-md hover:shadow-lg hover:scale-[1.02] active:scale-95 transition-all text-sm flex items-center gap-2" type="submit">
            <span class="material-symbols-outlined text-lg">save</span>
            Save Category
        </button>
    </div>
</form>

<?= $this->endSection() ?>