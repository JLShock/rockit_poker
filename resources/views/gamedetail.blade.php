<!DOCTYPE html>
<html>
    <head>
        <title>Game Detail</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100,200,300,700,900" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/styles.css">
    </head>
    <body>
        <header>
            <div class="icon">
        </header>
        <nav>
            <a href="/index.php">Home</a>
            <a href="/games">Games</a>
            <a href="/players">Players</a>
        </nav>
        <div class="container">
            <div class="title">Game Detail {{ $game['GameID'] }}</div>
            <div class="content">
                <h2>{{ $game['GameName'] }}</h2>
                <p><a href="/games/{{ $game['GameID'] }}/players">Players</a></p>
                <p>State - Open</p>
                <button>Join<br>Game</button>
                <div class="goback"><a href="/games">- Back to Games -</a></div>
            </div>
        </div>
    </body>
</html>