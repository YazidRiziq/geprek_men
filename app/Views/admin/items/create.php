<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="text-2xl font-bold mb-4">Add Menu</h1>

<form action="/admin/items/store" method="post" class="space-y-4">

    <div>
        <label>Name</label>
        <input type="text" name="name" class="border p-2 w-full">
    </div>

    <div>
        <label>Price</label>
        <input type="number" name="price" class="border p-2 w-full">
    </div>

    <div>
        <label>Category</label>
        <select name="category_id" class="border p-2 w-full">
            <?php foreach ($categories as $cat): ?>
                <option value="<?= $cat['id'] ?>">
                    <?= $cat['cat_name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
        Save
    </button>

</form>

<?= $this->endSection() ?>