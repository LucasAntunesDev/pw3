<!DOCTYPE html>
<html lang="pt-BR">

<?php if (!isset($_POST['usuario']) || $_POST['usuario'] == null)
    header('location:index.php') ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Bem-vindo,
        <?php echo $_POST['nome'] . ' ';
        echo $_POST['sobrenome']; ?>
    </title>
</head>

<body class="h-[-webkit-fill-available] h-[-moz-available] dark:bg-neutral-900">

    <div class="flex flex-col h-screen w-6/12 mx-auto">
        <a href="index.php" class="pt-4 text-blue-500 hover:underline">Voltar ao início</a>
        <h1 class="font-bold text-4xl py-4dark:text-zinc-50">Bem-vindo,
            <?php
            echo $_POST['nome'] . ' ';
            echo $_POST['sobrenome'];
            ?>
        </h1>

    </div>

</body>

</html>