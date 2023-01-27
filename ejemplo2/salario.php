<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="css/salario.css">
    <link rel="stylesheet" href="css/links.css">
    <script src="js/modernizr.custom.lis.js"></script>
    <title>Calcular Salario</title>
</head>
<body>
    <header id="inset">
        <h1>Detalle del salario</h1>
    </header>
    <section>
        <article>
            <?php
            if(isset($_POST['enviar'])){
                $empleado = isset($_POST['empleado']) ? $_POST['empleado'] : "";
                $sueldobase = isset($_POST['sueldobase']) ? $_POST['sueldobase'] : "";
                if(isset($_POST['hextra'])){
                    $horasextras = isset($_POST['numhorasex']) ? $_POST['numhorasex'] : "0";
                    $pagohextra = isset($_POST['pagohextra']) ? $_POST['pagohextra'] : "0";
                    $sueldohextras = $horasextras * $pagohextra;
                }
                else{
                    $horasextra = 0;
                    $sueldohextras = 0;
                }
                $sueldoneto = $sueldobase + $sueldohextras;
                echo "<div>\n<h3>Boleta de pago<\h3>\n";
                echo "<table>\n";
                echo "\t<tr>/n/t/t<th colaspan=\"2\">\n\t\t\tDetalle del pago\n\t\t</th>\n\t\t</tr>\n";
                echo "\t";
            }
            ?>
        </article>
    </section>
</body>
</html>