<?= $this->extend('layouts/def') ?>

<?= $this->section('title') ?>Error Page<?= $this->endSection() ?>

<?= $this->section('def') ?>

    <h1>Hello <?= auth()->user()->name ?>...!</h1>
    <a href="/logout">Logout</a>
    <a href="/image">Image</a>

<?= $this->endSection() ?>