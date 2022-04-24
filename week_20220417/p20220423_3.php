<form action="p20220423_.php">
    <p>登入:<input type ="text" name='name'></p>
    <p>密碼:<input type ='password'name='age'></p>
    <p>驗證碼:<input type='number' name='ye'></p>
    <p><input type="url"></p>
    <p><input type="submit" /></p>
</form>
帳號正確<?php echo htmlspecialchars($_POST['name']);?>
密碼正確 <?php echo htmlspecialchars($_POST['age']);?>