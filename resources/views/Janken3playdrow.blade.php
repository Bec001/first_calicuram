<!DOCTYPE html>
<html>
    <head>
        <title>ジャンケン結果</title>
    </head>
    <body>
        <h2>あなたが出した手は…{{ $you }}</h2>
        <h2>CPU1が出した手は…{{ $cpu }}</h2>
        <h2>CPU2が出した手は…{{ $cpu2 }}</h2>
        <h1>結果は…{{ $message }}</h1>
        <h2>あいこでしょ！</h2>
        <br>
        <div class='button'>
            <form action='/battle' method='get'>
                <input type='hidden' name='yourchoise' value='1'>
                <input type='submit' class='choise1' value='グー'>
            </form>
            <form action='/battle' method='get'>
                <input type='hidden' name='yourchoise' value='2'>
                <input type='submit' class='choise2' value='チョキ'>
            </form>
            <form action='/battle' method='get'>
                <input type='hidden' name='yourchoise' value='3'>
                <input type='submit' class='choise3' value='パー'>
            </form>
        </div>
    </body>
</html>
