 <!DOCTYPE html>
 <html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home </a></li>
                <li><a href="/about">About </a></li>
                <li><a href="/portfolio">Portfolio </a></li>
                <li><a href="/contact">Contact </a></li>
            </ul>
        </nav>
        <h1>Home</h1>
        <p>Bienvenido: <?php echo $nombre ?? "Invitado" ?></p> <!-- la varibale "nombre" debe llamarse igual que como la enviamos en web.php-->
    </body>
 </html>