<?=$this->extend('layout.php') ?>

<?=$this->section('title') ?>
    CRUD
<?=$this->endSection() ?>

<?=$this->section('content') ?>
    <div id='root'>
        <?=$this->include('templates/load/home') ?>
    </div>
<?=$this->endSection() ?>