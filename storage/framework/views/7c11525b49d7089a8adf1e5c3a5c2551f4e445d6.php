
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">

      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Branding Image -->
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        &nbsp;
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        
        <?php if(Auth::user()): ?>
          <li class=""><a href="<?php echo e(route('favorites', Auth::user()->id)); ?>">My Fav Posts</a></li>
        <?php endif; ?>
        
        <li class="<?php echo e(Request::is('tags')? 'active' : ''); ?>"><a href="<?php echo e(route('tags.index')); ?>">Tags</a></li>
        <li class="<?php echo e(Request::is('categories')? 'active' : ''); ?>"><a href="<?php echo e(route('categories.index')); ?>">Categories</a></li>
        
        
        <li>
            <form methode="GET" action="">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <input type="search" name="q" class="form-control" placeholder="Search" id="q" />
                </div>
            </form>
        </li>
        
        <?php if(Auth::user()): ?>
          <?php if(Auth::user() || Auth::user()->isAdmin()): ?>
            <li><a href="<?php echo e(route('posts.create')); ?>">Create Post</a></li>
          <?php endif; ?>
        <?php endif; ?>
        
        <!-- Authentication Links -->
        <?php if(Auth::guest()): ?>
        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
        <?php else: ?>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

              <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

              </form>
            </li>
          </ul>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>