<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">

        <div class="col-sm-12">

            <div class="blog-post">
                <h2 class="blog-post-title">Nova categoria</h2>
                <hr>
                <form action="<?php echo e(URL::to('/categoria/store')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="titulo">Categoria</label>
                        <input type="text" class="form-control" name="categoria" id="titulo">
                        </div>
                    <button type="submit" class="btn btn-success pull-right">Salvar <i class="glyphicon glyphicon-ok"></i></button>
                </form>
            </div>
        </div><!-- /.blog-post -->
        <hr>
    </div><!-- /.blog-main -->

</div><!-- /.row -->

</div><!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>