<style>

    .menu{
        background-color:black;
        color: white;
        width: 1365px;
        height: 260px;

    }
    .menufooter{
        background-color:black;
        color: white;
        width: 200px;
        height: 130px;
        float:left;
    }

    .logo1{
        width: 1365px;
        text-align:center;
        background-color:black;
    }
    .navmenu{
        width: 1365px;
        text-align:center;
        background-color:black;
        color:white;
    }
    .total{
        width: 1365px;
        background-color:black;
    }
    
</style>

    <div class="total">
        </br>
        <div class ="menu">
            <div class ="menufooter">
            
                    <?php
                        echo($footer_1_menu["/1"].'</br>');
                        echo($footer_1_menu["/2"].'</br>');
                        echo($footer_1_menu["/3"].'</br>');
                        echo($footer_1_menu["/4"].'</br>');
                        echo($footer_1_menu["/5"].'</br>');
                        echo($footer_1_menu["/6"].'</br>');      
                    ?>
            </div>
            <div class ="menufooter">
                    <?php
                        echo($footer_1_menu["/1"].'</br>');
                        echo($footer_1_menu["/2"].'</br>');
                        echo($footer_1_menu["/3"].'</br>');
                        echo($footer_1_menu["/4"].'</br>');
                        
                    ?>
            </div>
            <div class ="menufooter">
                    <?php
                        echo($footer_1_menu["/1"].'</br>');
                        echo($footer_1_menu["/2"].'</br>');
                        echo($footer_1_menu["/3"].'</br>');
                        echo($footer_1_menu["/4"].'</br>');
                        echo($footer_1_menu["/5"].'</br>');
                    ?>
            </div>
            <div class ="menufooter">
                    <?php
                        echo($footer_1_menu["/1"].'</br>');
                        echo($footer_1_menu["/2"].'</br>');
                        echo($footer_1_menu["/3"].'</br>');
                    ?>
            </div>
            <div class ="menufooter">
                    <?php
                        echo($footer_1_menu["/1"].'</br>');
                    ?>
            </div>
            <div class ="menufooter">
                    <?php
                        echo($footer_1_menu["/1"].'</br>');
                        echo($footer_1_menu["/2"].'</br>');
                    ?>
            </div>
            <div class ="menufooter">
                    <?php
                        echo($footer_1_menu["/1"].'</br>'); 
                    ?>
            </div>
        </div>
        
    </div>
    <div class="logo1">
    <img height="30px" width="160px" src="images/logo.png">
    </div>
    <div class ="navmenu">

            </br></br></br>
            <?php
                echo($footer_nav_menu["/empresa"].' | ');
                echo($footer_nav_menu["/terminos"].' | ');
                echo($footer_nav_menu["/devoluciones"].' | ');
                echo($footer_nav_menu["/contacto"].' | ');
                echo($footer_nav_menu["/terminos"]);
            ?>
    </div>
    <div class ="navmenu">
    </br>
    <?php
        echo($footer_disclaimer_menu["/aviso-legal"].' | ');
        echo($footer_disclaimer_menu["/privacidad"].' | ');
        echo($footer_disclaimer_menu["/cookies"]);
    ?>
    </br></br></br>
    </div>
