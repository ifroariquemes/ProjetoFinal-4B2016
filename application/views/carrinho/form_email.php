<div class="container container-fixed-600">
    <div class="row">
        <form class="form-horizontal" action="<?= base_url('carrinho/salvar') ?>" method="POST">
            <div class="form-group">
                <label  for="nome" class="control-label col-md-3">Nome:</label>
                <div class="col-md-6">
                    <input type="text" id="nome" name="nome" class="form-control" />
                </div>
            </div>  
            
            <div class="form-group">
                <label  for="email" class="control-label col-md-3">Email:</label>
                <div class="col-md-6">
                    <input type="email" id="email" name="email" class="form-control" />
                </div>
            </div>  
           
            <div class="form-group">
                <div class="col-md-4 col-md-offset-3">
                    <button class="btn btn-success btn-block" type="submit">Enviar </button>
                </div>
            </div>
            <input type="hidden" name="salvar" value="salvar" />
        </form>
    </div>
</div>