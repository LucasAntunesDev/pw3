<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bem-vindo, <?php echo $_POST['nome'] . ' '; echo $_POST['sobrenome'];?></title>
</head>

<body class="h-[-webkit-fill-available] h-[-moz-available] dark:bg-neutral-900">

    <div class="flex flex-col h-screen w-6/12 mx-auto">
        <h1 class="font-bold text-4xl py-10 dark:text-zinc-50">Bem-vindo,  
            <?php 
                echo $_POST['nome'] . ' ';
                echo $_POST['sobrenome'];
            ?>
        </h1>

    </div>

</body>

</html>