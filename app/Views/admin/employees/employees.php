<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Header Section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
    <div>
        <h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Manage Employees</h1>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Review, add and manage your restaurant's workforce.</p>
    </div>
    <button class="flex items-center gap-2 bg-primary text-background-dark font-bold px-6 py-3 rounded-xl hover:opacity-90 transition-all shadow-lg shadow-primary/20">
        <span class="material-symbols-outlined">person_add</span>
        Add New Employee
    </button>
</div>

<!-- Filters & Search Bar -->
<div class="bg-white dark:bg-primary/5 rounded-2xl p-4 mb-8 border border-slate-200 dark:border-primary/10 flex flex-col lg:flex-row gap-4">
    <div class="flex-1 relative">
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
        <input class="w-full pl-12 pr-4 py-3 bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all" placeholder="Search employees by name, email or ID..." type="text" />
    </div>
    <div class="flex flex-wrap gap-2">
        <div class="relative group">
            <button class="flex items-center gap-2 px-4 py-3 bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-xl text-sm font-medium">
                <span class="material-symbols-outlined text-primary">filter_list</span>
                All Roles
                <span class="material-symbols-outlined text-slate-400">expand_more</span>
            </button>
        </div>
        <button class="px-5 py-3 bg-primary/10 dark:bg-primary/20 text-primary border border-primary/30 rounded-xl text-sm font-semibold">Chef</button>
        <button class="px-5 py-3 bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-xl text-sm font-medium hover:bg-primary/10 hover:text-primary transition-colors">Cashier</button>
        <button class="px-5 py-3 bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-xl text-sm font-medium hover:bg-primary/10 hover:text-primary transition-colors">Admin</button>
        <button class="px-5 py-3 bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-xl text-sm font-medium hover:bg-primary/10 hover:text-primary transition-colors">Waiter</button>
    </div>
</div>

<!-- Employee Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-6">
    <!-- Employee Card 1 -->
    <div class="bg-white dark:bg-primary/5 border border-slate-200 dark:border-primary/10 rounded-2xl p-6 hover:shadow-xl hover:shadow-primary/5 transition-all group relative overflow-hidden">
        <div class="absolute top-0 right-0 p-4">
            <button class="text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">more_vert</span>
            </button>
        </div>
        <div class="flex flex-col items-center text-center">
            <div class="relative mb-4">
                <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-primary/20 ring-4 ring-background-dark/5 shadow-inner">
                    <img alt="Employee Photo" class="w-full h-full object-cover" data-alt="Portrait of a smiling male chef in white uniform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-88mg9nmf0Ccq-QucE5pcIK8bvDrJldDaieKqFdLLJ7ZIhdEBbnEsMxihkVjhE1b4dSlyU833AIPRFSP5Lx0DN90BspB7zECIOWTQuVqPrEONTyqkHCoQ5PLN8bWI7gEMu8gqjNk9cN7n2-0P8GH3x4Ik3kLA19HxmVQXF0qo95pjcCQnWGoTUNr_pICVcYdvxBeFeSwSuraFc2bkoZCTKvTQRzuOrG3ncAqCrsmx0OxzfUMbQKEXePfcehgTvreonDI8e1mC7rHf" />
                </div>
                <span class="absolute bottom-1 right-1 w-5 h-5 bg-primary border-2 border-white dark:border-background-dark rounded-full"></span>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Marcus Thorne</h3>
            <p class="text-primary font-semibold text-sm mb-4">Executive Chef</p>
            <div class="w-full space-y-3 pt-4 border-t border-slate-100 dark:border-primary/10">
                <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <span class="material-symbols-outlined text-primary text-lg">mail</span>
                    <span>m.thorne@resto.com</span>
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <span class="material-symbols-outlined text-primary text-lg">call</span>
                    <span>+1 234 567 8901</span>
                </div>
            </div>
            <div class="mt-6 flex gap-2 w-full">
                <button class="flex-1 py-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-primary hover:text-background-dark transition-all text-sm font-bold">Edit Profile</button>
                <button class="p-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-red-500 hover:text-white transition-all">
                    <span class="material-symbols-outlined text-lg">delete</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Employee Card 2 -->
    <div class="bg-white dark:bg-primary/5 border border-slate-200 dark:border-primary/10 rounded-2xl p-6 hover:shadow-xl hover:shadow-primary/5 transition-all group relative overflow-hidden">
        <div class="absolute top-0 right-0 p-4">
            <button class="text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">more_vert</span>
            </button>
        </div>
        <div class="flex flex-col items-center text-center">
            <div class="relative mb-4">
                <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-primary/20 ring-4 ring-background-dark/5 shadow-inner">
                    <img alt="Employee Photo" class="w-full h-full object-cover" data-alt="Portrait of a professional woman wearing a blazer" src="https://lh3.googleusercontent.com/aida-public/AB6AXuARdh36RC_zwNkMh6fXrS9rN5bCfwohtyLv4mbAUxPIJ_c_hg7AmOnzwuFJNLvhdIDKi6jyzn8PxaZXcW_6hPkC0h-h_exzppeKKc6qCPOxAGJrC03ydtLidGH7gcEYaBmzcvpQQ9hfmlCPjQ8Ufz-wN2QxLQNzbLdqQp63XFjZRjVnmRArYajrq9iyrRKYn6rrxWEw1woHa6DfGzXudpn1L16povixMAaiJREMICbBpwmzbSX6KOcFl_-pjSyU8Dev57OPco_5rOhN" />
                </div>
                <span class="absolute bottom-1 right-1 w-5 h-5 bg-primary border-2 border-white dark:border-background-dark rounded-full"></span>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Sarah Jenkins</h3>
            <p class="text-primary font-semibold text-sm mb-4">Lead Admin</p>
            <div class="w-full space-y-3 pt-4 border-t border-slate-100 dark:border-primary/10">
                <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <span class="material-symbols-outlined text-primary text-lg">mail</span>
                    <span>s.jenkins@resto.com</span>
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <span class="material-symbols-outlined text-primary text-lg">call</span>
                    <span>+1 234 567 8902</span>
                </div>
            </div>
            <div class="mt-6 flex gap-2 w-full">
                <button class="flex-1 py-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-primary hover:text-background-dark transition-all text-sm font-bold">Edit Profile</button>
                <button class="p-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-red-500 hover:text-white transition-all">
                    <span class="material-symbols-outlined text-lg">delete</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Employee Card 3 -->
    <div class="bg-white dark:bg-primary/5 border border-slate-200 dark:border-primary/10 rounded-2xl p-6 hover:shadow-xl hover:shadow-primary/5 transition-all group relative overflow-hidden">
        <div class="absolute top-0 right-0 p-4">
            <button class="text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">more_vert</span>
            </button>
        </div>
        <div class="flex flex-col items-center text-center">
            <div class="relative mb-4">
                <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-primary/20 ring-4 ring-background-dark/5 shadow-inner">
                    <img alt="Employee Photo" class="w-full h-full object-cover" data-alt="Portrait of a young male cashier smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFZjpNcMzD3bL-JHgr-86awkjuILKoYNQoPQ6Oyz_AQ8iIl-3MlbtQo8kuI13UgneMb5Xi1fWUZJpK8wM7WIsD8Tz_Lei5lcPF7O__ntoKvHmOlNwNsF5ZXsxVhTHul5tVpG6ORbIOBBJbdWA8TPr2sABkup5-s_TI6Ny062BxOOh3U0aeS-quDY5J18zwBHAyYYXQ2lv4xRqsXLQc7kjRqfC_C4GyFGYj31vX-Rifh6Ffqm6hDzHD109OBOKCY9jab5jPjxfpVfiq" />
                </div>
                <span class="absolute bottom-1 right-1 w-5 h-5 bg-slate-400 border-2 border-white dark:border-background-dark rounded-full"></span>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">David Chen</h3>
            <p class="text-primary font-semibold text-sm mb-4">Senior Cashier</p>
            <div class="w-full space-y-3 pt-4 border-t border-slate-100 dark:border-primary/10">
                <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <span class="material-symbols-outlined text-primary text-lg">mail</span>
                    <span>d.chen@resto.com</span>
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <span class="material-symbols-outlined text-primary text-lg">call</span>
                    <span>+1 234 567 8903</span>
                </div>
            </div>
            <div class="mt-6 flex gap-2 w-full">
                <button class="flex-1 py-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-primary hover:text-background-dark transition-all text-sm font-bold">Edit Profile</button>
                <button class="p-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-red-500 hover:text-white transition-all">
                    <span class="material-symbols-outlined text-lg">delete</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Employee Card 4 -->
    <div class="bg-white dark:bg-primary/5 border border-slate-200 dark:border-primary/10 rounded-2xl p-6 hover:shadow-xl hover:shadow-primary/5 transition-all group relative overflow-hidden">
        <div class="absolute top-0 right-0 p-4">
            <button class="text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">more_vert</span>
            </button>
        </div>
        <div class="flex flex-col items-center text-center">
            <div class="relative mb-4">
                <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-primary/20 ring-4 ring-background-dark/5 shadow-inner">
                    <img alt="Employee Photo" class="w-full h-full object-cover" data-alt="Portrait of a smiling waitress in uniform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6VEah5D9_U7TPaSsbypP7lEKDucMYPyEALuNb7-KJZ_DM33q-9hnFwMAJvRdHJvS-0GkZLGXG6j-JtWSW3OWiLRmwyJ_5cbzu-MBr-0t_QuyTrElxWErqSvOREjJGqAGMfnU6FAbiocaVNxFVMe58ho9FK-yk5NyG4ro6C2HthvMiO3diPwGtZcrcg7CtsxlKe9Gvn2pNeRbe9m1f4ARVK2Fx2reYmUA0fMwITCaRTh1T_tAszttqS5xch4DZSM0pBrjIi78HqdV0" />
                </div>
                <span class="absolute bottom-1 right-1 w-5 h-5 bg-primary border-2 border-white dark:border-background-dark rounded-full"></span>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Elena Rodriguez</h3>
            <p class="text-primary font-semibold text-sm mb-4">Head Waiter</p>
            <div class="w-full space-y-3 pt-4 border-t border-slate-100 dark:border-primary/10">
                <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <span class="material-symbols-outlined text-primary text-lg">mail</span>
                    <span>e.rod@resto.com</span>
                </div>
                <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                    <span class="material-symbols-outlined text-primary text-lg">call</span>
                    <span>+1 234 567 8904</span>
                </div>
            </div>
            <div class="mt-6 flex gap-2 w-full">
                <button class="flex-1 py-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-primary hover:text-background-dark transition-all text-sm font-bold">Edit Profile</button>
                <button class="p-2 rounded-lg bg-slate-100 dark:bg-primary/10 hover:bg-red-500 hover:text-white transition-all">
                    <span class="material-symbols-outlined text-lg">delete</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Add New Placeholder Card -->
    <div class="border-2 border-dashed border-slate-300 dark:border-primary/30 rounded-2xl p-6 flex flex-col items-center justify-center text-center hover:border-primary hover:bg-primary/5 transition-all cursor-pointer group min-h-[340px]">
        <div class="w-16 h-16 rounded-full bg-slate-100 dark:bg-primary/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-4xl text-slate-400 group-hover:text-primary">add</span>
        </div>
        <p class="text-lg font-bold text-slate-500 dark:text-slate-400 group-hover:text-primary">Add New Staff Member</p>
        <p class="text-sm text-slate-400 mt-1 max-w-[180px]">Fill in details to onboard a new employee</p>
    </div>
</div>

<!-- Footer Pagination -->
<div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-slate-200 dark:border-primary/10 pt-6">
    <p class="text-sm text-slate-500 dark:text-slate-400">Showing <span class="font-semibold text-slate-900 dark:text-white">4</span> of <span class="font-semibold text-slate-900 dark:text-white">24</span> employees</p>
    <div class="flex items-center gap-2">
        <button class="p-2 rounded-lg border border-slate-200 dark:border-primary/20 text-slate-400 hover:bg-primary/10 hover:text-primary disabled:opacity-50" disabled="">
            <span class="material-symbols-outlined">chevron_left</span>
        </button>
        <button class="w-10 h-10 rounded-lg bg-primary text-background-dark font-bold text-sm">1</button>
        <button class="w-10 h-10 rounded-lg border border-slate-200 dark:border-primary/20 text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-primary font-bold text-sm">2</button>
        <button class="w-10 h-10 rounded-lg border border-slate-200 dark:border-primary/20 text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-primary font-bold text-sm">3</button>
        <button class="p-2 rounded-lg border border-slate-200 dark:border-primary/20 text-slate-400 hover:bg-primary/10 hover:text-primary">
            <span class="material-symbols-outlined">chevron_right</span>
        </button>
    </div>
</div>

<?php $this->endSection() ?>