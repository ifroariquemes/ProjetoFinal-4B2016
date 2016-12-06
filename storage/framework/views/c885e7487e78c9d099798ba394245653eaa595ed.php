<?php $__env->startSection('content'); ?>
<div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
            <div class="blog-post">
              <h2 class="blog-post-title"><?php echo e($post->titulo); ?></h2>
              <p class="blog-post-meta">Postado por <b><?php echo e($post->autor->name); ?></b>, às <?php echo e(date_format($post->created_at, 'H:i - 
              d-m-Y')); ?></p>
              <p class="blog-post-meta">Revisto por <b><?php echo e($post->revisor->name); ?></b>, às <?php echo e(date_format($post->updated_at, 'H:i - d-m-Y')); ?></p>
              <hr>
              <?php echo $post->texto_completo; ?>

            </div><!-- /.blog-post -->
          
        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>