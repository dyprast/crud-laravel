<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>CRUD Romadhan</title>
    <link rel="icon" href="<?php echo e(asset('img/logo.png')); ?>">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/native.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('font-awesome/css/all.css')); ?>">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #fff; box-shadow: 0 5px 10px rgba(0,0,0,.1);z-index: 2;padding: 0;">
            <div class="container topnav">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="color: #444;font-weight: bold;">
                    CRUD Romadhan <img src="<?php echo e(asset('img/logo.png')); ?>" style="width: 35px;">
                </a>
                <button class="navbar-toggler" style="color: white;border: none;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #fff" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <li class="nav-item">
                                <?php if(Route::has('register')): ?>
                                    <a class="nav-link" style="color: #fff" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                <?php endif; ?>
                            </li>
                        <?php else: ?>
                            <li class="nav-item responsive">
                                <a class="nav-link no-color" href="<?php echo e(url('jurusan')); ?>">Jurusan</a>
                            </li>
                            <li class="nav-item responsive">
                                <a class="nav-link no-color" href="<?php echo e(url('kelas')); ?>">Kelas</a>
                            </li>
                            <li class="nav-item responsive">
                                <a class="nav-link no-color" href="<?php echo e(url('siswa')); ?>">Siswa</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: #fff;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="main-page">
            <?php if(auth()->guard()->guest()): ?>
            <?php else: ?>
            <nav class="sidenav">
                <div class="profile">
                    <i class="fas fa-user"></i>
                    <p class="h5"><?php echo e(Auth::user()->name); ?> (Administrator)</p>
                    <p><?php echo e(Auth::user()->email); ?></p>
                </div>
                <div class="menu">
                    <a href="<?php echo e(url('home')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a href="<?php echo e(url('jurusan')); ?>"><i class="fab fa-grav"></i> Jurusan</a>
                    <a href="<?php echo e(url('kelas')); ?>"><i class="fas fa-door-open"></i> Kelas</a>
                    <a href="<?php echo e(url('siswa')); ?>"><i class="fas fa-graduation-cap"></i> Siswa</a>
                </div>
            </nav>
            <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
