<?= $this->extend('layouts/def') ?>

<?= $this->section('title') ?>Image Page <?= $this->endSection() ?>

<?= $this->section('def') ?>

    <h1>Image...!</h1>
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
    <form method="post" action="/image" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">File </label>
            <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>