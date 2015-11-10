<!DOCTYPE html>
<html>
    <head>
        <title>Players</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100,200,300,700,900" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="styles.css">
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
            <div class="title">Players</div>
            <div class="content">
                <ul>
                    @foreach ($players as $player)
                    <li><a href="">{{ $player['playerName'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>