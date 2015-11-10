<!DOCTYPE html>
<html>
    <head>
        <title>Game Players</title>

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
            <div class="title">Game Detail {{ $gameID }}</div>
            <div class="content">
                <h2>Players</h2>
                <ul>
                    @foreach ($players as $player)
                    <li>{{ $player['PlayerName'] }}</li>
                    @endforeach
                </ul>
                <div class="goback"><a href="/games/{{ $gameID }}">- Back -</a></div>
            </div>
        </div>
    </body>
</html>