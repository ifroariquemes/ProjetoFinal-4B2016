<div class="container container-fixed-80-100">
    <?php foreach ($produtos as $produto) { ?>
        <div class="box-flutuante">
            <img src="<?= base_url('assets/imagens/' . $produto->foto) ?>" class="box"/>
            <p><a class="btn btn-default btn-block" href="<?= base_url('produto/view/' . $produto->produto_id) ?>">Vizualar</a><p>
        </div>
    <?php } ?>
</div>