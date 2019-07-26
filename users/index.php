<?php
require '../core/functions.php';
require '../config/keys.php';
include '../core/db_connect.php';
require '../core/session.php';
checkSession();

$content=null;
$stmt = $pdo->query("SELECT * FROM posts");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"view.php?slug={$row['slug']}\">{$row['title']}</a><br>";

}

$content .="<br><br>";
$content .="<a href=\"add.php\">Add a Post</a>";
# PRDO QUERY
  // $stmt = $pdo->query('SELECT * FROM posts');
  // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  //   echo $row['title'] . '<br>';

include '../core/layout.php';
