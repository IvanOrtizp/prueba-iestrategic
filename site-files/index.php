<html class="no-js" lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <style>
        .titulo{
            background-image: url("images/bg-home.jpg");
            width: 1365px;
            height: 450px;
            display: block; 
            position: relative;
        }

        .titulo:before{
            content:'';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0,0,0,0.6);
        }

        .text{
            margin: 0 auto;
            width: 500px;
            color: white;
            position: absolute;
            top: 100px;
            left: 70px;
        }
        body{
            margin:0;
            padding:0;
        }
    </style>
    <!-- Prueba iEstrategic Ivan Ortiz -->
    <body>
        <div class="web">
            <div class="titulo">
                <?php include 'header.php'; ?>
                
                <div class="text">
                    <h1>Título H1</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse metus sapien, commodo non bibendum ut, venenatis at dolor. Donec vitae velit hendrerit, consectetur diam quis, bibendum lacus. Mauris vitae convallis tellus. Praesent condimentum ac nisi ac mollis. Quisque tincidunt vestibulum leo, non tempor nulla porttitor non. Maecenas molestie eros vitae tortor tempus blandit. Aliquam justo urna, maximus sed est non, rhoncus molestie sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris ut erat sit amet ante sagittis lobortis. Praesent ornare lacinia est sed rhoncus. Proin ullamcorper, justo et varius scelerisque, est elit mattis sapien, eget suscipit ex quam at diam. Sed fringilla massa magna.</p>
                </div>
            </div>
            <?php include 'content-home.php'; ?>
           
            <?php include 'footer.php'; ?>
        </div>
    </body>

</html>