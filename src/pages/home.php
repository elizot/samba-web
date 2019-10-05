<?php
  session_start();
  if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
    header('Location: login.php');
    $page = $_GET['page'] ?? "dashboard";
?>
<?php require_once('./header.php');?>
<div class="Main-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <a class="navbar-brand" href="#">
            <img src="../assets/logo.svg" alt="samba" class="d-inline-block align-top" id="Main-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <i class="fas fa-tachometer-alt"></i> Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-building" aria-hidden="true"></i> Unidade Organizacional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=usersgroups"><i class="fa fa-users" aria-hidden="true"></i> Grupos e Usuários</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<main class="container-fluid" id="index-main">
    <?php include($page.".php"); ?>
</main>
<?php require_once('./footer.php');?>