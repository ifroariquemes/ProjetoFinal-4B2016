<div class="container container-fixed-850">
    <div class="row">
        <div class="col-md-3">
            <h1>Categorias</h1>
        </div>
        
        <div class="col-md-3 col-md-offset-6">
            <a href="<?= base_url('categoria/add')?>" class="btn btn-primary pull-right h2">Nova categoria</a>
        </div>
    </div>

    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="col-md-9">Categoria</th>
                    <th class="col-lg-3">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria) { ?>
                    <tr>
                        <td><?= $categoria->nm_categoria ?></td>
                        <td>
                            <a class="btn btn-warning btn-xs" href="<?= base_url('categoria/edit/' . $categoria->categoria_id) ?>">Editar</a>
                        </td>
                    </tr>   
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <?= $pagination ?>
    </div>
</div>

