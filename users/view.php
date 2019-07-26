<?php
require '../core/functions.php';
require '../config/keys.php';
include '../core/db_connect.php';
require '../core/session.php';
checkSession();

$input = filter_input_array(INPUT_GET);
$slug = preg_replace("/[^a-z0-9-]+/", "", $input['slug']);

$content=null;
$stmt = $pdo->prepare('SELECT * FROM posts WHERE slug = ?');
$stmt->execute([$slug]);

$row = $stmt->fetch();
$content .= "<h1>{$row['title']}</h1>";
$content .= "<h1>{$row['body']}</h1>";

# PRDO QUERY
  // $stmt = $pdo->query('SELECT * FROM posts');
  // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  //   echo $row['title'] . '<br>';

// echo $content;
include '../core/layout.php';
