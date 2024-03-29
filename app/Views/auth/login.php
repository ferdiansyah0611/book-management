<?= $this->extend('templates/auth') ?>
<?= $this->section('title') ?>
Signin to library web
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="col-lg-5 col-md-7">
  <div class="card bg-secondary border-0 mb-0">
    <div class="card-body px-lg-5 py-lg-5">
      <div class="text-center text-muted mb-4">
        <small>Sign in with credentials</small>
      </div>
      <?php if(session()->getFlashData('error') || session()->getFlashData('validation')): ?>
      <div class="alert alert-danger" role="alert">
        <?php if(session()->getFlashData('error')): ?>
        <li><?php echo session()->getFlashData('error'); ?></li>
        <?php endif; ?>
        <?php foreach ((array) session()->getFlashData('validation') as $key => $value): ?>
        <li>
          <?= $value ?>
        </li>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
      <form action="<?= route_to('login') ?>" method="post" role="form">
        <?= csrf_field() ?>
        <div class="form-group mb-3">
          <div class="input-group input-group-merge input-group-alternative">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
            </div>
            <input class="form-control" name="email" placeholder="Email" type="email">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group input-group-merge input-group-alternative">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
            </div>
            <input class="form-control" name="password" placeholder="Password" type="password">
          </div>
        </div>
        <div class="custom-control custom-control-alternative custom-checkbox">
          <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
          <label class="custom-control-label" for=" customCheckLogin">
            <span class="text-muted">Remember me</span>
          </label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary my-4">Sign in</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-6">
      <a href="#" class="text-light"><small>Forgot password?</small></a>
    </div>
    <div class="col-6 text-right">
      <a href="<?= route_to('App\Controllers\AuthController::register') ?>" class="text-light"><small>Create new account</small></a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>