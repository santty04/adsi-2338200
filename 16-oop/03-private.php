<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private (Attributes/Methods)</title>
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
                Private (Attributes/Methods)
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
                <form action="" method="post" class="m-4 rounded-xl
                                                    flex 
                                                    flex-col 
                                                    justify-center 
                                                    items-start 
                                                    ring-1 
                                                    ring-sky-100/50
                                                    p-5 
                                                    gap-4">
                    <h3 class="text-2xl font-bold mx-auto my-2">Table Maker</h3>
                    <label for="num_rows" class="flex justify-between w-[220px]">
                        <strong>Number of Rows:</strong>
                        <input class="m-0 p-1 rounded-xl w-16 text-black/50" type="number" name="num_rows" id="num_rows" min="1" max="40" required>
                    </label>
                    <label for="num_cols" class="flex justify-between w-[220px]">
                        <strong>Number of Cols:</strong>
                        <input class="m-0 p-1 rounded-xl w-16 text-black/50" type="number" name="num_cols" id="num_cols" min="1" max="10" required>
                    </label>
                    <button class="bg-black/40 text-white py-2 px-4 rounded-xl">Make Table</button>
                </form>

                <?php 

                    class RenderTable {
                     private $nr;
                     private $nc;
                     
                     public function __construct($nr, $nc){
                        $this->nr = $nr;
                        $this->nc = $nc;

                        $this->renderTableHeader();
                        $this->renderTableBody();
                        $this->renderTableFooter();
                     }
                     private function renderTableHeader() {
                        echo '<table class="border-collapse my-4 mx-auto">';
                                
                     }
                     private function renderTableBody() {
                        for ($i=0; $i < $this->nr; $i++) { 
                            echo '<tr>';
                            for ($j=0; $j < $this->nc; $j++) { 
                                echo '<td class="p-1 ring-1 ring-lime-100">R' .$i. ' C' .$j. '</td>';
                            }
                            echo '<tr/>';
                        }
                    }
                    private function renderTableFooter() {
                        echo '</table>';
                    }
                    }
                
                    if ($_POST) {
                        $nr = $_POST['num_rows'];
                        $nc = $_POST['num_cols'];

                        $rt = new RenderTable($nr, $nc);
                        
                    }
                
                ?>
                    
            </section>
            
        </main>

</body>
</html>