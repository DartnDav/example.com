<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>About David Halsey</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../public/dist/css/main.css">
      <link rel='icon' href='favicon.ico' type='image/x-icon'>
      <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
        <span class="logo">David Halsey</span>
        <a id="toggleMenu">Menu<a>
        <nav class="top-nav">
            <!-- <a class="Site_Logo" href="../public/index.php">Site Logo</a> -->
            <!-- class="pull-left" -->
            <ul role="navigation">
                <li><a href="../public/index.php">Home</a></li>
                <li><a href="../public/resume.php">Resume</a></li>
                <li><a href="../public/contact.php">Contact</a></li>
                <li class="nav-item">
                <a class="nav-link" href="../public/login.php">Login</a></li>
                <li class="nav-item">                  
                <a class="nav-link" href="../public/logout.php">Logout</a></li>
                <li class="nav-item">
                <a class="nav-link" href="../public/register.php">Register</a>
                </li>
            </ul>
        </nav>
        </header>
        <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar">
              <div id="AboutMe">
                <div class="header">Hi!</div><br>

              </div>
            </div>
        </div>

        <footer role="contentinfo">
          <div class="foot">
          <img class="avatar" src="https://s.gravatar.com/avatar/c5a3475bb64c26f6f094bf22bee49441?s=80" alt="My Avatar">
        <span class="contactword">Contact</span>&nbsp;<span class="Name1">David Halsey</span>&nbsp;<span>at:</span>
            <div class="Contact1">
                <a href="https://www.linkedin.com/in/david-halsey-9ab78617a/" target="_blank"
                    rel="noopener">LinkedIn</a>
                &#x25CF; <a href="https://dartndav.github.io/index.html" target="_blank"> Github webpage</a><br><a class="email" href="mailto:DartnDav@aol.com">DartnDav@aol.com</a>
            </div>
         </div>
         </div>
  </body>
</html>