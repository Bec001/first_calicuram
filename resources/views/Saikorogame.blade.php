<!DOCTYPE html>
<html>
    <head>
        <title>さいころバトル</title>
    </head>
    <body>
        <h1>サイコロを振ってバトル！</h1>
        <p><img src="https://myworkpictures.s3.ap-northeast-1.amazonaws.com/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD%E3%81%AE%E3%82%AD%E3%83%A3%E3%83%A9.png"width="140" height="140"></img></p>
        <form action='/battle', method='get'>
            <input type='text' name='name' value='' placeholder='名前を入力'>
            <input type='submit' value='サイコロを振る'>
        </form>
        @if($errors->has('name'))
            @foreach ($errors->all() as $error)
                <p style="color:red">{{ $error }}</p>
            @endforeach
        @endif
    </body>
</html>