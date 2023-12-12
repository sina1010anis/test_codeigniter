<?= $this->extend('layouts/def') ?>

<?= $this->section('title') ?>Login Page <?= $this->endSection() ?>

<?= $this->section('def') ?>
    <div class="container-lg">
        <div class="row">
            <div class="col-6 bg-warning offset-3 p-3 rounded-2 mt-3">
                <?php if (session()->has('error')): ?>
                    <?php foreach(session('error') as $e): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $e ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if (session()->has('ok')): ?>
                        <div class="alert alert-success" role="alert">
                            با موفقیت ساخته شد
                        </div>
                <?php endif; ?>
                <form action="/register" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Address </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?= old('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>