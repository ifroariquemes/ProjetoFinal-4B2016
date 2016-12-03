<div class="container container-fixed-850">
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Telefone</th>
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
