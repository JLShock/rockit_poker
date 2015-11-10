<!DOCTYPE html>
<html>
    <head>
        <title>Games</title>

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
            <div class="title">Games</div>
            <div class="content">
                <ul>
                    @foreach ($games as $game)
                    <li><a href="/games/{{$game['gameID']}}">{{ $game['gameName'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>