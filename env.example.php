<?php
  $variables = [
      'APP_KEY'   => '',
      'DB_HOST'   => 'localhost',
      'DB_USER'   => 'root',
      'DB_PASS'   => '',
      'DB_NAME'   => 'task_xpeedstudio_turzo',
      'DB_PORT'   => '3306',
      'DB_DNS'    => "mysql:host=localhost;dbname=task_xpeedstudio_turzo",
      'ROOT_PATH' => '/task_xpeedstudio/',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>