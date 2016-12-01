<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">

        <div class="col-sm-12">
			<?php if(Session::has('message')): ?>
				<div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
			<?php endif; ?>
			<a href="<?php echo e(url('/categoria/create')); ?>" class="btn btn-primary pull-right">Nova categoria</a>
			<br>
			<?php if( isset($categorias[0]) ): ?>
				<table class="table table-striped">
					<thead>
						<th>Categorias</th>
						<th>Criado</th>
						<th>Atualizado</th>
						<th><span class="pull-right">Ações</span></th>
					</thead>
			<?php foreach($categorias as $categoria): ?>
				<tbody>
					<th><?php echo e($categoria->categoria); ?></th>
					<th><?php echo e(date_format($categoria->created_at, 'd-m-Y - H:i')); ?></th>
					<th><?php echo e(date_format($categoria->updated_at, 'd-m-Y - H:i')); ?></th>
					<th>
				 		<div role="group" class="pull-right">
							<a href="<?php echo e($categoria->id); ?>/edit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar</a>
							<?php echo Form::open(['method' => 'DELETE', 'url' => 'categoria/'.$categoria->id.'/destroy', 'style' => 'display: inline;']); ?>

							<button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Excluir</button>
							<?php echo Form::close(); ?>

						</div>
					</th>
				</tbody>
			<?php endforeach; ?>
			</table>
			<br>
			<?php else: ?>
				<br>
				<div class="alert alert-info" role="alert">Nenhuma categoria foi cadastrada.</div>
			<?php endif; ?>	
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>