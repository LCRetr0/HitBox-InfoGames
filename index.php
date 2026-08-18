<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HitBox | Seu Mundo de Games</title>
    <link rel="icon" href="Css\hit.png">
    <link rel="stylesheet" href="Css\style.css">

</head>

<body>
    <header>
        <h1 style="margin-left: 120px;margin-top: 30px;">HitBox</h1>
    <img src="Css\hit.png" style="margin-left: 10px; margin-top: -60px;" height="90" width="90" alt="Logo HitBox">
     
    <nav class="menu-superior">
    <ul>
      <li><a href="#">Nóticias</a></li>
      <li><a href="#">Games</a></li>
      <li><a href="#">E-Sports</a></li>
      <li><a href="#">Cultura Pop</a></li>
    </ul>
  </nav>

<button class="menu_lateral" id="btnSidebarToggle" type="button" title="Abrir Menu">
    <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
        <line x1="6" y1="8" x2="26" y2="8" />
        <line x1="6" y1="16" x2="26" y2="16" />
        <line x1="6" y1="24" x2="26" y2="24" />
    </svg>
</button>


    <aside class="containerlateral" id="sidebar">
        <div class="cabecalholateral">
            <img src="Css\hit.png" alt="HitBox" height="30">
            <button id="btnCloseSidebar" style="background:none; border:none; color:#fff; cursor:pointer; font-size:20px;">&times;</button>
        </div>
        <nav class="cabecalholateralprincipal">
            <ul class="sidebar-section home">
                <li><a href="#"><span>Início</span></a></li>
                <li><a href="#"><span>Playstation</span></a></li>
                <li><a href="#"><span>Xbox</span></a></li>
                <li><a href="#"><span>Switch</span></a></li>
                <li><a href="#"><span>Reviews</span></a></li>
                <li><a href="#"><span>Cinema & TV</span></a></li>
                <li><a href="#"><span>Anime</span></a></li>
                <li><a href="#"><span>Tech</span></a></li>
                <li><a href="#"><span>Descontos</span></a></li>
                <li><a href="#"><span>Vídeos</span></a></li>
            </ul>
        </nav>
    </aside>
 

<!-- O JavaScprit da página-->
<script>
        const btnToggle = document.getElementById('btnSidebarToggle');
        const btnClose = document.getElementById('btnCloseSidebar');
        const sidebar = document.getElementById('sidebar');

        btnToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        btnClose.addEventListener('click', () => {
            sidebar.classList.remove('active');
        });
    </script>
</body>
</body>