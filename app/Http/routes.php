<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/games', function () {

	// Get the games from DB
	try {
		$db = new PDO('mysql:host=localhost;dbname=poker;charset=utf8', 'root', '');

		$statement = $db->prepare('SELECT gameID, gameName FROM Game');
		$statement->execute();
		$games = $statement->fetchAll();

		return view('games', ["games"=>$games]);

	} catch (PDOExecption $e) {
		die($e->getMessage());
	}

});


Route::get('/games/{id}', function ($gameID) {
	
	try {
		$db = new PDO('mysql:host=localhost;dbname=poker;charset=utf8', 'root', '');

		$statement = $db->prepare('SELECT * FROM Game where gameID = ' . $gameID);
		$statement->execute();
		$game = $statement->fetch();

		return view('gameDetail', ["game"=>$game]);

	} catch (PDOExecption $e) {
		die($e->getMessage());
	}

});


Route::get('/games/{id}/players', function ($gameID) {

    try {
		$db = new PDO('mysql:host=localhost;dbname=poker;charset=utf8', 'root', '');

		$sql = "SELECT * FROM Player as p, GamePlayers as gp where gp.playerID = p.playerID and gp.gameID = $gameID";
		$statement = $db->prepare($sql);
		$statement->execute();
		$players = $statement->fetchAll();

		return view('gamePlayers', ["gameID"=>$gameID, "players"=>$players]);

	} catch (PDOExecption $e) {
		die($e->getMessage());
	}

});


Route::get('/players', function () {

    // Get the players from DB
	try {
		$db = new PDO('mysql:host=localhost;dbname=poker;charset=utf8', 'root', '');

		$statement = $db->prepare('SELECT playerID, playerName FROM Player');
		$statement->execute();
		$players = $statement->fetchAll();

		return view('players', ["players"=>$players]);

	} catch (PDOExecption $e) {
		die($e->getMessage());
	}

});