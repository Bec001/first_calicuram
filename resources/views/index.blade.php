<?php
class saikoroView{
    public function index(){
      $header = "<!DOCTYPE html>
                <html>
                  <head>
                    <title>さいころゲーム</title>
                  </head>
                  <body>";
      $body = "<form action='controller.php' method='post'>
                  <input type='hidden' name='mode' value='result'>
                  <input type='submit' value='さいころを振る！'>
              </form>
              
      $footer .= "</body>
                </html>";
                  
      $result = $header.$body.$footer;
                  
      return $result;
    }
    
    public function result($saikoro){
      $header = "<!DOCTYPE html>
                <html>
                  <head>
                    <title>さいころゲーム</title>
                  </head>
                  <body>";
                  
      $body = "<h1>あなたが出した目は...</h1>";
      
      $body .= "<h2>".$saikoro."です！</h2>";
                  
      $body .= "<form action='controller.php' method='post'>
                  <input type='hidden' name='mode' value='index'>
                  <input type='submit' value='もう一回！'>
              </form>";
        
        
      $footer .= "</body>
                </html>";
                  
      $result = $header.$body.$footer;
      
      return $result;
    }
}
?>
