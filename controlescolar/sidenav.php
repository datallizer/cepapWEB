<link rel="stylesheet" href="../css/sidenav.css">
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bi bi-list' id="header-toggle"></i> </div>
        
        <a href="../logout.php" class="btn btn-sm btn-danger float-end">Cerrar Sesión</a>
        
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a style="text-decoration: none;" href="dashboard.php" class="nav_logo"> 
                    <i class='bi bi-house-door nav_logo-icon'></i> 
                    <span class="nav_logo-name">CEPAP</span> 
                </a>
                <div class="nav_list"> 
                    <a href="dashboard.php" class="nav_link"> 
                        <i class='bi bi-square-half nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="usuarios.php" class="nav_link"> 
                        <i class='bi bi-person nav_icon'></i> <span class="nav_name">Usuarios</span> 
                    </a> 
                    <a href="monitoradmisiones.php" class="nav_link"> 
                        <i class='bi bi-person-lines-fill nav_icon'></i> 
                        <span class="nav_name">Admisiones</span> 
                    </a>
                <a href="monitorinformacion.php" class="nav_link"> 
                    <i class='bi bi-file-arrow-up nav_icon'></i> 
                    <span class="nav_name">Informacion<br>personal</span> 
                </a> 
                <a href="monitornoticias.php" class="nav_link"> 
                    <i class='bi bi-newspaper nav_icon'></i> <span class="nav_name">Noticias</span> 
                </a> 
                <a href="monitorarticulos.php" class="nav_link"> 
                    <i class='bi bi-file-richtext nav_icon'></i> <span class="nav_name">Artículos</span> 
                </a> 
                <!-- <a href="monitorconvocatorias.php" class="nav_link"> 
                    <i class='bi bi-file-ruled nav_icon'></i> <span class="nav_name">Convocatorias</span> 
                </a>  -->
            </div>
            </div> 
            
        </nav>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/sidenav.js"></script>