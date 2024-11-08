<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Thuca's frango e bar</title>
    <link rel="icon" href="/app/assets/images/logo thucas.jpg">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>

<body>

    <h3>Bem vindo a thuca's frango & Bar</h3>

    <form action="/login/validarlogin.php" method="post" id="f">

        <input type="text" name="login" placeholder="Login" /> <br /><br />

        <input type="password" name="senha" placeholder="Senha" /> <br /><br />

        <button type="submit" class="btn btn-succes">Enviar</button>
    </form>

    <?php
    if (!empty($_GET["msg"])) {
        $msg = $_GET["msg"];
        echo $msg;
    }
    ?>

</body>

</html>