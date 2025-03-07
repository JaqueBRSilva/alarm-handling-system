<?php include 'head.php' ?>

<?php 
  $current_page_name = basename($_SERVER['PHP_SELF']);

  function isPageActive($page) {
    global $current_page_name;
    return ($current_page_name == $page) ? 'active bg-secondary' : '';
  }
?>

<div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Gerenciamento de Alarmes</span>
    </a>

    <ul class="nav nav-pills">
      <li class="nav-item">
        <a href="index.php" class="nav-link <?php echo isPageActive('index.php') ?>" aria-current="page">
          Home
        </a>
      </li>
      <li class="nav-item">
        <a href="dashboard.php" class="nav-link <?php echo isPageActive('dashboard.php') ?>" >
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a href="alarms.php" class="nav-link <?php echo isPageActive('alarms.php') ?>">
          Alarmes
        </a>
      </li>
      <li class="nav-item">
        <a href="equipaments.php" class="nav-link <?php echo isPageActive('equipaments.php') ?>">
          Equipamentos
        </a>
      </li>
    </ul>
  </header>
</div>

<body class="bg-body-tertiary">