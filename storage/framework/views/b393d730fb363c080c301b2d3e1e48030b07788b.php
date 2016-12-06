<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">

        <div class="col-sm-12">
			<?php if(Session::has('message')): ?>
				<div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
			<?php endif; ?>
			<br>
			<?php if( isset($postagens[0]) ): ?>
				<table class="table table-striped">
					<thead>
						<th>Titulo</th>
						<th>Desativado por </th>
						<th>Hora da desativação</th>
						<th><span class="pull-right">Ações</span></th>
					</thead>
			<?php foreach($postagens as $post): ?>
				<tbody>
					<th><?php echo e($post->titulo); ?></th>
					<th><?php echo e($post->revisor->name); ?></th>
					<th><?php echo e(date_format($post->updated_at, 'd-m-Y - H:i')); ?></th>
					<th>
				 		<div role="group" class="pull-right">
							<a class="btn btn-danger" href="<?php echo e($post->id); ?>/active">Ativar <span class="glyphicon glyphicon-remove"></span></a>
						</div>
					</th>
				</tbody>
			<?php endforeach; ?>
			</table>
			<?php echo $postagens->render(); ?>

			<br>
			<?php else: ?>
				<br>
				<div class="alert alert-info" role="alert">Nenhum post foi desativado.</div>
			<?php endif; ?>	
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>