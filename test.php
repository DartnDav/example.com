<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
require '../config/keys.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun(MG_KEY);
$domain = MG_DOMAIN;

# Make the call to the client.
$from = "Mailgun Sandbox <postmaster@{$domain}>";
$to = 'David Halsey <David.Halsey.02@gmail.com>';
$subject = 'Hello David Halsey';
$text = 'Congratulations David Halsey, you just sent an email with Mailgun! You are truly awesome!';

$result = $mgClient->sendMessage(
  $domain,
  array('from'    => $from,
        'to'      => $to,
        'subject' => $subject,
        'text'    => $text
    )
);
