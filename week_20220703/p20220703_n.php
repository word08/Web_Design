<!-- login.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login_style.css">
    <title>會員登入</title>
</head>

<body>
    <div id="title">使用者登入</div>

    <?php
    // 刪除 prev_verify cookie
    // setcookie("prev_verify", '', time() - 3600);

    if (!isset($_COOKIE["prev_verify"])) {
        setcookie("prev_verify", "default", time() + 3600);
    }
    ?>

    <form action="" method="post" id="content">
        <table>
            <tr>
                <td>
                    <div class="sub-title">帳號：</div>
                </td>
                <td>
                    <input class="login-input" type="text" name="acct">
                </td>
            </tr>
            <tr>
                <td>
                    <div class="sub-title">密碼：</div>
                </td>
                <td>
                    <input class="login-input" type="password" name="pswd">
                </td>
            </tr>
            <tr>
                <td>
                    <div class="sub-title">驗證碼：</div>
                </td>
                <td>
                    <input class="login-input" type="text" name="verify">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div class="login-input" id="verify">
                        <?php
                        $n1 = rand(0, 9);
                        $n2 = rand(0, 9);
                        $n3 = rand(0, 9);
                        $n4 = rand(0, 9);

                        $rand_num = "$n1$n2$n3$n4";
                        echo $rand_num;
                        ?>
                    </div>
                </td>
            </tr>
        </table>
        <div id="btns">
            <button id="yes">確定</button>
            <button id="cancel">取消</button>
        </div>
    </form>

    <?php
    setcookie("prev_verify", $rand_num, time() + 3600);
    if (isset($_POST['acct']) && isset($_POST['pswd']) && isset($_POST['verify'])) {
        $acct = htmlspecialchars($_POST['acct']);
        $pswd = htmlspecialchars($_POST['pswd']);
        $verify = htmlspecialchars($_POST['verify']);
    } else {
        $acct = '';
        $pswd = '';
        $verify = '';
    }

    // echo "acct: {$_POST['acct']}<br>";
    // echo "pswd: {$_POST['pswd']}<br>";
    // echo "verify: {$_POST['verify']}<br>";
    // echo "_COOKIE['prev_verify']: {$_COOKIE['prev_verify']}<br>";
    ?>

    <?php if ($acct === "test" && $pswd === "test" && $verify === $_COOKIE["prev_verify"]) { ?>
        <div id="success">輸入正確</div>
        <meta http-equiv="refresh" content="0.01;url=check.php"> 
    <?php } else if ($acct === "" && $pswd === "" && $verify === "") { ?>
        <!-- 不顯示任何東西 -->
    <?php } else { ?>
        <div id="fail">輸入資訊錯誤</div>
    <?php } ?>

</body>

</html>
