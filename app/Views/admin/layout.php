<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Admin' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">

    <?= $this->include('admin/partials/navbar') ?>

    <div class="flex flex-1">
        <?= $this->include('admin/partials/sidebar') ?>

        <main class="flex-1 p-6">
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <?= $this->include('admin/partials/footer') ?>

</body>
</html>