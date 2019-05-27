<?php include_once 'templates/header.php'; ?>
<div class="container" style="padding-top: 4rem">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th>Nome da Editora</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($editoras as $editora)
                        {
                            echo
                            '<tr>
                                <td>' . $editora['nome_editora'] .'</td>
                                <td>' . $editora['rua'] .'</td>
                                <td>' . $editora['numero'] .'</td>
                                <td>' . $editora['bairro'] .'</td>
                                <td>' . $editora['email'] .'</td>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once 'templates/footer.php'; ?>
