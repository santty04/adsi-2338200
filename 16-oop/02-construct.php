<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Construct</title>
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
                Method Construct
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
                    class PlayList {
                        // Attributes
                        private $name;
                        private $artist = Array();
                        private $album  = Array();
                        private $image  = Array();
                        private $year   = Array();

                        // Methods
                        public function __construct($name) {
                            $this->name = $name;
                        }
                        public function setPlayList($artist, $album, $image, $year) {
                            $this->artist[] = $artist;
                            $this->album[] = $album;
                            $this->image[] = $image;
                            $this->year[] = $year;
                        }
                        public function getPlayList() {
                            echo '<h3 class="text-center mb-4 text-xl"> Play List: '.$this->name.' <h3/>';
                            for ($i = 0; $i < count($this->artist); $i++) { 
                                echo '<ul class="mb-4 flex flex-col justify-center rounded-xl ring-1 ring-white/25 p-4">';
                                echo '<li> <strong> Artist: <strong/> ' .$this->artist[$i]. ' </li>';
                                echo '<li> <strong> Album: <strong/> ' .$this->album[$i]. ' </li>';
                                echo '<li> <strong> Image: <strong/> <img src="' .$this->image[$i]. '" width="80px"> </li>';
                                echo '<li> <strong> Year: <strong/> ' .$this->year[$i]. ' </li>';
                                echo '</ul>';
                            }
                        }
                    }
                    $pl = new PlayList('My Youth ');
                    $pl->setPlayList('Mora', 'Microdosis', 'https://tinyurl.com/5n7p4ew9', 2022);
                    $pl->setPlayList('Bad Bunny', 'Un verano sin ti', 'https://tinyurl.com/4fztd5ea', 2022);
                    $pl->setPlayList('Feid', 'Inter Shibuya', 'https://tinyurl.com/2mhmyyh7', 2021);
                    $pl->getPlayList();
                ?>
                    
            </section>
            
        </main>

</body>
</html>