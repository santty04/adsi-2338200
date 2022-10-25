<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class (Attributes/Methods)</title>
    <script src="public/js/tailwind-3.2.1.js"></script>
</head>
<body class="bg-gradient-to-t
            from-sky-900
            to-sky-500
            min-h-screen">


    <main class="m-10
                mx-auto
                max-w-lg
                p-5 
                border-4
                border-sky-900 
                bg-white/5
                rounded-xl">
        <h1 class=" m-5 
                    text-center
                    text-3xl
                    border-sky-900 
                    text-white
                    text-opacity-80
                    font-bold">
        <a href="index.php" class="float-left 
                                    transition
                                    hover:text-white
                                    hover:-translate-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
            </svg>
        </a>
            Class (Attributes/Methods) 
        </h1>
        
        <section class="text-black
                      bg-black/10 
                        min-h-[400px]
                        p-5
                        rounded-xl 
                        opacity-60">

            <?php 

                class Vehicle {
                    // Attributes
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

            ?>


        </section>
    </main>
    
</body>
</html>