<?php
  $variables = [
      'APP_KEY' => '',
      'DB_HOST' => '',
      'DB_USER' => '',
      'DB_PASS' => '',
      'DB_NAME' => '',
      'DB_PORT' => '',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>