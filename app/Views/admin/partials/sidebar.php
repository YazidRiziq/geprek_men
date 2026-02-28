<?php
    $baseClass = "flex items-center gap-3 px-3 py-2 rounded-lg transition-colors";
    $inactiveClass = "text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-primary/10 hover:text-primary";
    $activeClass = "bg-primary text-background-dark font-medium";
?>

<aside class="w-64 flex-shrink-0 border-r border-slate-200 dark:border-primary/10 bg-white dark:bg-background-dark flex flex-col">
    <div class="p-6 flex items-center gap-3">
        <div class="size-10 rounded-lg bg-primary flex items-center justify-center text-background-dark">
            <span class="material-symbols-outlined font-bold">restaurant</span>
        </div>
        <div>
            <h1 class="text-lg font-bold leading-none">Geprek Men</h1>
            <p class="text-xs text-slate-500 dark:text-primary/60">Management System</p>
        </div>
    </div>
    <nav class="flex-1 px-4 py-4 space-y-1 overflow-y-auto">
        <a class="<?= $baseClass ?> <?= ($active == 'dashboard') ? $activeClass : $inactiveClass ?>" href="<?php echo base_url('/admin/dashboard') ?>">
            <span class="material-symbols-outlined">dashboard</span>
            <span>Overview</span>
        </a>
        <a class="<?= $baseClass ?> <?= ($active == 'menu') ? $activeClass : $inactiveClass ?>" href="<?php echo base_url('/admin/menu') ?>">
            <span class="material-symbols-outlined">restaurant_menu</span>
            <span>Menu</span>
        </a>
        <a class="<?= $baseClass ?> <?= ($active == 'employees') ? $activeClass : $inactiveClass ?>" href="<?php echo base_url('/admin/employees') ?>">
            <span class="material-symbols-outlined">badge</span>
            <span>Employees</span>
        </a>
        <a class="<?= $baseClass ?> <?= ($active == 'roles') ? $activeClass : $inactiveClass ?>" href="<?php echo base_url('/admin/roles') ?>">
            <span class="material-symbols-outlined">admin_panel_settings</span>
            <span>Roles</span>
        </a>
        <a class="<?= $baseClass ?> <?= ($active == 'categories') ? $activeClass : $inactiveClass ?>" href="<?php echo base_url('/admin/categories') ?>">
            <span class="material-symbols-outlined">category</span>
            <span>Categories</span>
        </a>
        <a class="<?= $baseClass ?> <?= ($active == 'orders') ? $activeClass : $inactiveClass ?>" href="<?php echo base_url('/admin/orders') ?>">
            <span class="material-symbols-outlined">receipt_long</span>
            <span>Orders</span>
        </a>
    </nav>
    <div class="p-4 border-t border-slate-200 dark:border-primary/10">
        <div class="flex items-center gap-3 p-2 rounded-xl bg-slate-100 dark:bg-primary/5">
            <div class="size-10 rounded-full bg-cover bg-center" data-alt="Profile picture of the administrator" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDE8YrqKIZT31I80ezm3D6VKWgnwzLozrxHY0yX1AqunlK9_mhrdco6HEQaZs12F_WMYRVxOHFcWV5ZrI_OV3QS-1gOh26h8iYUE8Wx-pxcshDd0sC5T2tn_VXBZ1QunZOjmJ61ZLrWWyJ_X5LiZyZGgrcoWl_9vzdf9xrD1enXMuynF351hCENlefi1nV8T23kylxqMHJtrPLQKuNt6TkW0CwWrE2Je4Ujy_jHPh5A24vmOFKWdP612w9JmotJeSFgxUJ4-M7soy6z')"></div>
            <div class="flex-1 overflow-hidden">
                <p class="text-sm font-semibold truncate">Alex Rivera</p>
                <p class="text-xs text-slate-500 truncate">Store Manager</p>
            </div>
            <span class="material-symbols-outlined text-slate-400 text-sm">more_vert</span>
        </div>
    </div>
</aside>