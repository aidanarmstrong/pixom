<?PHP 
session_start();
if(!isset($_SESSION['user_id'])){ //if login in session is not set
	$_SESSION['redirectURL'] = $_SERVER['$REQUEST_URI'];
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>  
    <title>Homepage</title>
    <link rel="Stylesheet" type="text/css" href="style/Homepage.css?v=1.0">
</head>
<body>
    <script src="Core/Script/jquery-3.1.1.js"></script>
    <script src="Core/Script/HomepageScript.js"></script>
    <script src="Core/Script/Account.js"></script>
    
<div class="container">
    <div class="logo" onclick="location.href='Homepage.php'">
        <img src="">
    </div>
    <form id="searchbar-warpper" action="results-page.php" method="POST">
        <input id="searchbar" type="text" name="search" placeholder="Searching...">
        <input id="searchbtn" type="submit" value="">
    </form>
    <nav id="navigation">
        <ul class="parent">
            <li onclick="location.href='Homepage.php'">Home</li>
            <li>Genres 
                <ul class="child">
                    <li>Comedy</li>
                    <li>Horror</li>
                    <li>Romance</li>
                    <li>Drama</li>
                    <li>Sci-Fi</li>
                </ul>
            </li>
            <li>Movies
                <ul class="child">
                    <li>2016</li>
                    <li>2015</li>
                    <li>2014</li>
                    <li>2013</li>
                    <li>2012</li>
                </ul>
            </li>
            <li>Tv Shows
                <ul class="child">
                    <li>Netflix Originals</li>
                    <li>Hulu Originals</li>
                    <li>Prime Orginals</li>
                    <li>Fox</li>
                </ul>
            </li>
            <li onclick="location.href='http://www.imdb.com'">IMDb</li>

        </ul>
    </nav>
    <div id="Account-container">
        <input id='my-accountbtn' type="button" value="">
    </div>
    <div id='silding_div'>
        <a href="Logout.php">Logout?</a>
    </div>
</div>
<div class="main_header">
    <div id="tvshw_btn" onclick="location.href='id=001'">
    <p class="tvshwbtn-text">Recomended</p>
    </div>
    <div class="advert01">
        <img class="advert-img01" src="img/.jpg">
    </div>
    <div class="advert02">
        <img class="advert2-img01" src="img/.jpg">
    </div>
    <div class="next_btn">
        </div>
    <div class="main-hdr-wrapper">
        <div class="data-tvshows-container-01">
            <h1 class="tvshw-title-01">The Big Bang Theory</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-01" src="img/Tv Shows/The-big-bang-theory.jpg">
            </a>
            <h1 class="tvshw-title-02">Scorpion</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232"> 
            <img class="tvshw-02" src="img/Tv Shows/Scorpion.jpg">
            </a>
            <h1 class="tvshw-title-03">Supernatural</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-03" src="img/Tv Shows/Supernatural.jpg">
            </a>
            <h1 class="tvshw-title-04">Suits</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-04" src="img/Tv Shows/Suits.jpg">
            </a>
            <h1 class="tvshw-title-05">Game of Thrones</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232"> 
            <img class="tvshw-05" src="img/Tv Shows/game-of-thrones.jpg">
            </a>
            <h1 class="tvshw-title-06">The Walking Dead </h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232"> 
            <img class="tvshw-06" src="img/Tv Shows/walking-dead.jpg" alt="">
            </a>
        
        
            <h1 class="tvshw-title-01">Riverdale</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-01" src="img/Tv Shows/Riverdale.jpg">
            </a>
            <h1 class="tvshw-title-02">Vikings</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-02" src="img/Tv Shows/Vikings.jpg">
            </a>
            <h1 class="tvshw-title-03">Arrow</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-03" src="img/Tv Shows/Arrow.jpg">
            </a>
            <h1 class="tvshw-title-04">Vampire Diaries</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-04" src="img/Tv Shows/The-vampire-diaries.jpg">
            </a>
            <h1 class="tvshw-title-05">The 100</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-05" src="img/Tv Shows/The-100.jpg">
            </a>
            <h1 class="tvshw-title-06">Homeland</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-06" src="img/Tv Shows/Homeland.jpg">
            </a>
        
        
            <h1 class="tvshw-title-01">Black Mirror</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-01" src="img/Tv Shows/Black-mirror.jpg">
            </a>
            <h1 class="tvshw-title-02">Westworld</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-02" src="img/Tv Shows/Westworld.jpg">
            </a>
            <h1 class="tvshw-title-03">Billions</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-03" src="img/Tv Shows/Billions.jpg">
            </a>
            <h1 class="tvshw-title-04">House of cards</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-04" src="img/Tv Shows/House-of-cards.jpg">
            </a>
            <h1 class="tvshw-title-05">American Horror Story</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-05" src="img/Tv Shows/American-horror-story.jpg">
            </a>
            <h1 class="tvshw-title-06">Nashville</h1>
            <a href="http://nixo.uk/gb/tvshows/id=12232">
            <img class="tvshw-06" src="img/Tv Shows/Nashville.jpg">
            </a>
        </div>
    
    
    <div id="mov_btn" onclick="location:href'Movies.php'">
    <p class="movbtn-text">Library</p>
    </div>
    <div class="next_btn2">
        </div>
    <div class="main-hdr-wrapper-2">
        <div class="data-tvshows-container-01">
            <h1 class="mov-title-01">Interstellar</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-01" src="img/Movies/interstellar.jpg">
            </a>
            <h1 class="mov-title-02">13 Hours</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-02" src="img/Movies/13-hours.jpg">
            </a>
            <h1 class="mov-title-03">Boyhood</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-03" src="img/Movies/Boyhood.jpg">
            </a>
            <h1 class="mov-title-04">Focus</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-04" src="img/Movies/focus.jpg">
            </a>
            <h1 class="mov-title-05">Joy</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-05" src="img/Movies/joy.jpg">
            </a>
            <h1 class="mov-title-7">Safe Haven</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-06" src="img/Movies/safe-haven.jpg">
            </a>
        
        
            <h1 class="mov-title-01">Pele</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-01" src="img/Movies/pele.jpg">
            </a>
            <h1 class="mov-title-02">San Andreas</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-02" src="img/Movies/san-andreas.jpg">
            </a>
            <h1 class="mov-title-03">Spotlight</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-03" src="img/Movies/spotlight.jpg">
            </a>
            <h1 class="mov-title-04">Sorched Trials</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-04" src="img/Movies/sorched-trials.jpg">
            </a>
            <h1 class="mov-title-05">Rush</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-05" src="img/Movies/rush.jpg">
            </a>
            <h1 class="mov-title-06">Shawshank Redemption</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-06" src="img/Movies/shawshank-redemption.jpg">
            </a>
        
            <h1 class="mov-title-01">The Dark Knight</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-01" src="img/Movies/the-dark-knight.jpg">
            </a>
            <h1 class="mov-title-02">The Maze Runner</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-02" src="img/Movies/The_Maze_Runner.jpg">
            </a>
            <h1 class="mov-title-03">The Krays</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-03" src="img/Movies/the-krays.jpg">
            </a>
            <h1 class="mov-title-04">Whiplash</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-04" src="img/Movies/whiplash.jpg">
            </a>
            <h1 class="mov-title-05">Tomorrowland</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-05" src="img/Movies/tomorrowland.jpg">
            </a>
            <h1 class="mov-title-06">The Shallows</h1>
            <a href="http://nixo.uk/gb/Movies/id=12232">
            <img class="mov-06" src="img/Movies/the-shallows.jpg">
            </a>
        </div>
        
    </div>


</div>
</div>




</body>
</html>