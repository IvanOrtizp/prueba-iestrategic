<?php include 'common/_settings.php'; ?>
<head>

</head>
<style>
    .categories{
        width: 280px;
        height: 280px;
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
        height: 300px;
        overflow: auto;
    }
    .text2{
        width: 800px;       
        height: 800px;
        margin: 0 auto;
        color: white;
    }
    .productos{
        width: 1365px;
        height: 300px;
        overflow: auto;
    }
    .prod{
        width: 300px;
        height: 350px;
        float:left;
    }
    .logo{
        padding: 10px; 
        margin: 10px; 
        border: 2px solid black; 
        background-color: black;
        float: right; 
        width: 150px;
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
    .categoria2{
        height: 300px;
        width: 250px;
        color: white;
        display: flex;
        float:left;
        position: relative;
        display: inline-block;
        text-align: center;
    }
    .categoria3{
        height: 300px;
        width: 250px;
        color: white;
        display: flex;
        float:left;
        position: relative;
        display: inline-block;
        text-align: center;
    }
    .categoria4{
        height: 300px;
        width: 250px;
        color: white;
        display: flex;
        float:left;
        position: relative;
        display: inline-block;
        text-align: center;
    }
    .categoria5{
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
        <h2 style="size:14px;">Productos</h2>
        <h1>Destacados</h2>
        
    </div>
    <div class ="categories">
        <?php
            echo('<img class = "imag" src='.$first_section_pages["/1"]["image"].'></br>');
            echo($first_section_pages["/1"]["title"].'</br></br>');
            echo($first_section_pages["/1"]["description"].'</br>');
            
        ?>
    </div>
    <div class ="categories">
        <?php
            echo('<img class = "imag" src='.$first_section_pages["/2"]["image"].'></br>');
            echo($first_section_pages["/2"]["title"].'</br></br>');
            echo($first_section_pages["/2"]["description"].'</br>');
        ?>
    </div>
    <div class ="categories">
        <?php
            echo('<img class = "imag" src='.$first_section_pages["/3"]["image"].'></br>');
            echo($first_section_pages["/3"]["title"].'</br></br>');
            echo($first_section_pages["/3"]["description"].'</br>');
        ?>
    </div>
    <div class ="categories">
        <?php
            echo('<img class = "imag" src='.$first_section_pages["/4"]["image"].'></br>');
            echo($first_section_pages["/4"]["title"].'</br></br>');
            echo($first_section_pages["/4"]["description"].'</br>');
        ?>
    </div>
    <div class ="categories">
        <?php
            echo('<img class = "imag" src='.$first_section_pages["/5"]["image"].'></br>');
            echo($first_section_pages["/5"]["title"].'</br></br>');
            echo($first_section_pages["/5"]["description"].'</br>');
        ?>
    </div>
    <div class ="categories">
        <?php
            echo('<img class = "imag" src='.$first_section_pages["/6"]["image"].'></br>');
            echo($first_section_pages["/6"]["title"].'</br></br>');
            echo($first_section_pages["/6"]["description"].'</br>');
        ?>
    </div>
    <div class ="categories">
        <?php
            echo('<img class = "imag" src='.$first_section_pages["/7"]["image"].'></br>');
            echo($first_section_pages["/7"]["title"].'</br></br>');
            echo($first_section_pages["/7"]["description"].'</br>');
        ?>
    </div></br>
    <div class="titulo2">
        <div class="text2">
        <h2>Titulo h2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse metus sapien, commodo non bibendum ut, venenatis at dolor. Donec vitae velit hendrerit.</p>
        <img class="logo" src="images/2-logos/logo_1.png">
        <img class="logo" src="images/2-logos/logo_2.png"></br>
        <img class="logo" src="images/2-logos/logo_3.png">
        <img class="logo" src="images/2-logos/logo_4.png"></br>
        <img class="logo" src="images/2-logos/logo_5.png">
        <img class="logo" src="images/2-logos/logo_6.png"></br>
        <img class="logo" src="images/2-logos/logo_7.png">
        <img class="logo" src="images/2-logos/logo_8.png"></br>
        </div>
    </div>
    <div class="productos">
        
        <h2>PRODUCTOS MÁS VENDIDOS</h2></br>
        <div class="prod">
            <?php
                echo('<img class = "imag" src='.$third_section_pages["/1"]["image"].'></br>');
                echo($third_section_pages["/1"]["title"].'</br>');
                echo($third_section_pages["/1"]["description"].'</br>');
            ?>
        </div>
        <div class="prod">
            <?php
                echo('<img class = "imag" src='.$third_section_pages["/2"]["image"].'></br>');
                echo($third_section_pages["/2"]["title"].'</br>');
                echo($third_section_pages["/2"]["description"].'</br>');
            ?>
        </div>
        <div class="prod">
            <?php
                echo('<img class = "imag" src='.$third_section_pages["/3"]["image"].'></br>');
                echo($third_section_pages["/3"]["title"].'</br>');
                echo($third_section_pages["/3"]["description"].'</br>');
            ?>
        </div>
    </div>

    <div class="categoriasd">
        <div class ="categoria1">
            <?php
                echo('<img class = "imgcd" src='.$fourth_section_pages["/1"]["image"].'></br>');
                echo('<p class="textcd">'.$fourth_section_pages["/1"]["title"].'</p></br>');                
            ?>
        </div>
        <div class ="categoria2">
            <?php
                echo('<img class = "imgcd" src='.$fourth_section_pages["/2"]["image"].'></br>');
                echo('<p class="textcd">'.$fourth_section_pages["/2"]["title"].'</p></br>');     
            ?>
        </div>
        <div class ="categoria3">
            <?php
                echo('<img class = "imgcd" src='.$fourth_section_pages["/3"]["image"].'></br>');
                echo('<p class="textcd">'.$fourth_section_pages["/3"]["title"].'</p></br>');     
            ?>
        </div>
        <div class ="categoria4">
            <?php
                echo('<img class = "imgcd" src='.$fourth_section_pages["/4"]["image"].'></br>');
                echo('<p class="textcd">'.$fourth_section_pages["/4"]["title"].'</p></br>');     
            ?>
        </div>
        <div class ="categoria5">
            <?php
                echo('<img class = "imgcd" src='.$fourth_section_pages["/5"]["image"].'></br>');
                echo('<p class="textcd">'.$fourth_section_pages["/5"]["title"].'</p></br>');       
            ?>
        </div>
    </div> 

    <div class = "contacto">
        <div class ="datos">
            </br><p>iestrategic</p>
            <p>Agencia de Marketing digital</p>
            <?php
                echo($_contact_section["address"].'</br>'); 
                echo($_contact_section["postal_code"].'</br>'); 
                echo($_contact_section["address_city"].'</br>'); 
                echo($_contact_section["phone"].'</br>'); 
                echo($_contact_section["email"].'</br></br>'); 
                echo($_contact_section["form_text"].'</br>'); 
                
            ?></br>
            <a style="color:blue;" href="form.php">Fromulario</a>
        </div>
        
    </div>
</main>