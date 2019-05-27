<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <title><?php echo $title; ?></title>

        <link rel="stylesheet"
            href="<?php echo base_url('resources/css/bootstrap.css'); ?>">
    </head>
    <body class="bg-light">
        <!-- Menu principal -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <!-- Marca do site: Booklacks -->
            <a href="<?php echo base_url() ?>" class="navbar-brand">
                Booklacks
            </a>
            <!-- /Marca do site: Booklacks -->
            <!-- Menu principal -->
            <div class="collapse navbar-collapse" id="menu-principal">
                <ul class="navbar-nav mr-auto">
                    <!-- Dropdown para editoras -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu-editora"
                            role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        Editoras
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menu-editora">
                            <a class="dropdown-item" href="<?php echo base_url('cadastrar-editora') ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?php echo base_url('visualizar-editoras') ?>">Visualizar</a>
                        </div>
                    </li>
                    <!-- Dropdpwn para livros -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu-livro"
                            role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        Livros
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menu-livro">
                            <a class="dropdown-item" href="<?php echo base_url('cadastrar-livro') ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?php echo base_url('visualizar-livros') ?>">Visualizar</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /Menu principal -->
        </nav>
        <!-- /Menu principal -->
