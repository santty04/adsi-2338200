<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaboration</title>
    <script src="public/js/tailwind-3.2.1.js"></script>
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
                Collaboration
                <a href="index.php" class="
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

                <?php 
                
                    class Evolve {
                        public function evolvePokemon($origin, $evolution) {
                            echo '<ul>';
                            echo '<li><b>Origin: </b>'.$origin.' ➡️ <b>Evolution</b> '.$evolution.'</li>';
                            echo '</ul>';

                        }
                    }

                    class Pokemon {
                        private $origin;
                        private $evolution;
                        private $collaboration;
                        
                        public function __construct($origin, $evolution) {
                            $this->origin    = $origin;
                            $this->evolution = $evolution;
                            // Collaboration
                            $this->collaboration = new Evolve;
                        }

                        public function nextLevel() {
                            $this->collaboration->evolvePokemon($this->origin, $this->evolution);
                        }
                    }

                    $pk1 = new Pokemon('Pichu', 'Pikachu');
                    $pk1->nextLevel();

                    $pk2 = new Pokemon('Pikachu', 'Raichu');
                    $pk2->nextLevel();

                    $pk3 = new Pokemon('Squirtle', 'Wartotle');
                    $pk3->nextLevel();

                    $pk4 = new Pokemon('Wartotle', 'Blastoise');
                    $pk4->nextLevel();

                    $pk5 = new Pokemon('Bulbasaur', 'Ivysaur');
                    $pk5->nextLevel();

                    $pk6 = new Pokemon('Ivysaur', 'Venusaur');
                    $pk6->nextLevel();

                ?>
                    
            </section>
            
        </main>

</body>
</html>