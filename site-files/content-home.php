<?php include 'common/_settings.php'; ?>
<head>

</head>
<style>
    .prodscateg{
        width: 1365px;
        height: 650px;
        overflow: hidden;
        text-align:center;
    }
    .categories{
        width: 330px;
        height: 300px;
        float:left;
    }
    .imag{
        height: 170px;
        width: 330px;
    }
    
    .imag:hover {filter: grayscale(80%);}
    
    .titulo2{
        background-image: url("images/bg-home.jpg");
        
        width: 1365px;
        height: 430px;
        overflow: hidden;
        text-align:center;
        justify-content:space-around;
    }
    .text2{
        width: 500px;       
        height: 300px;
        display:inline-table;
        margin: 0 auto;
        color: white;
        position: relative;
    }
    .text2cont{
        position: absolute;
        top: 50%;
        left: 50%;
        opacity: .5;
        background-color: rgb(0, 0, 0);
        transform: translate(-50%, -50%);
    }
    .text3{
        width: 400px;       
        height: 300px;
        display:inline-table;
        margin: 0 auto;
        color: white;
        
    }
    .productos{
        width: 1365px;
        height: 380px;
        overflow: hidden;
        text-align:center;
    }
    .prod{
        width: 300px;
        height: 360px;
        display:inline-table;
        margin: 10px;
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
        height: 400px;
        overflow: hidden;
        color: white;
    }
    .categoria1{
        height: 400px;
        width: 270px;
        color: white;
        display: flex;
        float:left;
        position: relative;
        text-align: center;
    }

    .imgcd{
        float:left;
    }
    .textcd{
        color: white;
        position: absolute;
        top: 340px;
        left: 10px;
    }
    .contacto{
        
        width: 1365px;
        height: 300px;
        overflow: auto;
    }
    .datos{
        position: absolute;
        left: 40px;
    }
    .formulario{
        color:blue;
    }
</style>
<main>
    </br></br>
    <div class="prodscateg">
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
    </div>
    <div class="titulo2">
        <div class="text2">
            <div class="text2cont">
                <h2>Titulo h2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse metus sapien, commodo non bibendum ut, venenatis at dolor. Donec vitae velit hendrerit. Nulla at ipsum eget nulla fringilla feugiat sed at odio. Donec lacinia ut purus sed convallis. Etiam lacinia dui orci, sit amet vehicula mi laoreet nec.</p>
            </div>
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
                echo('<div class="contenidoproductos">');
                foreach($third_section_pages as $key => $section){
                        echo ('<div class ="prod">');
                        echo('<img class = "imag" src='.$third_section_pages[$key]["image"].'></br>');
                        echo($third_section_pages[$key]["title"].'</br></br>');
                        echo($third_section_pages[$key]["description"].'</br>');
                        echo ('</div>');
                }
                echo ('</div>');
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