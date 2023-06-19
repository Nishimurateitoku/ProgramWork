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
        <main>
            <h2>アカウント登録画面</h2>
            <form name="Account" action="regist_confirm.php" method="post">
                <label>名前（姓）</label>
                <input type="text" name="family_name" size="35">
                <br>
                <label>名前（名）</label>
                <input type="text" name="last_name" size="35">
                <br>
                <label>カナ（姓）</label>
                <input type="text" name="family_name_kana" size="35">
                <br>
                <label>カナ（名）</label>
                <input type="text" name="lasr_name_kana" size="35">
                <br>
                <label>メールアドレス</label>
                <input type="text" name="mail" size="35">
                <br>
                <label>パスワード</label>
                <input type="text" name="password" size="35">
                <br>
                性別
                <label><input type="radio" name="sex" value="Male">男</label>
                <label><input type="radio" name="sex" value="Female">女</label>
                <br>
                <label>郵便番号</label>
                <input type="text" name="postal_code" size="15">
                <br>
                <label>住所（都道府県）</label>
                <input type="text" name="prefecture" size="15">
                <br>
                <label>住所（市区町村）</label>
                <input type="text" name="address_1" size="35">
                <br>
                <label>住所（番地）</label>
                <input type="text" name="address_2" size="35">
                <br>
                <label>アカウント権限</label>
                <input type="text" name="authority" size="15">
                <br>
                <div>
                    <input type="submit" value="確認する">
                </div>


            </form>
        </main>
        <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programing 
        </footer>
       
    </body>
</html>