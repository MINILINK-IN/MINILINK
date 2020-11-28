<!DOCTYPE html>
<html>
<head>
    <style>
        *{
            font-family: monospace;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }
        
        body{
            background: linear-gradient(45deg,#2BA694,#FBF644);
        }

        header{
            top: 0;
            left: 0;
            width: 100vw;
            height: 7vh;
            position: fixed;
            display: flex;
            justify-content: space-around;
            align-items: center;
            z-index: +1;
        }

        nav ul{
            display: flex;
            justify-content: space-around;
            list-style: none;
        }

        nav ul a li{
            height: 7vh;
            padding: 3vh 2vw 0 2vw;
            text-align: center;
            transition: 0.5s;
        }
        
        nav ul a{
            text-decoration: none;
            color: #FFFFFF;
            font-size: 3vh;
        }
    
        nav ul a:hover li{
            height: 7vh;
            padding: 3vh 2vw 0 2vw;
            text-align: center;
            font-size: 3vh;
            text-decoration: none;
            color: #2BA694;
            background: #FFFFFF;
            transition: 0.5s;
        }
    
        nav ul a:active li{
            height: 7vh;
            padding: 3vh 2vw 0 2vw;
            text-align: center;
            text-decoration: none;
            color: #2BA694;
            font-size: 3vh;
            background: #FFFFFF;
        }
    
        #Home{
            top: 7vh;
            left: 0;
            width: 100vw;
            height: 86vh;
            position: absolute;
            z-index: -1;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
        }
      
        .ShortenPageLink{
            border: solid;
            border-radius: 10px;
            padding: 15px; 
            text-decoration: none;
            color: #000000;         
            text-align: center;
            font-size: 3vh;
            transform: scale(1);
            transition: 0.5s;
        }
      
        .ShortenPageLink:hover{
            border: solid;
            border-radius: 10px;
            padding: 15px;
            text-decoration: none;
            color: #000000;
            text-align: center;
            font-size: 3vh;
            background: #FFFFFF;
            transform: scale(1.05);
            transition: 0.5s;
        }
    
        #HowItWorks{
            top: 0;
            left: 0;
            margin-top: 93vh;
            position: absolute;
            width: 100vw;
            height: 100vh;
            color: #FFFFFF;
            display: flex;
            flex-direction: column;
        }

        #HowItWorks div{
            margin-top: 7vh;
            color: #000000;
            text-align: center;
        }
      
        #HowItWorks a{
            align-content: center;
            width: 15vw;
            margin: 0 auto;
        }
      
        #WorkingMINILINK{
            height: 50vh;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }
        
        #WorkingMINILINK div{
            width: 20vw;
            height: 20vh;
            border: solid;
            border-radius: 10px;
            text-align: center;            
        }
      
        #WorkingMINILINK .Arrow{
            height: 10vh;
            width: 10vw;
            border: none;
            align-self: center;
            text-align: center;
        }
        
        #AboutUs{
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            margin-top: 193vh;
            position: absolute;
            display: flex;
            flex-direction: column;
        }
      
        #AboutUs div{
            margin-top: 7vh;
            text-align: center;
        }
      
        #AboutUs div div{
            display: flex;
            justify-content: space-around;
        }
      
        #AboutUs div div div{
            display: flex;
            flex-direction: column;
        }
      
        #AboutUs div div div img{
            width: 7vw;
            border-radius: 7vw;
            align-self: center;
        }
      
        #AboutUs a{
            align-content: center;
            width: 15vw;
            margin: 0 auto;
        }
      
        #ShortenOne{
            margin-top: 293vh;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: row;
            justify-content: space-around;
        }
      
        #ShortenOne form{
            margin: 0 10vw 0 10vw;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: flex-start;
        }
      
        #ShortenOne form #URLChoice{
            height: 5vh;
            background: none;
            color: #000000;
            font-size: 20px;
            border: solid;
            border-radius: 7px;
        }
        
        #ShortenOne form #Keyword{
            height: 5vh;
            width: 35vw;
            border: solid;
            border-radius: 7px;
            font-size: 20px;
        }
      
        #ShortenOne form #URLInput{
            width: 75vw;
            height: 5vh;
            background: white;
            border: solid;
            border-radius: 7px;
            font-size: 20px;
            padding-left: 10px; 
        }
      
        #ShortenOne form div{
            width: 100vw;
            height: 15vh;
        }
      
        #ShortenOne form #GenerateURL{
            height: 6vh;
            width: 20vw;
            border: solid;
            font-size: 20px;
            border-radius: 7px;
            background: transparent;
            transition: 0.5s;
        }
        
        #ShortenOne form #GenerateURL:hover{
            height: 6vh;
            width: 20vw;
            border: solid;
            font-size: 20px;
            border-radius: 7px;
            background: #FFFFFF;
            transform: scale(1.05);
            transition: 0.5s;
        }
    
        footer{
            overflow: hidden;
            background: #000000;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100vw;
            height: 5vh;
            align-items: center;
            color: #FFFFFF;
        }

        footer ul{
            margin-top: 0;
            margin-bottom: 0;
            display: flex;
            justify-content: center;
        }
        
        footer a{
            text-decoration-color: #FFFFFF;
            color: #FFFFFF;
        }
        
        footer a:hover{
            text-decoration-color: #3355FF;
            color: #3355FF;
        }
    </style>
    <title>MINI LINK</title>
    <meta charset="utf-8">
</head>
<body>
    <header>
        <h1>MINI LINK</h1>
        <nav>
            <ul>
                <a href="#"><li>Home</li></a>
                <a href="#HowItWorks"><li>How It Works</li></a>
                <a href="#AboutUs"><li>About Us</li></a>
            </ul>
        </nav>
    </header>
    <main>
        <div id="Home">
            <h1>When you can't remember huge things, make them small.<br>Make your URLs very short with MINI LINK.</h1>
            <a href="#ShortenOne" class="ShortenPageLink">SHORTEN YOUR LINKS</a>
        </div>
        <div id="HowItWorks">
            <div>
                <h1>Shortening URLs with MINI LINK</h1>
                <div id="WorkingMINILINK">
                    <div>
                        <h1>Large URL</h1>
                        <h2>Given as input by user</h2>
                    </div>
                    <div class="Arrow"><h1>----></h1></div>
                    <div>
                        <h1>MINI LINK</h1>
                        <h2>Saves your URL into our server and assigns it with a short URL provided by us</h2>
                    </div>
                    <div class="Arrow"><h1>----></h1></div>
                    <div>
                        <h1>Short URL</h1>            
                        <h2>The Short URL is finally provided to the user and will be activated for Usage</h2>
                    </div>
                </div>
            </div>
            <a href="#ShortenOne" class="ShortenPageLink">SHORTEN HERE</a> 
        </div>
        <div id="AboutUs">
            <div>
                <h1>We are the developers of MINI LINK</h1>
                <div>
                    <div>
                        <img src="https://yt3.ggpht.com/ytc/AAUvwni8gkB2IlG1nIFa_7pSMyPS-C0_I5FBxglk235e=s176-c-k-c0x00ffffff-no-rj" />
                        <h1>S. SRI HARSHA</h1>
                    </div>
                    <div>
                        <img src="https://yt3.ggpht.com/ytc/AAUvwni8gkB2IlG1nIFa_7pSMyPS-C0_I5FBxglk235e=s176-c-k-c0x00ffffff-no-rj" />
                        <h1>CH. SRI HARSHA</h1>
                    </div>
                </div>
            </div>
            <a href="#ShortenOne" class="ShortenPageLink">TRY SHORTENING LINKS</a>
        </div>
        <div id="ShortenOne">
            <form action="shorten.php" method="post">
                <label for="URLInput"><h1>Enter your URL: </h1></label>
                <input type="text" id="URLInput" name="Website" placeholder="https://www.example.com/vwfuedfh987rcevdyih834rfgvuabuo38hj8rrdfvih9378gey3d"><br>
                <div>
                    <label for="URLChoice"><h1>Select a URL: </h1></label>
                    <select id="URLChoice" name="URLChoice">
                        <option value="minilink.in/">minilink.in/</option>
                        <option value="mnln.in/">mnln.in/</option>
                    </select>
                    <input type="text" id="Keyword" name="Keyword" placeholder="Enter your Custom part if you want.">
                    <input type="submit" id="GenerateURL" value="GENERATE SHORTENED URL">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <ul>
            <li><p><a href="https://www.scientifickernel.com">Developer Website</a>&nbsp;|&nbsp;</p></li>
            <li><p><a>Copyright Policy</a>&nbsp;|&nbsp;</p></li>
            <li><p><a>Usage Warranty Description</a>&nbsp;|&nbsp;</p></li>
            <li><p>&copy; 2020 <strong>MINI LINK</strong></p></li>
        </ul>
    </footer>
</body>
</html>