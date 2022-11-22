<header>
    <div class="header-container">
      <p class="header-title"><span class="colored">RANKED</span></p>
      <nav class="header-menu">
        <a href="index.php#warlord">Warlord</a></li>
        <a href="index.php#starz">Starz</a></li>
        <a href="index.php#unknownmemory">Unknown Memory</a></li>
        <a href="index.php#poisonivy">Poison Ivy</a></li>
      </nav>
      <!-- <a href="../php/auth.php" class="header-contacts">Login</a></li>
      <a href="../php/form.php" class="header-contacts">Feedback</a></li> -->
      <a href="<?php $link = 'index.php'; echo $link?>" 
            class = "<?php if ($current_page === $link){
                    echo 'colored';
            } else echo 'not-colored' ?>">
            About
      </a>
      <a href="<?php $link = 'auth.php'; echo $link?>" 
            class = "<?php if ($current_page === $link){
                    echo 'colored';
            } else echo 'not-colored' ?>">
            Login
      </a> 
      <a href="<?php $link = 'form.php'; echo $link?>" 
          class = "<?php if ($current_page === $link) {
                  echo 'colored';
          } else echo 'not-colored'?>">
          Feedback
      </a>
    </div>
</header>