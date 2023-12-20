<?= $this->extend('layouts/def') ?>

<?= $this->section('title') ?>Login Page <?= $this->endSection() ?>

<?= $this->section('def') ?>

    <h1 class="text-center alert alert-warning">test Hello</h1>
    <?php if ( ! auth()->check()): ?>

        <a href="login" class="btn btn-info m-3">login</a>
        <a href="register" class="btn btn-info m-3">register</a>

    <?php else: ?>
        <a href="home" class="btn btn-info m-3">Home</a>
    <?php endif; ?>


    <?php if (auth()->hasCoockieToken()): ?>

        <p class="alert alert-success text-center"><?= auth()->getTokenCookie() ?></p>

    <?php else: ?>

        <p class="alert alert-danger text-center">Not Set...!</p>
        
    <?php endif; ?>
<?= $this->endSection() ?>