
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
        .logo2 {
            width: 150px;
        }
        .head{
            color: white;
        }
        
        
    </style>
    <div class="head">
        <nav>
            <ul>
                <?php
                    echo '<li><img class = "logo2" src="images/logo.png"></li>';
                    foreach($site_menu as $text => $resul){
                        echo '<li><a href="">'. $resul .'</a></li>';
                    }
                ?>    
            </ul>
        </nav>
    </div>
</header>