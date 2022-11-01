<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Spaces</title>
    <script src="../js/tailwind-3.2.1.js"></script>
</head>
<body class="bg-gradient-to-t
            from-sky-900
            to-sky-500
            min-h-screen">
    
        <main class="m-5   
                    mx-auto
                    max-w-lg
                    p-5 
                    border-sky-900 
                    border-2 
                    bg-white/5 
                    rounded-xl">
            <h1 class="m-5
                        text-center
                        text-4xl 
                        text-white 
                        text-opacity-80
                        font-bold">
                Name Spaces
                <a href="../index.php" class="
                                            float-left 
                                            transition
                                            hover:text-sky-800
                                            hover:-translate-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
                </a>
            </h1>
            
            <section class="bg-black/10 
                            text-white
                            text-opacity-70
                            p-5
                            min-h-[400px] 
                            rounded-xl">
                    
                <ul class="p-2 flex flex-col gap-4">
                    <?php 
                        include 'electric/Pokemon.php';
                        include 'fire/Pokemon.php';
                        include 'water/Pokemon.php';

                        use \electric\Pokemon as Pke;
                        use \fire\Pokemon as Pkf;
                        use \water\Pokemon as Pkw;

                        $pk = new Pke('Pikachu', 'Yellow');
                        echo $pk->getInfoPokemon();

                        $pk = new Pkf('Charmander', 'Orange');
                        echo $pk->getInfoPokemon();

                        $pk = new Pkw('Squirtle', 'Aqua');
                        echo $pk->getInfoPokemon();
                    ?>
                </ul>
                
            </section>
            
        </main>

</body>
</html>