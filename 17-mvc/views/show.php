<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MVC - Consultar Usuario </title>
    <link rel="stylesheet" href="public/css/custom.css">
    <script src="public/js/tailwind-3.0.23.js"></script>
</head>
<body>
    <header class="text-black/80 flex gap-4 justify-center items-center pb-4 border-b-2">
        <h1 class="text-3xl font-bold"> Consultar Usuario</h1>
    </header>
<section>
        <a href="./" class="mt-8 p-2 flex justify-center items-center w-4/12 xl:w-2/12 gap-2 transition text-white/80 bg-green-600/60 rounded hover:scale-105 trainsition hover:bg-green-600/70">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
            Back to list
        </a>
        <table class="mt-6 w-[80%] mx-auto border-collapse">
            <?php 
                while($row = mysqli_fetch_array($data)) {
            ?>
            <tr class="bg-black/40 text-white/60 border-b-2 border-white/40">
                <th colspan="2" class="text-center mx-auto rounded-tl-md p-2 rounded-tr-md">
                    <img src="<?php echo $row['photo'] ?>" class="text-center rounded-full items-center justify-center" width="220px">
                </th>
            </tr>
            <tr class="bg-white/20 odd:bg-white/10">
                <th>Nombre Completo:</th>
                <td><?php echo $row['fullname'] ?></td>
            </tr>
            <tr class="bg-white/20 odd:bg-white/10">
                <th>Correo Electrónico:</th>
                <td><?php echo $row['email'] ?></td>
            </tr>
            <tr class="bg-white/20 odd:bg-white/10">
                <th>Rol:</th>
                <td><?php echo $row['role'] ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
			
</section>
</body>
</html>