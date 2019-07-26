<?php

$meta=[];
$meta['title']='Your Name';
$meta['description']='Your Page Description';
$meta['keywords']='Your Page Keywords';

$content = <<<EOT
<h1>Hello</h1>
<p>Welcome, This is Your Page</p>
<img style="border-radius: 50%; float: right; margin-right: 1em;" src="https://s.gravatar.com/avatar/<your-gravatar>" alt="Your-Name">
<!-- Gravator Image Box
    <img src="https://s.gravatar.com/avatar/<your-gravatar>" alt="Y">
-->
<h2>Write Something</h2>
<p>Welcome To My Home Page where you will find blah, blah, blah.</p>

<h2>Write Something</h2>
    <p>Since the keyboard does not have a &copy; key we need a way to reference this so we say &amp;copy;. Additionally, greater than and less than are interpreted as HTML tags. These are examples of symbols that we may want to display but will not be able to with out a work around. This is where character entities come into play. </p>
    <ul>
        <li><a href="https://stackoverflow.com/questions/1016080/why-are-html-character-entities-necessary">A Stack Overflow thread on the topic.</a></li>
        <li><a href="https://en.wikipedia.org/wiki/List_of_XML_and_HTML_character_entity_references">A Wikipedia artcile on the topic.</a></li>
        <li><a href="https://dev.w3.org/html5/html-author/charref">The W3C reference.</a></li>
    </ul>

EOT;

include '../core/layout.php';