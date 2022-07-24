<?php include 'common/_settings.php'; ?>
<head>

</head>
<style>
    .categories{
        width: 280px;
        height: 290px;
        float:left;
    }
    .imag{
        height: 150px;
        width: 280px;
    }
    
    .imag:hover {filter: grayscale(80%);}
    
    .titulo2{
        background-image: url("images/bg-home.jpg");
        width: 1365px;
        height: 430px;
        overflow: auto;
        text-align:center;
        justify-content:space-around;
    }
    .text2{
        width: 400px;       
        height: 300px;
        float:left;
        margin: 0 auto;
        color: white;
        
    }
    .text3{
        width: 400px;       
        height: 300px;
        float:left;
        margin: 0 auto;
        color: white;
        
    }
    .productos{
        width: 1365px;
        height: 320px;
        overflow: auto;
    }
    .prod{
        width: 300px;
        height: 350px;
        float:left;
        text-align:center;
    }
    .logo{
        padding: 10px; 
        margin: 10px; 
        border: 2px solid black; 
        background-color: black;
        float: right; 
        width: 130px;
        height: 70px;
    }
    .categoriasd{
        width: 1365px;
        height: 300px;
        overflow: auto;
        color: white;
    }
    .categoria1{
        height: 300px;
        width: 250px;
        color: white;
        display: flex;
        float:left;
        position: relative;
        display: inline-block;
        text-align: center;
    }

    .imgcd{
        height: 300px;
        float:left;
    }
    .textcd{
        color: white;
        position: absolute;
        top: 260px;
        left: 10px;
    }
    .contacto{
        width: 1365px;
        height: 300px;
        overflow: auto;
    }
    .formulario{
        color:blue;
    }
</style>
<main>
    </br></br>
    <div class ="categories">
        <img src="images/logo-icon.png" alt="Alt image">
        </br><b>Productos</b></br>
        <b>Destacados</b>
    </div>
        <?php
            foreach($first_section_pages as $key => $value){
                echo ('<div class ="categories">');
                echo('<img class = "imag" src='.$first_section_pages[$key]["image"].'></br></br>');
                echo($first_section_pages[$key]["title"].'</br></br>');
                echo($first_section_pages[$key]["description"].'</br>');
                echo ('</div>');
            }
        ?>
    
    <div class="titulo2">
        <div class="text2">
            <h2>Titulo h2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse metus sapien, commodo non bibendum ut, venenatis at dolor. Donec vitae velit hendrerit.</p>
        </div>
        <div class="text3">
            <img class="logo" src="images/2-logos/logo_1.png">
            <img class="logo" src="images/2-logos/logo_2.png">
            <img class="logo" src="images/2-logos/logo_3.png">
            <img class="logo" src="images/2-logos/logo_4.png"></br>
            <img class="logo" src="images/2-logos/logo_5.png">
            <img class="logo" src="images/2-logos/logo_6.png"></br>
            <img class="logo" src="images/2-logos/logo_7.png">
            <img class="logo" src="images/2-logos/logo_8.png"></br>
        </div>
    </div>
    <div class="productos">
        
        </br><b>PRODUCTOS MÁS VENDIDOS</b></br></br>
        <?php
            foreach($third_section_pages as $key => $section){
                    echo ('<div class ="prod">');
                    echo('<img class = "imag" src='.$third_section_pages[$key]["image"].'></br>');
                    echo($third_section_pages[$key]["title"].'</br></br>');
                    echo($third_section_pages[$key]["description"].'</br>');
                    echo ('</div>');
            }
        ?>
    </div></br>

    <div class="categoriasd">
        <?php
            foreach($fourth_section_pages as $key => $section){
                echo ('<div class ="categoria1">');
                echo('<img class = "imgcd" src='.$fourth_section_pages[$key]["image"].'></br>');
                echo('<p class="textcd">'.$fourth_section_pages[$key]["title"].'</br></br>');
                echo ('</div>');
            }
        ?></br>
        
    </div> 

    <div class = "contacto">
        <div class ="datos">
            </br><b>iEstrategic</b>
            <p>Agencia de Marketing digital</p>
            <?php
                foreach($_contact_section as $text => $resul){
                    echo($resul.'</br>');
                }
            ?></br>
            <a style="color:blue;" href="form.php">Fromulario</a>
        </div>
        
    </div>
</main>