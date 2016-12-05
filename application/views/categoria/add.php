<div class="container container-fixed-600">
    <div class="row">
        <div class="col-md-3">
            <h1 class="text-center">Cadastro</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <form class="form-horizontal" action="<?= base_url('categoria/add') ?>" method="POST">
            <div class="form-group">
                <label  for="nm_categoria" class="control-label col-md-3">Nome:</label>
                <div class="col-md-6">
                    <input type="text" id="nm_categoria" name="nm_categoria" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-3">
                    <button class="btn btn-success btn-block" type="submit">Cadastrar </button>
                </div>
            </div>
            <input type="hidden" name="add" value="add" />
        </form>
    </div>
</div>

