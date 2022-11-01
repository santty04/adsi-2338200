<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
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
                Template
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
                    class Vehicle {
                        public $brand;
                        public $refer;
                        public $model;
                        public $color;
                    // Methods
                    public function setAttributes($brand, $refer, $model, $color) {
                        $this->brand = $brand;
                        $this->refer = $refer;
                        $this->model = $model;
                        $this->color = $color;
                    }
                    public function getAttributes() {
                        return '<ul class="flex justify-center items-center gap-2 ring-1 ring-black/25 rounded-xl p-2 mb-4">
                                    <li> Brand: '.      $this->brand.' </li> 
                                    <li> Reference: '.  $this->refer.' </li>
                                    <li> Model: '.      $this->model.' </li>
                                    <li> Color: '.      $this->color.' </li>
                                </ul>';
                    }

                }
                $vh1 = new Vehicle();
                $vh1->setAttributes('Toyota', 'Prado', '2019', 'Black');
                echo $vh1->getAttributes();

                $vh2 = new Vehicle();
                $vh2->setAttributes('Volkswagen', 'Golf', '2023', 'White');
                $vh2->refer = 'Tiguan';
                echo $vh2->getAttributes();

                $vh3 = new Vehicle();
                $vh3->setAttributes('Renault', 'Duster', '2022', 'Gray');
                echo $vh3->getAttributes();

                $vh11 = clone $vh1;
                $vh1->brand = 'Nissan';
                $vh1->getAttributes();
                $vh11->getAttributes();
                echo $vh1->getAttributes();
                echo $vh11->getAttributes();


                ?>
                    
            </section>
            
        </main>

</body>
</html>