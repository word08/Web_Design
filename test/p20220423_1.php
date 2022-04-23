<?php
    echo"<h3> PHP 中有為數不少的超級全域變數 (superglobals) ，主要是用來接收使用者在 HTML 表單的輸入值，好使伺服器得到資料後能反應給使用者</h3>";
    
?>
  <?php echo $_SERVER['HTTP_USER_AGENT'];?>
   <br>
    <?php echo"<h3> server另用伺服器來顯示該位置</h3>";?>
<?php
  $previous_name = session_name("WebsiteID");

  echo "The previous session name was $previous_name<br />";
  echo"上網找得有點不懂"
  
?>
    
