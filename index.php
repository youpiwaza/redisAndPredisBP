<h1>Test Predis</h1>

<?php
  require "vendor/autoload.php";

  $client = new Predis\Client();
  $client->set('foo', 'bar');
  $value = $client->get('foo');

  var_dump($value);
?>
