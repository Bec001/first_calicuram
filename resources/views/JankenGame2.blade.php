<!DOCTYPE html>
<html>
    <head>
        <title>ジャンケン結果</title>
    </head>
    <body>
        <h2>あなたが出した手は…{{ $you }}<h2>
        <h2>CPUが出した手は…{{ $cpu }}</h2>
        <h1>結果は…{{ $message }}<h1>
        <br>
        <button type=submit><a href="/">最初に戻る</a></button>
    </body>