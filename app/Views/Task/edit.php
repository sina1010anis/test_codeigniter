<?= $this->extend('layouts/def') ?>

<?= $this->section('title') ?>Edit Page <?= $tasks->name ?><?= $this->endSection() ?>

<?= $this->section('def') ?>

    <h1>EDDDDDIT...!</h1>
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
    <form method="post" action="/task/edit/<?= $tasks->id ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= old('name', $tasks->name) ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input  name="price" type="number" class="form-control" id="exampleInputPassword1" value="<?= old('price', $tasks->price) ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">DESC</label>
            <input  name="desc" type="text" class="form-control" id="exampleInputPassword1" value="<?= old('desc', $tasks->desc) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>