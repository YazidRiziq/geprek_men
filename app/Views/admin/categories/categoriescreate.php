<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<section class="flex-1 bg-slate-50 dark:bg-slate-900/20 p-6">

    <div class="max-w-3xl mx-auto bg-white dark:bg-background-dark rounded-xl border border-slate-200 dark:border-primary/10 shadow-sm">

        <!-- Header -->
        <div class="px-6 py-4 border-b border-slate-200 dark:border-primary/10">
            <h2 class="text-xl font-black text-slate-900 dark:text-slate-100">
                Add New Category
            </h2>
            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                Create a new menu category
            </p>
        </div>

        <!-- Form -->
        <form action="<?= base_url('admin/categories/store') ?>" method="post" class="p-6 space-y-6">

            <?= csrf_field() ?>

            <!-- Category Name -->
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-200 mb-1">
                    Category Name
                </label>
                <input type="text"  name="cat_name"required class="w-full rounded-lg border border-slate-300 dark:border-primary/20 bg-white dark:bg-background-dark px-4 py-2 text-slate-900 dark:text-slate-100 focus:outline-none focus:ring-2 focus:ring-primary"
                placeholder="e.g. Appetizers">
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-200 mb-1">
                    Description
                </label>
                <textarea
                    name="description"
                    rows="4"
                    class="w-full rounded-lg border border-slate-300 dark:border-primary/20 bg-white dark:bg-background-dark px-4 py-2 text-slate-900 dark:text-slate-100 focus:outline-none focus:ring-2 focus:ring-primary"
                    placeholder="Optional description"
                ></textarea>
            </div>

            <!-- Action -->
            <div class="flex justify-end gap-3 pt-4 border-t border-slate-200 dark:border-primary/10">
                <a href="<?= base_url('admin/categories') ?>"
                   class="px-5 py-2 rounded-lg bg-slate-100 dark:bg-primary/10 text-slate-700 dark:text-slate-200 font-bold hover:bg-slate-200 dark:hover:bg-primary/20 transition">
                    Cancel
                </a>

                <button type="submit"
                        class="px-6 py-2 rounded-lg bg-primary text-background-dark font-bold hover:opacity-90 transition shadow-lg shadow-primary/20">
                    Save Category
                </button>
            </div>

        </form>
    </div>

</section>

<?= $this->endSection() ?>