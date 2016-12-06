<div class="container container-fixed-850">
    <div class="row">
        <div class="col-md-3">
            <h1>Produtos</h1>
        </div>

        <div class="col-md-3 col-md-offset-6">
            <a href="<?= base_url('produto/add') ?>" class="btn btn-primary pull-right h2">Novo produto</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="col-md-3">Produto</th>
                    <th class="col-md-3">Descrição</th>
                    <th class="col-md-3">Valor Unitário</th>
                    <th class="col-md-3">Açoes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) { ?>
                    <tr>
                        <td><?= $produto->nm_produto ?></td>
                        <td><?= $produto->descricao ?></td>
                        <td><?= $produto->vl_produto ?></td>
                        <td>
                            <a class="btn btn-success btn-xs" href="<?= base_url('produto/view/' . $produto->produto_id) ?>">Visualizar</a>
                            <a class="btn btn-warning btn-xs" href="<?= base_url('produto/edit/' . $produto->produto_id) ?>">Editar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <?= $pagination?>
    </div>
</div>