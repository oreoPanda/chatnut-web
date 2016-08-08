<?php
/*color palette
 white: #ffffff
 grey:  #f2f2f2
 grey shadow and main paragraph #aaaaaa
 black: black
 orange: #ff6600
 orange shadow:*/
 
 //try to fix double in a.nav / a.nav-active

$stylesheet = 
    "<style>
    body
    {
        margin: 0px;
        padding: 0px;
        background-color: #ffffff;
    }

    nav
    {
        margin: 0px;
        padding: 0px;
    }

    div
    {
        margin: 0px;
        padding: 0px;
    }
    
    h1
    {
        margin: 0px;
        padding: 0px;
        font-familly: sans-serif;
    }

    p
    {
        margin: 0px;
        padding: 0px;
        color: #aaaaaa;
        font-family: sans-serif;
    }

    ul
    {
        margin: 0px;
        padding: 0px;
    }

    li
    {
        margin: 0px;
        padding: 0px;
    }

    a
    {
        margin: 0px;
        padding: 0px;
    }

    div.main
    {
        margin: 20px 40px 20px 40px;
        background-color: #ffffff;
        height: 1000px;
        box-shadow: 0px 0px 15px #aaaaaa;
    }
    
    div.maintextbox
    {
        margin: 30px 550px 10px 80px;
    }
    
    p.link
    {
        margin-top: 5px;
        margin-bottom: 5px;
    }
    
    .link a
    {
        color: #ff6600;
    }
    
    .link a:hover
    {
        color: #000000;
    }
    
    .link a:active
    {
        color: #000000;
    }
    
    h1.main
    {
        margin-bottom: 20px;
    }

    header
    {
        background-color: #f2f2f2;
        padding: 30px 300px 30px 250px;
        box-shadow: 0px 0px 15px #aaaaaa;
    }

    p.title
    {
        text-align: left;
        color: #ff6600;
        font-size: 5em;
        font-weight: bold;
    }

    p.subtitle
    {
        text-align: right;
        color: #ff6600;
        font-size: 1em;
        font-weight: bold;
        font-style: italic;
    }

    nav.nav-left
    {
        position: fixed;
        margin: 15% 0px 0px 0px;
        background-color: #ffffff;
    }

    nav.nav-bottom
    {
        position: fixed;
        bottom: 0;
        margin: 0px auto 0px auto;
        width: 100%;
    }

    .nav-left ul
    {
        list-style-type: none;
    }

    .nav-bottom ul
    {
        list-style-type: none;
        text-align: center;
        
    }

    .nav-bottom li
    {
        display: inline;
    }

    a.nav
    {
        background-color: #ff6600;
        padding: 20px 0px 20px 0px;
        width: 95px;
        text-align: center;
        color: #ffffff;
        text-decoration: none;
    }
    
    a.nav-active
    {
        background-color: #ffffff;
        padding: 20px 0px 20px 0px;
        width: 95px;
        text-align: center;
        color: #ff6600;
        text-decoration: none;
        border-left: solid 7px #ff6600;
        font-weight: bold;
    }

    a.nav:hover
    {
        background-color: #ffffff;
        color: #ff6600;
        border-left: solid 7px #ff6600;
        font-weight: bold;
    }

    a.nav:active
    {
        background-color: #ffffff;
        color: #ff6600;
        border-left: solid 7px #ff6600;
        font-weight: bold;
    }

    .nav-left a
    {
        display: block;
    }

    .nav-bottom a
    {
        display: inline-block;
    }
    </style>"
?>
