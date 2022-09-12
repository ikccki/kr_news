<?php 
  session_start();
  if (!empty($_SESSION['user'])): ?>
   <header>
      <a href="/index.php"><div class="logo">VH</div></a>
      <a href="/news_by_tag.php?tag=<?='Экономика'?>"><div class="econom">Экономика</div></a>
      <a href="/news_by_tag.php?tag=<?='Наука'?>"><div class="science">Наука</div></a>
      <a href="/news_by_tag.php?tag=<?='Культура'?>"><div class="culture">Культура</div></a>
      <a href="/news_by_tag.php?tag=<?='Спорт'?>"><div class="sport">Спорт</div></a>
      <a href="/news_by_tag.php?tag=<?='Техника'?>"><div class="technic">Техника</div></a>
      <?php if ($_SESSION['role'] == 'admin' or $_SESSION['role'] == 'author'): ?>
        <a href="/editor.php"><div class="editor_main">Добавить статью</div></a>
      <?php endif; ?>
      <?php if ($_SESSION['role'] == 'admin' ): ?>
      <a href="adminpanel.php"><div class="login_name"><?php echo $_SESSION['user'] ?></div></a>
      <?php endif; ?>
      <a href="/logout.php"><div class="logout">Выход</div></a>
  </header>
<?php else: ?>
  <header>
      <a href="/index.php"><div class="logo">VH</div></a>
      <a href="/news_by_tag.php?tag=<?='Экономика'?>"><div class="econom">Экономика</div></a>
      <a href="/news_by_tag.php?tag=<?='Наука'?>"><div class="science">Наука</div></a>
      <a href="/news_by_tag.php?tag=<?='Культура'?>"><div class="culture">Культура</div></a>
      <a href="/news_by_tag.php?tag=<?='Спорт'?>"><div class="sport">Спорт</div></a>
      <a href="/news_by_tag.php?tag=<?='Техника'?>"><div class="technic">Техника</div></a>
      <a href="/reg.php"><div class="registration">Регистрация</div></a>
      <a href="/signin.php"><div class="login">Вход</div></a>
  </header>
<?php endif; ?>

     