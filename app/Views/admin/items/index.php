<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="text-2xl font-bold mb-4">Manage Menu</h1>

<a href="/admin/items/create" class="bg-blue-500 text-white px-4 py-2 rounded">Add Menu</a>

<table class="w-full mt-4 border">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-2 border">Name</th>
            <th class="p-2 border">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $item): ?>
        <tr>
            <td class="p-2 border"><?= $item['name'] ?></td>
            <td class="p-2 border"><?= $item['price'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>