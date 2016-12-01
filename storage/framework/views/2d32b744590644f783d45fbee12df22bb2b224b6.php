<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">

        <div class="col-sm-12">

            <div class="blog-post">
                <h2 class="blog-post-title">Editar categoria</h2>
                <hr>
                <?php echo Form::model($categoria, ['method' => 'PATCH', 'url' => 'categoria/'.$categoria->id.'/update']); ?>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="titulo">Categoria</label>
                            <input type="text" class="form-control" name="categoria" id="titulo" value='<?php echo e($categoria->categoria); ?>'>
                        </div>
                    </div>
                    <?php echo Form::submit('Atualizar', ['class'=>'btn btn-primary pull-right']); ?>

                <?php echo Form::close(); ?>

            </div>
        </div><!-- /.blog-post -->
        <hr>
    </div><!-- /.blog-main -->

</div><!-- /.row -->

</div><!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>