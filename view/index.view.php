<?php require 'partials/head.php'
    
?>
<body>
    <div class="app">
    <header>
        <?php require 'partials/nav.php' ?>
    </header>
    <main>
        <?php 
        $num = 2;
            function double_global_num(){
                $GLOBALS['num'];
                return $num % 2;
            };
        echo double_global_num();
        ?>
             <ul>
                <?php foreach ($travels as $travel) : ?>
                    <li>
                        <div>
                            Città: <?= $travel['name']; ?>

                        </div>      
                    </li> <hr>
                <?php endforeach ?>
            </ul>
    </main>
    <footer>
        <?php require 'partials/footer.php' ?>
    </footer>
    </div>
</body>
</html>