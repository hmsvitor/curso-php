<html>
  <head>
    <title>My website</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/main.css">
  </head>
  <body>
    <h1>This is THE header</h1>
      <a href="<?php echo BASE_URL; ?>">Home</a>
      <a href="<?php echo BASE_URL . 'gallery'; ?>">Gallery</a>
    <hr>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
  </body>
</html>