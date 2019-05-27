<?php include_once 'templates/header.php'; ?>
<div class="container" style="padding-top: 4rem">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <table class="table table-hover">
                <thead class="thead-light">
                <tr class="text-center">
                    <th>Título do Livro</th>
                    <th>Editora</th>
                    <th>Ano de Lançamento</th>
                    <th>Páginas</th>
                    <th>Sinopse</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($livros as $livro)
                {
                    echo
                        '<tr>
                            <td>' . $livro['titulo_livro'] .'</td>
                            <td>' . $livro['nome_editora'] .'</td>
                            <td>' . $livro['ano_lancamento'] .'</td>
                            <td>' . $livro['paginas'] .'</td>
                            <td>' . $livro['sinopse'] .'</td>
                        </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once 'templates/footer.php'; ?>
