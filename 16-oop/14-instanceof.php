<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instance Of</title>
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
                Instance Of
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
                    class Bike{
                        protected $brand;
                        protected $price;
                        protected $type;

                        public function __construct($brand, $price) {
                            $this->brand = $brand;
                            $this->price = $price;
                        }

                        public function setBike($type) {
                            if($type instanceof Road) $this->type = 'Road';
                            if($type instanceof Mtb) $this->type = 'Mtb';
                            if($type instanceof Enduro) $this->type = 'Enduro';
                        }

                        public function getInfoBike() {
                            return "<li class='mb-2 p-2 ring-1 ring-white/50 rounded-xl list-none'>".
                                    $this->brand. " | $".$this->price. " | ".
                                    $this->type. 
                                    "</li>";
                        }
                    }

                    class Road extends Bike { }
                    class Mtb extends Bike { }
                    class Enduro extends Bike { }

                    $bk = new Road('Splecialized', 4000);
                    $bk->setBike($bk);
                    echo $bk->getInfoBike();

                    $bk = new Mtb('Trek', 3200);
                    $bk->setBike($bk);
                    echo $bk->getInfoBike();

                    $bk = new Enduro('SantaCruz', 5200);
                    $bk->setBike($bk);
                    echo $bk->getInfoBike();
                ?>
                    
            </section>
            
        </main>

</body>
</html>