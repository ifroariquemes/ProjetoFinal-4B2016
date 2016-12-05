<div class="container container-fixed-850">
    <div class="row">
        <div class="col-md-3">
            <h1>Usuários</h1>
        </div>

        <div class="col-md-3 col-md-offset-6">
            <a href="<?= base_url('user/cadastrar') ?>" class="btn btn-primary pull-right h2">Novo usuário</a>
        </div>
    </div>

    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="col-md-2">Nome</th>
                    <th class="col-md-4">Sobrenome</th>
                    <th class="col-md-4">Email</th>
                    <th class="col-md-2">Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr id="<?= $user->usuario_id ?>">
                        <td><?= $user->nm_usuario ?></td>
                        <td><?= $user->sobrenome ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->telefone ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <?= $pagination ?>
    </div>
</div>
