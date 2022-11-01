<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
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
                Interface
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

                <form action="" method="post" class="mx-auto flex flex-col justify-center items-center gap-4" enctype="multipart/form-data">
                    <input class="hidden" type="file" name="image" required accept="image/*">
                    <button type="button" class="bg-black/80 transition hover:bg-black/50 py-14 px-10 rounded-lg btn-select">Select File</button>
                    <button class="bg-green-800 transition hover:bg-green-500 py-4 px-7 rounded-lg">Upload Image</button>
                </form>

                <?php
                    interface Image {
                        public function uploadImage($file);
                    }

                    class Upload implements Image {
                        private $file;

                        public function uploadImage($file){
                            $this->file = $file;
                            move_uploaded_file($_FILES['image']['tmp_name'], $file);
                            echo '<p class="bg-green-400 mb-2 my-4 p-2 ring-1 ring-white/50 rounded"> Upload Image Successfully </p>';
                        }
                    }
                    if ($_FILES) {
                        $ui = new Upload();
                        $ui->uploadImage('public/uploads/'.$_FILES['image']['name']);
                    }
                ?>
                    
            </section>
            
        </main>
        <script >
        const btnSelect = document.querySelector('.btn-select');
        btnSelect.addEventListener('click', e =>{
            document.querySelector('input[type=file]').click()
        })
    </script>
</body>
</html>