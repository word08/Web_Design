<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./p20220430_7.css">
    <title>Document</title>
</head>
<body>
    <div class='gm'>測試</div>
    <form action="p20220430_7.php" method="post" id="ho">
        <div id="type">
            <div class="type-1">
                <div>帳號:</div>
                <div>密碼:</div>
                <div>驗證碼:</div>
            </div>
            <div class="type-2">
                <div><input type="text" name="acct"></div>
                <div><input type="password" name="pswd"></div>
                <div><input type="number" name="verify"></div>
                <div>7152</div>   
            </div>
        </div>
        <div class="bu">
            <button>確定</button>
            <button>取消</button>
        </div>
    </form>
    <?php
        if(isset($_POST['acct']) && isset($_POST['pswd']) && isset($_POST['verify'])){
            $acct =htmlspecialchars($_POST['acct']);
            $pswd= htmlspecialchars($_POST['pswd']);
            $verify= htmlspecialchars($_POST['verify']);
        }else{
            $acct='';
            $pswd='';
            $verify='';
        }

    ?>

    你的帳號:<?php echo $acct; ?><br>
    你的密碼:<?php echo $pswd ?><br>
    你的驗證碼:<?php echo $verify ; ?>
    <br>
    <br>
    <?php if($acct==='test'&& $pswd==='pswdtest' && $verify==='7152') { ?>
        <div id='success'>輸入正確</div>
    <?php } else if($acct==='' && $pswd==='' && $verify===''){ ?>
        <!--不顯示-->
    <?php } else{ ?>
        <div id='fail'>輸入資訊錯誤</div>
    <?php } ?>
</body>
</html>
