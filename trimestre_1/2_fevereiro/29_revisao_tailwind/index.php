<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>TailwindCSS</title>
</head>

<body class="h-[-webkit-fill-available] h-[-moz-available] dark:bg-neutral-900 dark:text-zinc-50">

    <div class="flex flex-col h-screen w-6/12 mx-auto">
        <h1 class="font-bold text-4xl py-10 ">Exercício com TailwindCSS</h1>

        <fieldset class="flex flex-row gap-x-8 w-6/12">
            <aside class="bg-zinc-100 border border-gray-300 flex flex-col gap-y-8 w-72 py-10 px-10 dark:bg-neutral-800
             dark:border-neutral-700">
                <p>Preencha o formulário ao lado com suas informações.</p>
                <p>Seus dados não serão comartilhados com terceiros.</p>
            </aside>

            <form action="" class="flex flex-col grow  gap-y-2"
                method="POST">
                <div class="flex gap-x-6 gap-y-8">
                    <div class="flex flex-col justify-center grow">
                        <label for="nome" class="">Nome</label>
                        <input type="text" id="nome" name="nome" class="rounded-md px-2 py-1 border border-gray-300 outline-none focus:ring focus:ring-blue-500 grow 
                            dark:bg-neutral-800 dark:border-none">
                    </div>

                    <div class="flex flex-col justify-center grow">
                        <label for="sobrenome" class="">Sobrenome</label>
                        <input type="text" id="sobrenome" name="sobrenome" class="rounded-md px-2 py-1 border border-gray-300 outline-none focus:ring focus:ring-blue-500 grow 
                            dark:bg-neutral-800 dark:border-none">
                    </div>
                </div>

                <label for="usuario" class="">Usuário</label>
                <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário"
                    class="rounded-md px-2 py-1 border border-gray-300 outline-none focus:ring focus:ring-blue-500  
                grow dark:bg-neutral-800 dark:border-none placeholder:text-neutral-600 pl-4 dark:placeholder:text-neutral-400">

                <label for="senha" class="">Senha</label>
                <input type="text" id="senha" name="senha" placeholder="Digite sua senha"
                    class="rounded-md px-2 py-1 border border-gray-300 outline-none focus:ring focus:ring-blue-500 
                grow dark:bg-neutral-800 dark:border-none placeholder:text-neutral-600 pl-4 dark:placeholder:text-neutral-400">

                <button type="submit" class="bg-blue-600 rounded-md px-3 py-2 text-white hover:bg-blue-700 focus:ring focus:ring-blue-300
                    font-semibold">
                    Cadastrar
                </button>
            </form>
        </fieldset>
    </div>

</body>

</html>