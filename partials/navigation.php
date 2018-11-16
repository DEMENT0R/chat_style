<nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 2;">
  <a class="navbar-brand" href="#">Tomoru</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="partials/calc.html">Калькулятор</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onClick="fullscreen3(document.documentElement);return false;">Полный экран</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Управление
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="partials/crud.php">База пользователей</a>
          <a class="dropdown-item" href="partials/crud.php?id=0">Добавить пользователя</a>
          <a class="dropdown-item" href="partials/app.php?get_message=20">Последние сообщения</a>
          <hr>
          <a class="dropdown-item" href="?admin=1&debug=1">Режим отладки</a>
          <a class="dropdown-item" href="?admin=1&debug=0">Обычный режим</a>
          <hr>
          <a class="dropdown-item" href="./">Логаут</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#helpModal">Help!</a>
      </li>
    </ul>
  </div>
</nav>
