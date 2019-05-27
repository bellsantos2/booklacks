<?php include_once 'templates/header.php'; ?>
<div class="container" style="padding-top: 2rem">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="card-title h3 text-center text-muted">Cadastrar Livro</div>
                    <form action="<?php echo base_url('salvar-livro') ?>" method="post">
                        <div class="form-group">
                            <label for="titulo_livro">Titulo do Livro</label>
                            <input type="text" name="titulo_livro" id="titulo_livro" class="form-control
                                <?php if ( ! empty(form_error('titulo_livro'))) echo 'is-invalid'; ?>"
                                value="<?php echo set_value('titulo_livro'); ?>">
                            <div class="invalid-feedback">
                                <?php echo form_error('titulo_livro'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="editora">Editora</label>
                                <select class="form-control <?php if ( ! empty(form_error('editora')))
                                    echo 'is-invalid'; ?>" name="editora">
                                    <option value="">Escolha uma opção</option>
                                    <?php
										foreach ($editoras_dropdown as $editora) {
											echo
												'<option value="' . $editora['id_editora'] . '"
												' . set_select('editora',$editora['id_editora']) . '>' .
                                                $editora['nome_editora'] . '</option>';
										}
									?>

                                </select>
                                <div class="invalid-feedback">
                                	<?php echo form_error('editora'); ?>
                            	</div>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="ano_lancamento">Lançamento</label>
                                <input type="text" name="ano_lancamento" id="ano_lancamento"class="form-control
                                    <?php if ( ! empty(form_error('ano_lancamento'))) echo 'is-invalid'; ?>"
                                    value="<?php echo set_value('ano_lancamento'); ?>" placeholder="Ano">
                                <div class="invalid-feedback">
                                    <?php echo form_error('ano_lancamento'); ?>
                                </div>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="paginas">Páginas</label>
                                <input type="text" name="paginas" id="paginas" class="form-control
                                    <?php if ( ! empty(form_error('paginas'))) echo 'is-invalid'; ?>"
                                    value="<?php echo set_value('paginas'); ?>" placeholder="Qtd.">
                                <div class="invalid-feedback">
                                    <?php echo form_error('paginas'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sinopse">Resumo do Livro</label>
                            <textarea name="sinopse" id="sinopse" class="form-control
                                <?php if ( ! empty(form_error('sinopse'))) echo 'is-invalid'; ?>" rows="3"><?php echo set_value('sinopse') ?></textarea>
                            <div class="invalid-feedback">
                                <?php echo form_error('sinopse'); ?>
                            </div>
                        </div>
                        <div class="text-center" style="padding-top:2rem">
                            <button type="submit" name="salvar_livro" class="btn btn-outline-success">Salvar Livro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'templates/footer.php'; ?>
