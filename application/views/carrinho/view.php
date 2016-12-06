<?php $this->load->library('cart') ?>
<div class="container container-fixed-850">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->cart->contents() as $produto) { ?>
                    <tr>
                        <td><?= $produto['name'] ?></td>
                        <td><?= $produto['qty'] ?></td>
                        <td><?= $produto['price'] ?></td>
                    </tr>
                <?php } ?>
                    <tr>
                        <td>Valor total</td>
                        <td></td>
                        <td><?= $this->cart->total()?></td>
                    </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-3">
                <a href="<?= base_url("carrinho/salvar")?>" class="btn btn-success">Salvar</a>
            </div>
        </div>
    </div>
</div>