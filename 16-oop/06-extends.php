<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extends</title>
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
                Extends
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
                
                    class Operation {
                        protected $number1;
                        protected $number2;

                        public function __construct($number1, $number2) {
                            $this->number1 = $number1;
                            $this->number2 = $number2;
                        }
                    }

                    class Addition extends Operation {
                        public function showResult() {
                            return '<p class="p-4 rounded ring-1 ring-white/50 mb-4"><b>The product is:</b> '.($this->number1 + $this->number2). ' </p>';
                        }
                    }

                    class Substraction extends Operation {
                        public function showResult() {
                            return '<p class="p-4 rounded ring-1 ring-white/50 mb-4"><b>The product is:</b> '.($this->number1 - $this->number2). ' </p>';
                        }
                    }

                    class Product extends Operation {
                        public function showResult() {
                            return '<p class="p-4 rounded ring-1 ring-white/50 mb-4"><b>The product is:</b> '.($this->number1 * $this->number2). ' </p>';
                        }
                    }

                    class Division extends Operation {
                        public function showResult() {
                            return '<p class="p-4 rounded ring-1 ring-white/50 mb-4"><b>The division is:</b> '.($this->number1 / $this->number2). ' </p>';
                        }
                    }

                    class Pow extends Operation {
                        public function showResult() {
                            return '<p class="p-4 rounded ring-1 ring-white/50 mb-4"><b>The Exponentiation is:</b> '.($this->number1 ** $this->number2). ' </p>';
                        }
                    }

                    $oper = new Addition(64, 259);
                    echo $oper->showResult();

                    $oper = new Substraction(512, 64);
                    echo $oper->showResult();

                    $oper = new Product(12, 9);
                    echo $oper->showResult();

                    $oper = new Division(1024, 32);
                    echo $oper->showResult();

                    $oper = new Pow(2, 2);
                    echo $oper->showResult();
                
                ?>
                    
            </section>
            
        </main>

</body>
</html>