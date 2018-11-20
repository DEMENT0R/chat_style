<?php
//PHP counter starts:
$_start_time = microtime(true);

// Functions
include 'partials/functions.php';
// Auth
include 'partials/auth.php';
?>
<!doctype html>
<html>
<head>
  <?php include 'partials/head.php'; ?>
</head>
<body>
  <div class="container-fluid">
    <!-- Nav -->
    <?php
    if ($_GET['admin'] == 1) {
      include 'partials/navigation.php';
    } else {
    //
    }
    ?>
    <div class="revealator-slideup revealator-within revealator-once" id="main-window">
      <!-- Debug -->
      <?php
      if ($_GET['debug'] == 1) {
        include 'partials/screens/debug.php';
      } else {
        include 'partials/screens/default.php';
      }
      ?>
    </div>
    <div id="cache-window"></div>
    <!-- Input block -->
    <?php include 'partials/input-block.php'; ?>
    <!-- Chat script -->
  </div>
  <script src="js/chat.js"></script>
  <script src="js/fm.revealator.jquery.min.js"></script>

      <!-- Modals start -->
    <?php include 'partials/modals.php'; ?>
    <!-- Modals end -->
</body>

</html>

<?php
//PHP counter ends:
echo '<!-- ЧАТ: Сгенерировано за '.round((microtime(true) - $_start_time), 5).' сек. -->';
?>
