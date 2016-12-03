<div class="container container-fixed-600">

    <div class="row">
        <h1 class="text-center">Cadastro</h1>
        <hr>
    </div>
    <div class="row">
        <form class="form-horizontal" action="<?= base_url('user/cadastrar') ?>" method="POST">
            <div class="form-group">
                <label  for="nm_usuario" class="control-label col-md-3">Nome:</label>
                <div class="col-md-6">
                    <input type="text" id="nm_usuario" name="nm_usuario" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="sobrenome" class="control-label col-md-3">Sobrenome:</label>
                <div class="col-md-9">
                    <input type="text" id="sobrenome" name="sobrenome" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-md-3">Email:</label>
                <div class="col-md-9">
                    <input type="email" id="email" name="email" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="senha" class="control-label col-md-3">Senha:</label>
                <div class="col-md-6">
                    <input type="password" id="senha" name="senha" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="telefone" class="control-label col-md-3">Telefone:</label>
                <div class="col-md-6">
                    <input type="text" id="telefone" name="telefone" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-3">
                    <button class="btn btn-success btn-block" type="submit">Cadastrar </button>
                </div>
            </div>
            <input type="hidden" name="cadastrar" value="cadastrar" />
        </form>
    </div>
</div>