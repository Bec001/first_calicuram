<!DOCTYPE html>
<html>
    <head>
        <title>ジャンケンゲーム</title>
        <link rel="stylesheet" href="{{ asset('css/Janken.css') }}">
        <meta charset="utf=8">
    </head>
    <body>
        <h1>ジャンケンゲーム</h1>
        <br>
        <h3>ジャンケンゲームだよ!cpuと勝負しよう！</h3>
        <p><img src='https://myworkpictures.s3.ap-northeast-1.amazonaws.com/%E3%82%B8%E3%83%A3%E3%83%B3%E3%82%B1%E3%83%B3/%E3%81%98%E3%82%83%E3%82%93%E3%81%91%E3%82%93.png'></img></p>
        <!--<form action='/battle' method='get'>-->
        <!--    <input type='text' name='name' value='' placeholder='名前を入力してください'>-->
        <!--    <input type='submit' value='ジャンケンする！'>-->
        <!--</form>-->
        <br>
        <!--@if($errors->has('name'))-->
        <!--    @foreach ($errors->all as $error)-->
        <!--        <p style='color:red'>{{ $error }}</p>-->
        <!--    @endforeach-->
        <!--@endif-->
            <dev class='button'>
                <form action='/battle' method='get'>
                    <input type='hidden' name='yourchoise' value='1'>
                    <input type='submit' class='choise1' value='グー' >
                </form>
                <form action='/battle' method='get'>
                    <input type='hidden' name='yourchoise' value='2'>
                    <input type='submit' class='choise2' value='チョキ' >
                </form>
                <form action='/battle' method='get'>
                    <input type='hidden' name='yourchoise' value='3'>
                    <input type='submit' class='choise3' value='パー'>
                </form>
            </div>
    </body>
</html>