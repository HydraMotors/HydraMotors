<?php
include __DIR__ . '/../../conexao.php';
$theme = 'light';
if (session_status() === PHP_SESSION_NONE) session_start();
if (isset($_SESSION['logid'])) {
    $con = isset($con) ? $con : (isset($conn) ? $conn : null);
    if ($con) {
        mysqli_select_db($con, 'hydramotors');
        $logid = mysqli_real_escape_string($con, $_SESSION['logid']);
        $resTheme = mysqli_query($con, "SELECT Theme FROM clilogin WHERE logid = '$logid' LIMIT 1");
        if ($resTheme && $rowTheme = mysqli_fetch_assoc($resTheme)) {
            $theme = ($rowTheme['Theme'] == 1) ? 'dark' : 'light';
        }
    }
}
?>
<script>
(function() {
  var theme = '<?= $theme ?>';
  function applyTheme(t) {
    document.body.classList.remove('light-mode', 'dark-mode');
    document.documentElement.classList.remove('light-mode', 'dark-mode');
    document.body.classList.add(t + '-mode');
    document.documentElement.classList.add(t + '-mode');
  }
  applyTheme(theme);
})();
</script>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HYDRAMOTORS VENDAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/CRUDTCC/css/style.css" rel="stylesheet">
    <link href="/CRUDTCC/css/header.css" rel="stylesheet">
    <link href="/CRUDTCC/css/index.css" rel="stylesheet">
  </head>
  <body>
    <?php include_once("headervendas.php"); ?>
    <div class="main-box">
      <h1 class="main-title">HYDRAMOTORS VENDAS</h1>
      <div class="categories-row">
        <div class="category-item">
          <a href="categorias vendas/Antiguidade.php">
            <img src="/CRUDTCC/images/antiguidades.png" alt="Antiguidades">
          </a>
          <span>Antiguidades</span>
        </div>
        <div class="category-item">
          <a href="categorias vendas/Sedan.php">
            <img src="/CRUDTCC/images/seda.png" alt="Sedãs">
          </a>
          <span>Sedãs</span>
        </div>
        <div class="category-item">
          <a href="categorias vendas/SUV.php">
            <img src="/CRUDTCC/images/suv.png" alt="SUVs">
          </a>
          <span>SUVs</span>
        </div>
        <div class="category-item">
          <a href="categorias vendas/Hatch.php">
            <img src="/CRUDTCC/images/hatch.png" alt="Hatchs">
          </a>
          <span>Hatchs</span>
        </div>
      </div>
      <div class="categories-row">
        <div class="category-item">
          <a href="categorias vendas/UTE.php">
            <img src="/CRUDTCC/images/ute.png" alt="Ute/Pickups">
          </a>
          <span>Ute/Pickups</span>
        </div>
        <div class="category-item">
          <a href="categorias vendas/Eletrico.php">
            <img src="/CRUDTCC/images/eletrico.png" alt="Elétricos">
          </a>
          <span>Elétricos</span>
        </div>
        <div class="category-item">
          <a href="categorias vendas/Coupe.php">
            <img src="/CRUDTCC/images/coupe.png" alt="Coupes">
          </a>
          <span>Coupes</span>
        </div>
        <div class="category-item">
          <a href="categorias vendas/Hibrido.php">
            <img src="/CRUDTCC/images/hibrido.png" alt="Híbridos">
          </a>
          <span>Híbridos</span>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>