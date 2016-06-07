<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Primeira Página</title>
        <style>
            input {
                display: block;
            }
        </style>
    </head>
    <body>
        <form action="csrf.php"" method="POST">        
            <label for="name">Nome<input type="text" name="name" required></label>
            <label for="age">Idade<input type="text" name="age" required></label>
            <label for="email">Email<input type="email" name="email" required></label>
            <label for="opcao">Opcao<input type="checkbox" name="opcao" value="1234"></label>
            <input type="hidden" name="token" value="<?php echo md5('senha') ?>">
            
            <input type="submit">  
        </form>
    </body>
</html>