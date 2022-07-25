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
        height: 330px;
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
        display: block; 
        position: relative;
    }
    .titulo2:before{
        content:'';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0,0,0,0.6);
    }
    .text2{
        width: 650px;       
        height: 300px;
        display:inline-table;
        margin: 0 auto;
        color: white;
        position: relative;
    }
    .text2cont{
        position: absolute;
        top: 50%;
        text-align:left;
        left: 20%;
        transform: translate(-50%, -50%);
    }
    .text3{
        position: absolute;
        left: 50%;
        top: 20px;
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
        float: right; 
        width: 100px;
        height: 50px;
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
        height: 450px;
        overflow: auto;
    }
    .datos{
        position: absolute;
        left: 160px;
    }
    .formulario{
        color:blue;
    }
    body{
        font-family:Arial;
    }
    .form{
        position: absolute;
        left: 700px;
        font-family: family-name|generic-family|initial|inherit;
    }
    .form1{
        float:left;
        display:inline-table;
        margin: 0 auto;
    }
    .form2{
        float:left;
        display:inline-table;
        margin: 10;
    }

    .formtext{
        width: 520px;       
        height: 60px;
        left: 690px;
        position: relative;
    }

    form input, form textarea{
        margin-bottom: 15px;
        font-family: "Roboto", sans-serif;
        width: 100%;
        padding: 10px;
        box-sizing: border-box; 
        border: none; 
        color: #525c66; 
        font-size: 1em;
        resize: none; 
    }

    form button {
        position: absolute;
        left: 270px;
        top: 230px;
        display: block;
        background-color: black;
        padding: 10px 45px 10px 45px;
        border: 0;
        font-size: 1em; 
        color: 	white;
        font-family: "Roboto", sans-serif;
    }
    form button: hover{
        background-color: #046193;
    }
    textarea {  resize: none;}
</style>
<main>
    <body>
    </br></br>
    <div class="prodscateg">
        <div class ="categories">
            <img src="images/logo-icon.png" alt="Alt image">
            </br><p>PRODUCTOS </br><b>DESTACADOS</b></p>
            
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
                <h2>Titulo h2</h2></br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse metus sapien, commodo non bibendum ut, venenatis at dolor. Donec vitae velit hendrerit. Nulla at ipsum eget nulla fringilla feugiat sed at odio. Donec lacinia ut purus sed convallis. Etiam lacinia dui orci, sit amet vehicula mi laoreet nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse metus sapien.</p>
            </div>
        </div>
        <div class="text3">
            <img class="logo" src="images/2-logos/logo_1.png">
            <img class="logo" src="images/2-logos/logo_2.png">
            <img class="logo" src="images/2-logos/logo_3.png">
            <img class="logo" src="images/2-logos/logo_4.png">
            <img class="logo" src="images/2-logos/logo_5.png">
            <img class="logo" src="images/2-logos/logo_6.png">
            <img class="logo" src="images/2-logos/logo_7.png">
            <img class="logo" src="images/2-logos/logo_8.png">
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
                echo($_contact_section["address"].'</br>');
                echo($_contact_section["postal_code"].'</br>');
                echo($_contact_section["address_city"].'</br>');
                echo($_contact_section["phone"].'</br>');
                echo($_contact_section["email"].'</br>');
            ?>
        </div>
        </br>
        <?php
            echo('<div class="formtext">');
            echo($_contact_section["form_text"].'</br>');
            echo('</div>')
        ?></br>
        <form method="post" class="form" id="form">
            <div class="form1">
                <div>
                    <label for="nombre" class="form__label">NOMBRE</label></br>
                    <input style="background-color:EAEAEA" type="text" id="nombre" name="nombre">
                </div></br>
                <div>
                    <label for="apellidos" class="form__label">APELLIDOS</label></br>
                    <input style="background-color:EAEAEA" type="text" id="apellidos" name="apellidos">
                </div></br>
                <div>
                    <label for="comentarios" class="form__label">COMENTARIOS</label></br>
                    <textarea style="background-color:EAEAEA" type="text" id="comentarios" name="comentarios"></textarea>
                </div></br>
            </div>
            <div class="form2">
                <div>
                    <label for="email">EMAIL</label></br>
                    <input style="background-color:EAEAEA" type="email" id="email" name="email">
                </div></br>
                <div>
                    <label for="telefono" class="form__label">TELÉFONO</label></br>
                    <input style="background-color:EAEAEA" type="text" id="telefono" name="telefono">
                </div></br>
                <div>
                    <label for="terms">He leído y acepto el aviso legal</label></br>
                    <input style="background-color:EAEAEA" type="checkbox" name="terms" id="terms">
                </div>
            </div>
            
            </br></br></br>
            <button id="submitButton" disabled>Enviar</button>
            </form>
            <script src="script.js"></script>
    </div>
    </body>
</main>
