<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
       <title>Thanks</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="/src/scss/main.css">
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
        <h2>Thank you for contacting me, I will get back to you shortly.</h2>
        <script>

                var toggleMenu = document.getElementById('toggleMenu');
                var nav = document.querySelector('nav');
                toggleMenu.addEventListener(
                    'click',
                    function(){
                        if(nav.style.display=='block'){
                        nav.style.display='none';
                        }else{
                            nav.style.display='block';
                        }
                    }                
                );
        </script>
    </body>
</html>
