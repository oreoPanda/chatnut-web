<?php
    //check url= in the meta to reload site
    $site = "
    <html>
    <head>
        
        
    </head>

    <body>
        <nav class='nav-left'>
            <ul>
                <li>
                    <a class='nav".$homelink."'
                    href='index.php'>Home</a>
                </li>
                <li>
                    <a class='nav".$documentationlink."' href='documentation.php'>Doc</a>
                </li>
                <li>
                    <a class='nav".$downloadslink."' href='downloads.php'>Downloads</a>
                </li>
            </ul>
        </nav>
        
        <nav class='nav-bottom'>
            <ul>
                <li>
                    <a class='nav'>Hello</a>
                </li>
                <li>
                    <a class='nav'>Contact</a>
                </li>
                <li>
                    <a class='nav'>Impressum</a>
                </li>
            </ul>
        </nav>
        
        <div class='main'>
        
            <header>
                <p class='title'>
                    chatnut
                </p>
                <p class='subtitle'>
                    ...the free and open-source messaging system for everyone!
                </p>
            </header>
            
            <div class='maintextbox'>
                <h1 class='main'>"
                    .$h1main.
                "</h1>"
                
                .$pmain.
                
            "</div>
            
        </div>
    </body>
    </html>"
?>
