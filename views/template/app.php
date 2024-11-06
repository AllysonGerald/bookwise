<!DOCTYPE html>
<!-- <html lang="pt-br"> -->
<html lang="en">
    <head>
        <title>Bookwise</title>
        <!-- ==== Meta ==== -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta content="index, follow" name="robots">

        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- ==== Favicons ==== -->
        <link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
        <link href="" type="" rel="apple-touch-icon">

        <!-- ==== Google Fonts ==== -->
        <link href="" rel="stylesheet">

        <!-- ==== Vendor CSS Files ==== -->
        <link href="" rel="stylesheet">
        <link href="" rel="stylesheet">
        <link href="" rel="stylesheet">

        <!-- ==== Template CSS File ==== -->
        <link href="style.css" rel="stylesheet" type="text/css">

        <!-- ==== Vendor JS Files ==== -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-stone-950 text-stone-200">
        <header class="bg-stone-800 border-b-stone-600 border-b-2">
            <div class="flex py-4 mx-auto max-w-screen-lg items-center justify-between">
                <a href="/" class="text-2xl font-bold tracking-wide">Bookwise</a>
                <nav class="flex-1">
                    <ul class="flex justify-center items-center space-x-4 font-bold">
                        <li><a href="/" class="text-lime-500">Explorar</a></li>
                        <li><a href="/my-books" class="hover:underline">Meus Livros</a></li>
                    </ul>
                </nav>
                <div>
                    <a href="/login.php" class="hover:underline">Fazer Login</a>
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-screen-lg space-y-6 mt-6">
            <?php require "views/{$view}.view.php"; ?>
        </main>
        <footer></footer>
    </body>
</html>