<?php
//PHP counter starts:
$_start_time = microtime(true);
?>
<!doctype html>
<html>
<head>
  <?php include 'partials/head.php'; ?>
</head>
<body>
  <!-- Nav -->
  <?php include 'partials/navigation.php'; ?>
  <!-- Debug -->
  <?php
  if ($_GET['debug'] === 1) {
    include 'partials/screens/debug.php';
  } else {
    include 'partials/screens/default.php';
  }
  ?>
  <!-- Input block -->
  <?php include 'partials/input-block.php'; ?>
  <!-- Modals start -->
  <?php include 'partials/modals.php'; ?>
  <!-- Modals end -->
</body>
</html>
<!-- Functions -->
<?php include 'partials/functions.php'; ?>

<?php
//PHP counter ends:
echo '<!-- ЧАТ: Сгенерировано за '.round((microtime(true) - $_start_time), 5).' сек. -->';
?>
