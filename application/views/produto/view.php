<div class="container container-fixed-850">
    <div class="row">
        <h1><?= $produto['nm_produto'] ?></h1>
    </div>
    <div class="row">
        <div class="col-md-6"><img src="<?= base_url('assets/imagens/' . $produto['foto']) ?>" style="width: 400px; height: 400px"></div>
        <div class="col-md-6">
            <h2 style="color: #E13300"><?= $produto['vl_produto'] ?></h2>
            <?= $produto['descricao']?>
            <br />
            <a class="btn btn-default" href="<?= base_url('carrinho/add/' . $produto['produto_id']) ?>">Adionar ao carrinho</a>
        </div>
    </div>
</div>

