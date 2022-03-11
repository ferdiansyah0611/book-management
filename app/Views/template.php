<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('argon') ?>/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('argon') ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('argon') ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('argon') ?>/assets/css/argon.min.css?v=1.2.0" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/app.css" type="text/css">
  </head>
  <body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
      <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
          <a class="navbar-brand" href="javascript:void(0)">
            <img src="<?= base_url('argon') ?>/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
          </a>
          <div class="ml-auto">
            <div class="sidenav-toggler d-none d-xl-block active" data-action="sidenav-unpin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar-inner">
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link<?= $active == '/' ? ' active': '' ?>" href="<?= base_url() ?>">
                  <i class="ni ni-tv-2 text-primary"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link collapsed<?= $active == 'Book' ? ' active': '' ?>" href="#navbar-Book" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-Book">
                  <i class="ni ni-books text-primary"></i>
                  <span class="nav-link-text">Book</span>
                </a>
                <div class="collapse" id="navbar-Book" style="">
                  <ul class="nav nav-sm flex-column">
                    <?php if ($user['role'] == 'admin'): ?>
                      <li class="nav-item">
                        <a href="<?= route_to('App\Controllers\BookController::new') ?>" class="nav-link">Create</a>
                      </li>
                    <?php endif ?>
                    <li class="nav-item">
                      <a href="<?= route_to('App\Controllers\BookController::index') ?>" class="nav-link">Data</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link collapsed<?= $active == 'BorrowBook' ? ' active': '' ?>" href="#navbar-BorrowBook" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-BorrowBook">
                  <i class="ni ni-box-2 text-primary"></i>
                  <span class="nav-link-text">BorrowBook</span>
                </a>
                <div class="collapse" id="navbar-BorrowBook" style="">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="<?= route_to('App\Controllers\Borrowbooks::index') ?>" class="nav-link">Data</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link collapsed<?= $active == 'Ebook' ? ' active': '' ?>" href="#navbar-Ebook" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-Ebook">
                  <i class="ni ni-collection text-primary"></i>
                  <span class="nav-link-text">E-book</span>
                </a>
                <div class="collapse" id="navbar-Ebook" style="">
                  <ul class="nav nav-sm flex-column">
                    <?php if ($user['role'] == 'admin'): ?>
                      <li class="nav-item">
                        <a href="<?= route_to('App\Controllers\EbookController::new') ?>" class="nav-link">Create</a>
                      </li>
                    <?php endif ?>
                    <li class="nav-item">
                      <a href="<?= route_to('App\Controllers\EbookController::index') ?>" class="nav-link">Data</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
            <?php if($user['role'] == 'admin'): ?>
              <hr class="my-3">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link collapsed<?= $active == 'User' ? ' active': '' ?>" href="#navbar-User" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-User">
                    <i class="ni ni-single-02 text-primary"></i>
                    <span class="nav-link-text">User</span>
                  </a>
                  <div class="collapse" id="navbar-User" style="">
                    <ul class="nav nav-sm flex-column">
                      <?php if ($user['role'] == 'admin'): ?>
                        <li class="nav-item">
                          <a href="<?= route_to('App\Controllers\UserController::new') ?>" class="nav-link">Create</a>
                        </li>
                      <?php endif ?>
                      <li class="nav-item">
                        <a href="<?= route_to('App\Controllers\UserController::index') ?>" class="nav-link">Data</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
      <!-- Topnav -->
      <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search form -->
            <form action="" class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
              <div class="form-group mb-0">
                <div class="input-group input-group-alternative input-group-merge">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                  <input class="form-control" placeholder="Search" type="text" name="search" value="<?= isset($_GET['search']) ? $_GET['search']: '' ?>">
                </div>
              </div>
              <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
            </form>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
              <li class="nav-item d-xl-none">
                <!-- Sidenav toggler -->
                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </div>
              </li>
              <li class="nav-item d-sm-none">
                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                  <i class="ni ni-zoom-split-in"></i>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" src="<?= base_url('argon') ?>/assets/img/theme/team-4.jpg">
                    </span>
                    <div class="media-body  ml-2  d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold"><?= $user['username'] ?></span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right ">
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="#" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="<?= route_to('logout') ?>" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <?= $this->renderSection('header') ?>
      <!-- Page content -->
      <div class="container-fluid mt--6">
        <?= $this->renderSection('content') ?>
        <!-- Footer -->
        <footer class="footer pt-0">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
              <div class="copyright text-center  text-lg-left  text-muted">
                &copy; 2022 <a href="http://fairy-technology.web.app/" class="font-weight-bold ml-1" target="_blank">Fairy Tech</a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Design by Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://ferdianyah.web.app" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://ferdiansyah-blog.herokuapp.com/" class="nav-link" target="_blank">Blog</a>
                </li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="<?= base_url('argon') ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('argon') ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('argon') ?>/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url('argon') ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url('argon') ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="<?= base_url('argon') ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url('argon') ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url('argon') ?>/assets/js/argon.js?v=1.2.0"></script>
    <?= $this->renderSection('js') ?>
  </body>
</html>