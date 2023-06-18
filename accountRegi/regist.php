<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <?php/*
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id'])||isset($_POST['family_name'])||isset($_POST['last_name'])||isset($_POST['family_name_kana'])||isset($_POST['last_name_kana'])||isset($_POST['mail'])||isset($_POST['password'])||isset($_POST['gender'])||isset($_POST['postal_code'])||isset($_POST['prefecture'])||isset($_POST['address_1'])||isset($_POST['address_2'])||isset($_POST['authority'])||isset($_POST['delete_flag'])||isset($_POST['registered_time'])||isset($_POST['update_time'])) {
                $isset_status = 'POSTED, isset() True';
            } else {
                $isset_status = 'POSTED, isset() False';
                $_POST['name'] = '';
                $_POST['mail'] = '';
                $_POST['age'] = '';
                $_POST['comments'] = '';
            }
        } else {
            $isset_status = 'started without POST';
            $_POST['name'] = '';
            $_POST['mail'] = '';
            $_POST['age'] = '選択してください';
            $_POST['comments'] = '';
        }*/
        ?>
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
        <h2>アカウント登録画面</h2>
        <form name="Account" action="regist_confirm.php" method="post">
            <label>名前（姓）</label>
            <imput type="text" name="family_name"></imput>
            
        </form>
       
    </body>
</html>