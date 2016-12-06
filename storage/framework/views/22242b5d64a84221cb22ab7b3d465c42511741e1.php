<?php $__env->startSection('content'); ?>
<div class="container">
      <?php if(Session::has('message')): ?>
        <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
      <?php endif; ?>
      <div class="blog-header">
        <h1 class="blog-title">BloGamers</h1>
        <p class="lead blog-description">O blog dos gamers, posts de league of legends, World of warcraft etc.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
        <?php if( isset($posts[0]) ): ?>
          <?php foreach($posts as $post): ?>
            <div class="blog-post">
              <h2 class="blog-post-title"><?php echo e($post->titulo); ?></h2>
              <p class="blog-post-meta">Postado por <b><?php echo e($post->autor->name); ?></b>, às <?php echo e(date_format($post->created_at, 'H:i - 
              d-m-Y')); ?></p>
              <p class="blog-post-meta">Revisto por <b><?php echo e($post->revisor->name); ?></b>, às <?php echo e(date_format($post->updated_at, 'H:i - d-m-Y')); ?></p>
              <hr>
              <?php echo e($post->resumo); ?>

              <p></p>
              <?php if(Auth::guest()): ?>
                <a class="btn btn-primary" href="home/<?php echo e($post->id); ?>/read">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>
              <?php else: ?>
                <a class="btn btn-primary" href="home/<?php echo e($post->id); ?>/read">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>
                <a class="btn btn-success" href="post/<?php echo e($post->id); ?>/edit">Editar <span class="glyphicon glyphicon-edit"></span></a>
                <a class="btn btn-danger" href="post/<?php echo e($post->id); ?>/disable">Desativar <span class="glyphicon glyphicon-remove"></span></a>
              <?php endif; ?>
            </div><!-- /.blog-post -->
          <?php endforeach; ?>
          <hr>
          <?php echo $posts->render(); ?>

        <?php else: ?>
          <div class="alert alert-info" role="alert">Nenhum post foi cadastrado.</div>
        <?php endif; ?> 

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <?php if(Auth::guest()): ?>
            <div class="sidebar-module">
              <h4>Categorias</h4>
              <ol class="list-unstyled">
              <?php if(isset($categorias[0])): ?>
                <?php foreach($categorias as $categoria): ?>
                  <li><a href="<?php echo e(url('/home/'.$categoria->id)); ?>"><?php echo e($categoria->categoria); ?></a></li>
                <?php endforeach; ?>
              <?php else: ?>
                <li>Sem categorias</li>
              <?php endif; ?>
              </ol>
            </div>
          <?php else: ?>
            <div class="sidebar-module sidebar-module-inset">
              <h4>Gerenciar post's</h4>
              <a class="btn btn-primary" href="<?php echo e(url('/post/create')); ?>">Novo post <span class="glyphicon glyphicon-pencil"></span></a>
              <br><br>
              <a class="btn btn-warning" href="<?php echo e(url('/post/desactives')); ?>">Post's desativados <span class="glyphicon glyphicon-th-list"></span></a>
            </div>
            <div class="sidebar-module">
              <h4>Categorias</h4>
              <ol class="list-unstyled">
              <?php if(isset($categorias[0])): ?>
                <?php foreach($categorias as $categoria): ?>
                  <li><a href="<?php echo e(url('/home/'.$categoria->id)); ?>"><?php echo e($categoria->categoria); ?></a></li>
                <?php endforeach; ?>
              <?php else: ?>
                <li>Sem categorias</li>
              <?php endif; ?>
              </ol>
            </div>
          <?php endif; ?>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>