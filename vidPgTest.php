<?php

include 'Api/master.php';

class database_connect {
	
	private $servername;
	private $username;
	private $password;
	private $dbname;
	
	function connect() {
		
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "pixom";
		
		$db_connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		
		return $db_connection;
		
	}
	
}

class display_show_page {
	
	private $movie_name;
	private $movie_description;
	private $movie_image;
	private $movie_trailer;
	private $movie_full;
	
	public function renderHead() {
		
		$ptitle = $this->movie_name;
		$pbackground = $this->movie_image;
		
		$head = <<<head
			<title>{$ptitle}</title>
			<link rel="stylesheet" type="text/css" href="Style/vidPgTest.css"></link>
			<link rel="stylesheet" type="text/css" href="Style/media_player.css"></link>
			<script type="text/javascript" src="Scripts/vidPgTest.js"></script>
			<script type="text/javascript" src="Scripts/media_player.js"></script>

			<style>
				#test-body{
					background-image: url("{$pbackground}");
					background-repeat: no-repeat;
				}
			</style>
head;
		return $head;
	}
	
	public function renderBody() {
		
		$trailer = renderPlayer('100', '80', "$this->movie_trailer");
		
		$body = <<<body
		<div class='movie-details'>
			<div class='show-details'>
				<div class='trailer'>
					{$trailer}
				</div>
				<div class='movie-description'>
					<div class='title-container'>
						<h1>{$this->movie_name}</h1>
						<div id='rating'><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span><span>&#9734;</span></div>
					</div>
					<p>{$this->movie_description}</p>
				</div>
			</div>
			<div class='option-bar'>
				<button class='vid-options'>Watch Now</button>
				<button class='vid-options'>Add to Favourites</button>
				<button class='vid-options'>Who's watching?</button>
				<button class='vid-options'>Invite friends to watch</button>
			</div>
		</div>
		<div class='comment-section'>
			<h1 class='comment-title'>Comments</h1>
			<div class='displayed-comments'></div>
		</div>

body;
		return $body;
	}
	
	public function renderFooter() {
		$footer = <<<footer
			<div class='footer-container'>
				<div>container 1</div>
				<div>container 2</div>
				<div>container 3</div>
			</div>
footer;
		return $footer;
	}
	
	public function createPage($movie) {
		
		$movie_name = $movie;

		$db_connect = new database_connect();
		$db_connection = $db_connect->connect();
		$select_table = $db_connection->query("SELECT * FROM movies WHERE movie_name = '{$movie_name}' ");
		$getData = $select_table->fetch_assoc();
		
		$this->movie_name = $movie_name;
		$this->movie_description = $getData['movie_description'];
		$this->movie_image = $getData['movie_image'];
		$this->movie_trailer = $getData['movie_trailer'];
		
		$html = <<<html
			<!DOCTYPE html>
			<html>
			<head>
				{$this->renderHead($this->movie_name, $this->movie_image)}
			</head>
			<body id='test-body'>
				{$this->renderBody()}
				{$this->renderFooter()}
			</body>
			</html>		

html;
		return $html;
	}
	
}

