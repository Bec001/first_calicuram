<!DOCTYPE html>
<html>
    <head>
        <title>さいころバトル</title>
    </head>
    <body>
        <h2>{{ $name }}が出した目は...</h2>
        <h1>{{ $you }}です！</h1>
        <p><img src ={{ $playerpicture }}  width="140" height="140"></img></p>
        <h2>サイコロくんが出した目は...</h2>
        <h1>{{ $cpu }}です！</h1>
        <p><img src="https://myworkpictures.s3.ap-northeast-1.amazonaws.com/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD%E3%81%AE%E3%82%AD%E3%83%A3%E3%83%A9.png"width="140" height="140"></img><img src ={{ $cpupicture }}  width="140" height="140"></img></p>
        <h1>{{ $judgement }}</h1>
        <form action="/battle">
            <input type='hidden' name='name' value={{ $name }}>
            <input type='submit' value='もう一回！'>
        </form>
        <br>
        <button type=submit><a href="/">最初に戻る</a></button>
    </body>
</html>