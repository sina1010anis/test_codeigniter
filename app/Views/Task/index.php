<?= $this->extend('layouts/def') ?>

<?= $this->section('title') ?>Error Page<?= $this->endSection() ?>

<?= $this->section('def') ?>

    <h1>OOOOPSSSS...!</h1>

    <?php foreach($tasks as $task){ ?>
        <p><?= $task ?></p>
    <?php } ?>

<?= $this->endSection() ?>

