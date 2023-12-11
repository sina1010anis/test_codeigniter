<?= $this->extend('layouts/def') ?>

<?= $this->section('title') ?>Error Page<?= $this->endSection() ?>

<?= $this->section('def') ?>

    <h1>OOOOPSSSS...!</h1>

    <?php foreach($tasks as $key => $val){ ?>
        <p><?= $key .' => ' . $val ?></p>
    <?php } ?>
    <a href="/task/edit/<?= $tasks['id'] ?>">Edit</a>

<?= $this->endSection() ?>

