<?php $__env->startSection('content'); ?>
<div class="container">

      <div class="row">

        <div class="col-sm-12 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Editar Post</h2>
            <hr>
            <?php echo Form::model($post, ['method' => 'PATCH', 'url' => 'post/'.$post->id.'/update']); ?>

              <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <div class="form-group">
                  <label for="titulo">Titulo da postagem</label>
                  <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo e($post->titulo); ?>">
                </div>
                <div class="form-group">
                  <label for="categoria"> Selecione a Categoria</label>
                  <select class="form-control" id="categoria" name="categoria">
                        <option value=""></option>
                        <?php foreach($categorias as $categoria): ?>
                          <?php if($categoria->id == $post->categoria_id): ?>
                            <option value="<?php echo e($categoria->id); ?>" selected><?php echo e($categoria->categoria); ?></option>
                          <?php else: ?>
                            <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->categoria); ?></option>
                          <?php endif; ?>
                        <?php endforeach; ?>
                   </select>
                </div> 
                <div class="form-group">
                  <label for="visualizacao">Visualização do Post</label>
                   <select class="form-control" id="visualizacao" name="ativo">
                        <?php if($post->ativo = 1): ?>
                          <option value="1" selected>Ativo</option>
                          <option value="0">Inativo</option>   
                        <?php elseif($post->ativo = 0): ?> 
                          <option value="1">Ativo</option>   
                          <option value="0" selected>Inativo</option>   
                        <?php endif; ?>
                   </select>
                </div>
                <div class="form-group">
                  <label>Conteudo da postagem</label>
                  <textarea style="resize: none;" class="form-control" name="texto_completo" id="texto" rows="10"><?php echo e($post->texto_completo); ?></textarea>
                </div>
                <button type="submit" class="btn btn-success">Atualizar <i class="glyphicon glyphicon-ok"></i></button>
              </div>
            <?php echo Form::close(); ?>

          </div><!-- /.blog-post -->
          <hr>
        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->
    <script>
      $(document).ready(function() {
        $("#texto").summernote({
          lang: 'pt-BR',
          height: 300,
          minHeight: 300,
          maxHeight: 300,
          focus: true 
        });
      });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>