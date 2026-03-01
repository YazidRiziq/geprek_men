<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Header Section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center p-6">
    <div>
        <h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Manage Employees</h1>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Review, add and manage your restaurant's workforce.</p>
    </div>
    <a href="<?= base_url('admin/employees/create') ?>" class="flex items-center gap-2 bg-primary text-background-dark font-bold px-6 py-3 rounded-xl hover:opacity-90 transition-all shadow-lg shadow-primary/20">
        <span class="material-symbols-outlined">person_add</span>
        Add New Employee
    </a>
</div>

<!-- Filters & Search Bar -->
<div class="bg-white dark:bg-primary/5 rounded-2xl p-4 m-6 mt-2 border border-slate-200 dark:border-primary/10 flex flex-col lg:flex-row gap-4">
    <div class="flex-1 relative">
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
        <input class="w-full pl-12 pr-4 py-3 bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all" placeholder="Search employees by name, email or ID..." type="text" />
    </div>
    <div class="flex flex-wrap gap-2">
        <a href="<?= base_url('admin/employees') ?>"
            class="px-5 py-3 rounded-xl text-sm font-semibold
            <?= !$selectedRole 
                ? 'bg-primary/10 dark:bg-primary/20 text-primary border border-primary/30' 
                : 'bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 hover:bg-primary/10 hover:text-primary transition-colors' ?>">
            All
        </a>
        <?php foreach ($roles as $role): ?>
            <a href="<?= base_url('admin/employees?role=' . $role['id']) ?>"
            class="px-5 py-3 rounded-xl text-sm font-medium
            <?= $selectedRole == $role['id']
                    ? 'bg-primary/10 dark:bg-primary/20 text-primary border border-primary/30'
                    : 'bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 hover:bg-primary/10 hover:text-primary transition-colors' ?>">
                <?= esc($role['role_name']) ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="p-6">
        <div class="mb-4 p-4 rounded-lg bg-emerald-100 text-emerald-700 border border-emerald-200">
            <?= esc(session()->getFlashdata('success')) ?>
        </div>
    </div>
<?php endif; ?>

<!-- Employee Grid -->
<div class="m-6 mt-0 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-6">
    <?php if (!empty($users)) : ?>
        <?php foreach ($users as $user) : ?>
            <!-- Employee Card -->
            <div class="bg-white dark:bg-primary/5 border border-slate-200 dark:border-primary/10 rounded-2xl p-6 hover:shadow-xl hover:shadow-primary/5 transition-all group relative overflow-hidden">
                <div class="flex flex-col items-center text-center">
                    <!-- Photo -->
                    <div class="relative mb-4">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-primary/20 ring-4 ring-background-dark/5 shadow-inner">
                            <img 
                                alt="Employee Photo" 
                                data-alt="Portrait of a smiling male chef in white uniform" 
                                class="w-full h-full object-cover" 
                                src="<?= base_url('uploads/users/' . ($user['img'] ?? 'default.png')) ?>"
                            />  
                        </div>
                        <span class="absolute bottom-1 right-1 w-5 h-5 bg-primary border-2 border-white dark:border-background-dark rounded-full"></span>
                    </div>

                    <!-- Name -->
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        <?= esc($user['fullname']) ?>
                    </h3>

                    <!-- Role -->
                    <p class="text-primary font-semibold text-sm mb-4">
                        <?= esc($user['role_name'] ?? 'No Role') ?>
                    </p>

                    <!-- Contact Info -->
                    <div class="w-full space-y-3 pt-4 border-t border-slate-100 dark:border-primary/10">
                        <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                            <span class="material-symbols-outlined text-primary text-lg">mail</span>
                            <span><?= esc($user['email'] ?? 'No Email') ?></span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                            <span class="material-symbols-outlined text-primary text-lg">call</span>
                            <span>
                                <?= esc($user['phone'] ?? 'No Phone') ?>
                            </span>
                        </div>  
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-6 flex gap-2 w-full">
                        <a href="<?= base_url('admin/employees/edit/' . $user['id']) ?>" 
                            class="flex-1 py-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-primary hover:text-background-dark transition-all text-sm font-bold">
                            Edit Profile
                        </a>
                        <form action="<?= base_url('admin/employees/delete/' . $user['id']) ?>" method="post">
                            <?= csrf_field() ?>
                            <button type="submit"
                                onclick="return confirm('Delete this employee?')"
                                class="p-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-red-500 hover:text-white transition-all">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php else : ?>
        <div class="col-span-full text-center py-10 text-slate-500">
            No employees found.
        </div>
    <?php endif ?>
        
    <!-- Add New Placeholder Card -->
    <a href="<?= base_url('admin/employees/create') ?>" class="border-2 border-dashed border-slate-300 dark:border-primary/30 rounded-2xl p-6 flex flex-col items-center justify-center text-center hover:border-primary hover:bg-primary/5 transition-all cursor-pointer group min-h-[340px]">
        <div class="w-16 h-16 rounded-full bg-slate-100 dark:bg-primary/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-4xl text-slate-400 group-hover:text-primary">add</span>
        </div>
        <p class="text-lg font-bold text-slate-500 dark:text-slate-400 group-hover:text-primary">Add New Staff</p>
        <p class="text-sm text-slate-400 mt-1 max-w-[180px]">Fill in details to onboard a new employee</p>
    </a>   
</div>

<?php $this->endSection() ?>