<html class="no-js" lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="html-reset.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <style>
        .titulo{
            background-image: url("images/bg-home.jpg");
            width: 1365px;
            height: 300px;
            margin: 0;
        }
        .text{
            margin: 0 auto;
            width: 500px;
            text-align: center;
            color: white;
            opacity: .5;
            background-color: rgb(0, 0, 0);
        }
    </style>
    <body>
        <div class="web">
            <div class="titulo">
                <?php include 'header.php'; ?>
                </br></br></br></br>
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