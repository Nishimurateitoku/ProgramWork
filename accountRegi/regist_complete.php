<?php 
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson03; host=localhost;", "root", "");
$pdo->exec("insert into account(id.family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delet_flag,registered_time,update_time)
values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."');");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録完了画面</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <script>
            function 
        </script>
    </head>
    <body>
        <header>
            <img src="diblog_logo.jpg" alt="Logo" class="logo">
            <div class="menu">
                <a href="index.html">トップ</a>
                <a href="prof.html">プロフィール</a>
                <a href="blog.html">ブログについて</a>
                <a href="regist.php">アカウント登録</a>
                <a href="support.html">問い合わせ</a>
                <a href="other.html">その他</a>
            </div>
        </header>
        <main>
            <h2>アカウント登録完了画面</h2>
            <div class="confirm">
                <p>
                    登録完了しました
                </p>
                <input type="button" value="TOPページへ戻る"　onClick="location.href='index.html'">
            </div>
        </main>
        <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programing 
        </footer>
    </body>
</html>