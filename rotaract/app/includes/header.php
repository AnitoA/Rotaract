<header>
    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
      <h1 class="logo-text"><span>Р</span>отаракт</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="<?php echo BASE_URL . '/index.php' ?>">Начало</a></li>
      <li><a href="#">За нас</a></li>
      <li><a href="#">Новини</a></li>

      <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Табло</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Изход</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL . '/register.php' ?>">Регистриране</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>">Вход</a></li>
      <?php endif; ?>
    </ul>
</header>