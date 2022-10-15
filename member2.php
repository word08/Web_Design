<?php include('menu_mange.php')?>
<?php
    $con = mysqli_connect('localhost','admin','1234');
    mysqli_select_db($con,"shop");
    mysqli_query($con,"set names utf8");
?>
<br>
 <button><a href='member2.php?page=add'>新增會員</a></button>
<table width=50%>
    <tr>
        <td colspan='3' class='orange'>會員管理</td>
    </tr>
    <tr>
        <td>名稱</td>
        <td>帳號</td>
        <td>密碼</td>
    </tr>

<?php
        $sql='select * from member';
      $data=mysqli_query($con ,$sql);
    while($list=mysqli_fetch_array($data)){
        echo"<tr>";
        echo"<td>$list[name]</td>";
        echo"<td>$list[acc]</td>";
        echo"<td>$list[password]</td>";
        echo'</tr>';
    }
?>   
</table>
    <?php if (@$_GET['page']=='add'){?>
    <br>
    <from  action='member2.php?page=add_model' method='post'>
        <table width=50%>
    <tr>
        <td colspan='3' class='orange'>新增</td>
    </tr>
    <tr>
        <td>名稱</td>
        <td><input name='name'></td>
    </tr>
    <tr>
        <td>帳號</td>
        <td><input name='acc'></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input name='password'></td>
    </tr>
    </table>
    <input type='submit'>
    </from>
    <?php } ?>

    <?php if ($_GET['page']=='add_model'){
        echo $_POST['name'];
        #mysqli_query($con, "insert into member (name ,acc,password)value($_POST)");
} 
?>