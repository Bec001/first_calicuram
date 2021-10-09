<!DOCTYPE html>
<html>
    <head>
        <title>さいころゲーム</title>
    </head>
    <body>
        <h1>あなたが出した目は...</h1>
        <h2>{{ $saikoro }}です！</h>
        <p><img src = {{ $picture }} width="140" height="140"></img></p>
        <form action='/' method='get'>
            <input type='hidden' name='mode' value='result'>
            <input type='submit' value='もう一回！'>
        </form>
    </body>
</html>