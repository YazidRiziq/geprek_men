<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Header -->
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
    <div>
        <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100 leading-tight tracking-tight">Edit Menu</h1>
        <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Update an existing item in your restaurant's digital menu.</p>
    </div>
    <div class="bg-primary/10 p-3 rounded-full">
        <span class="material-symbols-outlined text-primary text-3xl">restaurant_menu</span>
    </div>
</div>

<!-- Error Message -->
<div class="p-6">
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</div>

<!-- Form Section -->
<form action="<?= base_url('/admin/menu/update/' . $item['id']) ?>" method="post" enctype="multipart/form-data" class="p-8 space-y-6">

    <!-- Item Name -->
    <div class="flex flex-col gap-2">
        <label class="text-slate-900 dark:text-slate-100 font-semibold text-sm flex items-center gap-1">
            Name <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <input value="<?= old('name', $item['name']) ?>" id="name" name="name" class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all text-slate-900 dark:text-slate-100 placeholder:text-slate-400" placeholder="e.g. Grilled Wagyu Steak" type="text" required/>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Category Dropdown -->
        <div class="flex flex-col gap-2">
            <label class="text-slate-900 dark:text-slate-100 font-semibold text-sm flex items-center gap-1">
                Category <span class="text-red-500">*</span>
            </label>
            <select name="category_id"
                class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all text-slate-900 dark:text-slate-100 appearance-none"
                required>

                <option value="" disabled <?= old('category_id') ? '' : 'selected' ?>>
                    Select category
                </option>

                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>"
                        <?= old('category_id', $item['category_id']) == $category['id'] ? 'selected' : '' ?>>
                        <?= esc($category['cat_name']) ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <!-- Price Input -->
        <div class="flex flex-col gap-2">
            <label class="text-slate-900 dark:text-slate-100 font-semibold text-sm flex items-center gap-1">
                Price <span class="text-red-500">*</span>
            </label>
            <div class="relative flex items-center">
                <span class="absolute left-4 text-slate-500 font-medium">Rp</span>
                <input value="<?= old('price', $item['price']) ?>" id="price" name="price" class="w-full pl-12 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all text-slate-900 dark:text-slate-100 placeholder:text-slate-400" placeholder="0" type="number" required/>
            </div>
        </div>
    </div>

    <!-- Description Textarea -->
    <div class="flex flex-col gap-2">
        <label class="text-slate-900 dark:text-slate-100 font-semibold text-sm flex items-center gap-1">
            Description <span class="text-red-500">*</span>
        </label>
        <textarea name="description" class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all text-slate-900 dark:text-slate-100 placeholder:text-slate-400 resize-none" placeholder="Describe the ingredients, taste, and serving size..." rows="4"
        required><?= old('description', $item['description']) ?></textarea>
    </div>

    <div class="flex flex-col gap-2">
        <label class="text-slate-900 dark:text-slate-100 font-semibold text-sm flex items-center gap-1">
            Status <span class="text-red-500">*</span>
        </label>
        <select name="is_active"
            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all text-slate-900 dark:text-slate-100 appearance-none"
            required>

            <option value="" disabled <?= old('is_active') ? '' : 'selected' ?>>
                Select status
            </option>

            <option value="1" <?= old('is_active', $item['is_active']) == 1 ? 'selected' : '' ?>>
                Available
            </option>

            <option value="0" <?= old('is_active', $item['is_active']) == 0 ? 'selected' : '' ?>>
                Unavailable
            </option>

        </select>
    </div>

    <!-- Image Upload -->
    <div class="flex flex-col gap-2">
        <label class="text-slate-900 dark:text-slate-100 font-semibold text-sm flex items-center gap-1">
            Menu Image <span class="text-red-500">*</span>
        </label>
        <div id="uploadBox" class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-200 dark:border-slate-700 border-dashed rounded-xl hover:border-primary transition-colors cursor-pointer group bg-slate-50 dark:bg-slate-800/50">
            <div class="space-y-1 text-center">
                <span id="symbol" class="material-symbols-outlined text-slate-400 group-hover:text-primary text-4xl mb-2 transition-colors">cloud_upload</span>
                <div id="uploadText" class="flex text-sm text-slate-600 dark:text-slate-400">
                    <label class="relative cursor-pointer rounded-md font-medium text-primary hover:underline focus-within:outline-none" for="img">
                        <span>Upload a file</span>
                    </label>
                    <p class="pl-1">or drag and drop</p>
                </div>  
                <p id="uploadInfo" class="text-xs text-slate-500 dark:text-slate-400">
                    JPG, JPEG up to 10MB
                </p>
            </div>
        </div>
        <input accept=".jpg,.jpeg" class="hidden" id="img" name="img" type="file">
    </div>

    <!-- Footer Action Buttons -->
    <div class="flex items-center justify-end gap-4 pt-4 border-t border-slate-100 dark:border-slate-800">
        <a class="px-6 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 font-semibold text-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= base_url('admin/menu') ?>">
            Cancel
        </a>
        <button class="px-8 py-2.5 bg-primary text-slate-900 font-bold rounded-lg shadow-md hover:shadow-lg hover:scale-[1.02] active:scale-95 transition-all text-sm flex items-center gap-2" type="submit">
            <span class="material-symbols-outlined text-lg">save</span>
            Save Menu Item
        </button>
    </div>
</form>

<script>
    const fileInput = document.getElementById('img');
    const uploadBox = document.getElementById('uploadBox');
    const uploadText = document.getElementById('uploadText');
    const uploadInfo = document.getElementById('uploadInfo');
    const symbol = document.getElementById('symbol');

    uploadBox.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', function() {
        if (this.files.length > 0) {
            const fileName = this.files[0].name;

            uploadText.textContent = "Selected: " + fileName;
            uploadInfo.textContent = "File size: " + (this.files[0].size / 1024 / 1024).toFixed(2) + " MB";
            symbol.classList.remove('text-slate-400', 'group-hover:text-primary');
            symbol.classList.add('text-green-500');
            uploadBox.classList.remove('border-slate-200', 'dark:border-slate-700', 'hover:border-primary');
            uploadBox.classList.add('border-green-500', 'bg-green-50');
        }
    });
</script>

<?= $this->endSection() ?>