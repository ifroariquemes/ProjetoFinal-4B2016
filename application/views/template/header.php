<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>BR-Info <?= isset($page_title) ? '| ' . $page_title : "" ?></title>
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php if ($this->session->flashdata('msg')) { ?>
            <div class="alert alert-dismissible <?= $this->session->flashdata('type') ?>">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?= $this->session->flashdata('msg') ?></div>
        <?php } ?>
        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url('app') ?>">BR-Info</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= base_url('app') ?>">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Monitores
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('produto/where/8') ?>">Lcd</a></li>
                            <li><a href="<?= base_url('produto/where/9') ?>">Led</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Processadores
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('produto/where/10') ?>">AMD</a></li>
                            <li><a href="<?= base_url('produto/where/11') ?>">Intel</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Memórias
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('produto/where/2') ?>">Primária</a></li>
                            <li><a href="<?= base_url('produto/where/6') ?>">Secundária</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Placas
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('produto/where/5') ?>">Placa de vídeo</a></li>
                            <li><a href="<?= base_url('produto/where/4') ?>">Placa de som</a></li>
                            <li><a href="<?= base_url('produto/where/12') ?>">Placa-mãe Asus</a></li>
                            <li><a href="<?= base_url('produto/where/13') ?>">Placa-mãe GigaByte</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form navbar-left" action="<?= base_url('produto/busca') ?>" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="pesquisa" placeholder="Pesquisar">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li><a href="<?= base_url('carrinho/view') ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
                    <?php if (!$this->session->has_userdata('logged')) { ?>
                        <li>
                            <a href="<?= base_url('user/login') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                    <?php } else { ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $this->session->userdata('nm_usuario') ?>
                                <span class="glyphicon glyphicon-cog"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('user') ?>">Usuários</a></li>
                                <li><a href="<?= base_url('user/edit') ?>">Editar perfil</a></li>
                                <li><a href="<?= base_url('user/cadastrar') ?>">Cadastrar usuário</a></li>
                                <li class="divider"></li>
                                <li><a href="<?= base_url('user/logout') ?>">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
