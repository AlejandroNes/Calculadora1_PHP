<?php
$resultado = 0;
$errores = '';
if (isset($_POST['operacion'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if (!empty($num1) && !empty($num2)) {

        switch ($operacion) {
            case '+':
                $resultado = "suma: " . ($num1 + $num2);
                break;
            case '-':
                $resultado = "resta: " . ($num1 - $num2);
                break;
            case '*':
                $resultado = "multiplicación: " . ($num1 * $num2);
                break;
            case '/':
                $resultado =  $num1 / $num2;
                $resultado = "división: " . (round($resultado, 2));
                break;
            default:
                $resultado = 0;
                break;
        }
    } else {
        $errores = 'Completa los campos<br>';
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<style>
    body {
        background-color: #34495e;
    }

    .contenido {
        background-color: #2c3e50;
    }

    footer {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

</style>

<body>

    <h1 class="text-center text-info mt-4">PHP</h1>
    <hr class="bg-info mb-3">
    <div class="container">
        <div class="row">
            <div class="contenido col-8 offset-2 rounded mt-5 border border-info">
                <h3 class="text-center text-info m-4">Calculadora</h3>

                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="d-flex justify-content-around mb-4">
                        <input type="number" placeholder="ingrese un numero" class="form-control w-25" name="num1" value="<?php echo isset($_POST['num1']) ? $num1 : ''; ?>">

                        <input type="number" placeholder="ingrese un numero" class="form-control w-25" name="num2" value="<?php echo isset($_POST['num2']) ? $num2 : ''; ?>">
                    </div>

                    <div class="d-flex justify-content-around my-3">
                        <button type="submit" class="btn btn-info" name="operacion" value="+">SUMA</button>
                        <button type="submit" class="btn btn-danger" name="operacion" value="-">RESTA</button>
                        <button type="submit" class="btn btn-success" name="operacion" value="*">PRODUCTO</button>
                        <button type="submit" class="btn btn-warning" name="operacion" value="/">DIVISIÓN</button>
                    </div>
                </form>

                <div>
                    <?php if (!empty($errores)) : ?>
                        <h4 class="text-center text-danger p-2 my-3 border border-danger "><?php echo $errores; ?></h4>

                    <?php elseif (!empty($resultado)) : ?>
                        <h4 class="text-center text-info p-2 my-3 border border-info "><?php echo $resultado; ?></h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <h5 class="text-center text-secondary font-weight-light">AlejandroNes &copy todos los derechos reservados - 2021</h5>
    </footer>
</body>

</html>