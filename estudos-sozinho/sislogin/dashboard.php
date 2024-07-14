<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            .col,
            .col-md-2,
            .col-md-4,
            .col-md-5,
            .col-md-6 {
                margin: 0.5rem 0;
            }

        .logout {
            width: 100px;
            color: white;
            margin: 0 2rem 0 0;
        }
    </style>
</head>
<body>
    <?php
            if(!isset($_SESSION)) {
                session_start();
            }

            if(!isset($_SESSION['UsuarioID'])) {
                header("Location: index.php");
                exit;
            }
        
            // var_dump($_SESSION);
            function view_itens() {
                switch($_SESSION['UsuarioNivel']) {
                    case 1:
                        $qtd_itens = 3;
                        break;

                    case 2:
                        $qtd_itens = 4;
                        break;
                        
                    case 3:
                        $qtd_itens = 5;
                        break;

                    default:
                        $qtd_itens = 3;
                        break;
                    }
    ?>

    <?php   if($qtd_itens == 3) { ?>
        <div class="sidebar close">
            <div class="logo-details">
                <i class="bx bxl-c-plus-plus"></i>
                <span class="logo_name">SisLogin</span>
            </div>
            <ul class="nav-links">
                <li>
                <a href="dashboard.php">
                    <i class="bx bx-compass"></i>
                    <span class="link_name">Explorar</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php">Explorar</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_usu.php">
                    <i class="bx bx-user"></i>
                    <span class="link_name">Usuários</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Usuário</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_prod.php">
                    <i class="bx bx-cart"></i>
                    <span class="link_name">Produtos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php?page=lista_prod.php">Produtos</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_disc.php">
                    <i class="bx bx-list-check"></i>
                    <span class="link_name">Disciplinas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php?page=lista_disc.php">Disciplinas</a></li>
                </ul>
                </li>

    <?php   } elseif($qtd_itens == 4) { ?>
        <div class="sidebar close">
            <div class="logo-details">
                <i class="bx bxl-c-plus-plus"></i>
                <span class="logo_name">SisLogin</span>
            </div>
            <ul class="nav-links">
                <li>
                <a href="dashboard.php">
                    <i class="bx bx-compass"></i>
                    <span class="link_name">Explorar</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php">Explorar</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_usu.php">
                    <i class="bx bx-user"></i>
                    <span class="link_name">Usuários</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Usuário</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_prod.php">
                    <i class="bx bx-cart"></i>
                    <span class="link_name">Produtos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php?page=lista_prod.php">Produtos</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_disc.php">
                    <i class="bx bx-list-check"></i>
                    <span class="link_name">Disciplinas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php?page=lista_disc.php">Disciplinas</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_func.php">
                    <i class="bx bx-briefcase"></i>
                    <span class="link_name">Funcionários</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php?page=lista_func.php">Funcionários</a></li>
                </ul>
                </li>
                
    <?php   } else { ?>
        <div class="sidebar close">
            <div class="logo-details">
                <i class="bx bxl-c-plus-plus"></i>
                <span class="logo_name">SisLogin</span>
            </div>
            <ul class="nav-links">
                <li>
                <a href="dashboard.php">
                    <i class="bx bx-compass"></i>
                    <span class="link_name">Explorar</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php">Explorar</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_usu.php">
                    <i class="bx bx-user"></i>
                    <span class="link_name">Usuários</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Usuário</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_prod.php">
                    <i class="bx bx-cart"></i>
                    <span class="link_name">Produtos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php?page=lista_prod.php">Produtos</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_disc.php">
                    <i class="bx bx-list-check"></i>
                    <span class="link_name">Disciplinas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php?page=lista_disc.php">Disciplinas</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_func.php">
                    <i class="bx bx-briefcase"></i>
                    <span class="link_name">Funcionários</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php?page=lista_func.php">Funcionários</a></li>
                </ul>
                </li>
                <li>
                <a href="dashboard.php?page=lista_alu.php">
                    <i class="bx bxs-graduation"></i>
                    <span class="link_name">Alunos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php?page=lista_alu.php">Alunos</a></li>
                </ul>
                </li>
    <?php } ?>
    <li>
        <div class="profile-details">
            <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
            </div>
            <div class="name-job">
            <div class="profile_name"><?=$_SESSION['UsuarioNome']?></div>
            <div class="job">Tabelas: <?=$qtd_itens?></div>
        </div>
        <a href="logout.php" class="logout"><i class="bx bx-log-out"></i></a>
        </div>
    </ul>
    </li> 
    </div>
    <?php } view_itens();?>
    <section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Menu</span>
    </div>
    <div class="container">
        <div class="row"><?php require_once "base/avisos.php"; ?></div>
        <div class="row">
            <?php require_once "base/chPages.php";?>
        </div>
    </div>
    </section>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
        });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>