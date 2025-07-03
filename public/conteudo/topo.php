 <header id="topo-fixo">
     <div class="site">
         <div class="logo"><img src="./assets/img/logo.png" alt="logo"></div>

         <nav>
             <?php
                $pgAtual = basename($_SERVER['PHP_SELF'], '.php');
                // var_dump($pgAtual);

                // if($pgAtual == 'index'){
                //     var_dump('ativo');
                // }else{
                //     var_dump('vazio');
                // }
                ?>
             <ul>
                 <li><a href="index.php" class="<?php echo ($pgAtual == 'index') ? 'ativo' : ''; ?>">Home</a></li>
                 <li><a href="sobre.php" class="<?php echo ($pgAtual == 'sobre') ? 'ativo' : ''; ?>">Sobre</a></li>
                 <li><a href="servicos.php" class="<?php echo ($pgAtual == 'servicos') ? 'ativo' : ''; ?>">Serviços</a></li>
                 <li><a href="contato.php" class="<?php echo ($pgAtual == 'contato') ? 'ativo' : ''; ?>">Contato</a></li>
             </ul>
             <label class="theme-switch">
                 <input type="checkbox" id="dark-mode-toggle" class="theme-checkbox">
                 <span class="slider"></span>
             </label>
         </nav>
     </div>
 </header>