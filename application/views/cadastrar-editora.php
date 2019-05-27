<?php include_once 'templates/header.php'; ?>
<div class="container" style="padding-top: 2rem">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="card-title h3 text-center text-muted">Cadastrar Editora</div>
                    <form action="<?php echo base_url('salvar-editora') ?>" method="post">
                        <div class="form-group">
                            <label for="nome_editora">Nome da Editora</label>
                            <input type="text" name="nome_editora" id="nome_editora" class="form-control
                                <?php if ( ! empty(form_error('nome_editora'))) echo 'is-invalid'; ?>"
                                value="<?php echo set_value('nome_editora'); ?>">
                            <div class="invalid-feedback">
                                <?php echo form_error('nome_editora'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-5">
                                <label for="rua">Rua</label>
                                <input type="text" name="rua" id="rua" class="form-control
                                    <?php if ( ! empty(form_error('rua'))) echo 'is-invalid'; ?>"
                                    value="<?php echo set_value('rua'); ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('rua'); ?>
                                </div>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="numero">Número</label>
                                <input type="text" name="numero" id="numero" class="form-control
                                    <?php if ( ! empty(form_error('numero'))) echo 'is-invalid'; ?>"
                                    value="<?php echo set_value('numero'); ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('numero'); ?>
                                </div>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="bairro">Bairro</label>
                                <input type="text" name="bairro" id="bairro" class="form-control
                                    <?php if ( ! empty(form_error('bairro'))) echo 'is-invalid'; ?>"
                                    value=" ">
                                <div class="invalid-feedback">
                                    <?php echo form_error('bairro'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email para contato</label>
                            <input type="email" name="email" id="email" class="form-control" value="">
                        </div>
                        <div class="text-center" style="padding-top:2rem">
                            <button type="submit" name="salvar_editora" class="btn btn-outline-success">Salvar Editora</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'templates/footer.php'; ?>
