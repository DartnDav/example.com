<?php

require '../core/processContactForm.php';

//Build the page metadata
$meta = [];
$meta['description'] = "The best thing about hello world is the greeting";
$meta['keywords'] = "hello world, hello, world";

$content = <<<EOT
<form method="post" action="contact.php">
  {$message}
  <div>
    <label for="Name">Name</label><br>
    <input type="text" name="name" id="Name" value="{$valid->userInput('name')}">
    <div class="text-error">{$valid->error('name')}</div>
  </div>

  <div>
    <label for="email" id="email">Email</label><br>
    <input type="text" name="email" value="{$valid->userInput('email')}">
    <div class="text-error">{$valid->error('email')}</div>
  </div>

  <div>
    <label for="subject" id="subject">Subject</label><br>
    <input type="text" name="subject" value="{$valid->userInput('subject')}">
    <div class="text-error">{$valid->error('subject')}</div>
  </div>

  <div>
    <label for="message" id="message">Message</label><br>
    <textarea name="message">{$valid->userInput('message')}</textarea>
    <div class="text-error">{$valid->error('message')}</div>
  </div>


  <input type="submit">

</form>
EOT;

require '../core/layout.php';

if(empty($valid->errors) && !empty($input)){
    $message = "<div>Success!</div>";
}else{
    $message = "<div>Error!</div>";
}

?>
