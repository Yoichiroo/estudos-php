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
        .logout {
            width: 100px;
            color: white;
            margin: 0 2rem 0 0;
        }
    </style>
</head>
<body>
    <?php
            session_start();

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
                        $qtd_itens = 5;
                        break;
                        
                    case 3:
                        $qtd_itens = 10;
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
                <span class="logo_name">Siscrud</span>
            </div>
            <ul class="nav-links">
                <li>
                <a href="#">
                    <i class="bx bx-compass"></i>
                    <span class="link_name">Explorar</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explorar</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class="bx bx-history"></i>
                    <span class="link_name">Histórico</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Histórico</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">Configurações</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Configurações</a></li>
                </ul>
                </li>

    <?php   } elseif($qtd_itens == 5) { ?>
        <div class="sidebar close">
            <div class="logo-details">
                <i class="bx bxl-c-plus-plus"></i>
                <span class="logo_name">Siscrud</span>
            </div>
            <ul class="nav-links">
                <li>
                <a href="#">
                    <i class="bx bx-compass"></i>
                    <span class="link_name">Home</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explorar</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class="bx bx-history"></i>
                    <span class="link_name">Histórico</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Histórico</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">Configurações</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Configurações</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class='bx bx-list-check'></i>
                    <span class="link_name">Pagamentos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Pagamentos</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class='bx bxs-spreadsheet'></i>
                    <span class="link_name">Tarefas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Tarefas</a></li>
                </ul>
                </li>
            </ul>
    <?php   } else { ?>
        <div class="sidebar close">
            <div class="logo-details">
                <i class="bx bxl-c-plus-plus"></i>
                <span class="logo_name">Siscrud</span>
            </div>
            <ul class="nav-links">
                <li>
                <a href="#">
                    <i class="bx bx-compass"></i>
                    <span class="link_name">Home</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explorar</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class="bx bx-history"></i>
                    <span class="link_name">Histórico</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Histórico</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">Configurações</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Configurações</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class='bx bx-list-check'></i>
                    <span class="link_name">Pagamentos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Pagamentos</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class='bx bxs-spreadsheet'></i>
                    <span class="link_name">Tarefas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Tarefas</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class='bx bxs-shopping-bag'></i>
                    <span class="link_name">Produtos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Produtos</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class='bx bxs-capsule'></i>
                    <span class="link_name">Medicamentos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Medicamentos</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                <i class='bx bx-user'></i>
                    <span class="link_name">Usuários</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Usuários</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                    <i class='bx bx-dots-vertical-rounded'></i>
                    <span class="link_name">Ferramentas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Ferramentas</a></li>
                </ul>
                </li>
                <li>
                <a href="#">
                <i class='bx bxs-music' ></i>
                    <span class="link_name">Músicas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Músicas</a></li>
                </ul>
                </li>
            </ul>
    <?php } ?>
    <li>
        <div class="profile-details">
            <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
            </div>
            <div class="name-job">
            <div class="profile_name"><?=$_SESSION['UsuarioNome']?></div>
            <div class="job">Itens: <?=$qtd_itens?></div>
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
        <span class="text">Drop Down Sidebar</span>
    </div>
    <div class="container">
        <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
        </div>

        <div class="col d-flex justify-content-center">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
        </div>

        <div class="col d-flex justify-content-center">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
        </div>
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