
<?php include 'common/_settings.php'; ?>
<?php include 'common/_icons.php'; ?>

<header>
    <style>
        header {
            width: 100%;
            z-index: 100;
        }
        nav {
            float: left;
        }
        nav ul {
            list-style: none;
            overflow: hidden; 
        }
        nav ul li {
            float: left;
            font-family: Arial, Helvetica, sans-serif;;
            font-size: 15px;
        }
        nav ul li a {
            display: block; 
            padding: 20px;
            color: #fff;
            text-decoration: none;
        }
        nav ul li:hover {
            background: black;
        }
        .menunav{
            position: absolute;
            left: 180px;
        }
        .logo2 {
            position: absolute;
            left: 20px;
            width: 150px;
            top: 15px;
        }
        .head{
            color: white;
        }
        .icons{
            position: absolute;
            left: 1230px;
            top: 10px;
        }
        
        
    </style>
    <div class="head">
        <nav>
            <ul>
                <?php
                    echo '<li><img class = "logo2" src="images/logo.png"></li>';
                    echo '<div class="menunav">';
                        foreach($site_menu as $text => $resul){
                            echo '<li><a href="">'. $resul .'</a></li>';
                        }
                    echo '</div>';
                ?>
                
            </ul>
        </nav>
        <div class="icons">
                <?php
                    echo $_iconSearch.' | ';
                    echo $_iconCart.' | ';
                    echo $_svg_user;
                ?>
        </div>    
    </div>
</header>