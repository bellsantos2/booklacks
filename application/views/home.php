<?php include_once 'templates/header.php'; ?>
<div class="container" style="padding-top: 2rem">
    <div class="row">
        <div class="col-lg-3 offset-lg-3">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <!-- Mensagem condicionada a qtd de livros' -->
                    <h1 class="display-3 card-title text-center"><?php echo $total_livros; ?></h1>
                    <?php
						if ($total_livros > 0)
						{
							echo '<p class="card-text">Livro(s) cadastrado(s).</p>';
						} else {
							echo '<p class="card-text">Nenhum livro cadastrado.</p>';
						}
					?>
                    <div class="text-center">
                        <a href="<?php echo base_url('cadastrar-livro') ?>" class="btn btn-dark <?php if ($total_editoras == 0) echo 'disabled';  ?>">Novo Livro</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h1 class="display-3 card-title text-center"><?php echo $total_editoras; ?></h1>
                    <?php
						if ($total_editoras > 0)
						{
							echo '<p class="card-text">Editoras(s) cadastrada(s).</p>';
						} else {
							echo '<p class="card-text">Nenhuma Editoras cadastrado.</p>';
						}
					?>
                    <div class="text-center">
                        <a href="<?php echo base_url('cadastrar-editora') ?>" class="btn btn-info">Nova Editora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'templates/footer.php'; ?>
