*
{
    margin: 0;
    padding: 0;
}

header
{
   /* background-image:url("image0.jpg");/*linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), */
    
    height: 100vh;
    background-size:cover;
    background-position: center;
    animation: animate 36s ease-in-out infinite;
    position: fixed;
    width: 1707px;
}
@keyframes animate{
    0%,100%{
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), url(6.jpg);
    }
    10%{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), url(image444.jpg);
    }
    20%{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), url(1.jpg);
    }
    30%{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), url(7.jpg);
    }
    40%{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), url(8.jpg);
    }
    50%{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), url(9.jpg);
    }
    60%{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), url(12.jpg);
    }
    70%{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), url(13.jpg);
    }
    80%{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,100,0.5)), url(10.jpg);
    }
    90%{
        background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0,0,100,0.5)), url(14.jpg);
    }
}



.nav-bar
{
    background-color: black;
    position:fixed;
    height: 90px;
    right: 0;
    left: 0;
    top: 0;
    
}

.logo
{
    margin: 10px 50px;
    height: 60px;
    float: left;
}

.menu
{
    float: right;
    list-style: none;
    margin: 20px;
}

.menu li
{
    display: inline-block;
    margin: 10px 5px;
    font-size: 20px;
}

.menu li a
{
    text-decoration: none;
    color: white;
    padding: 5px 10px;
    font-family: sans-serif;
    letter-spacing: 2px;
   /* border: 1px solid rgba(47, 85, 69, 0.5);*/
}

.menu li a:hover
{
    background-color:antiquewhite;
    transition: .4s;
    color:#30afaa;
}









.welcome
{
    position:sticky;
    font-family: sans-serif;
    color: aliceblue;
    font-size: 35px;
    top: 200px;
    margin-left: 200px;
    margin-right: 200px;
    text-align: center;
   /* border-left: 50px solid #170358;
    background-color: #37aaaf;    */
}





















