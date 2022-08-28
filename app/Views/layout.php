<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?=$this->renderSection('title')?>
    </title>
    <link rel="stylesheet" href="<?=base_url()?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/public/css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/public/css/styles.css">
</head>

<body>
    <?=$this->include('_partials/navbar.php')?>
    <main class="container py-5">
        <?=$this->renderSection('content') ?>
    </main>
    <script src="<?=base_url()?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="<?=base_url()?>/public/js/popper.min.js"></script>
    <script src="<?=base_url()?>/public/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/public/js/navbar.js"></script>
</body>

</html>