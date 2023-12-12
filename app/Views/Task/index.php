<?= $this->extend('layouts/def') ?>

<?= $this->section('title') ?>Error Page<?= $this->endSection() ?>

<?= $this->section('def') ?>

    <h1>OOOOPSSSS...!</h1>

        <p><?= $tasks->name ?></p>
    <a href="/task/edit/<?= $tasks->id ?>">Edit</a>

<?= $this->endSection() ?>

