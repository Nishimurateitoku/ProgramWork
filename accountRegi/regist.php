<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['family_name'])||isset($_POST['last_name'])||isset($_POST['family_name_kana'])||isset($_POST['last_name_kana'])||isset($_POST['mail'])||isset($_POST['password'])||isset($_POST['gender'])||isset($_POST['postal_code'])||isset($_POST['prefecture'])||isset($_POST['address_1'])||isset($_POST['address_2'])||isset($_POST['authority'])) {
                $isset_status = 'POSTED, isset() True';
            } else {
                $isset_status = 'POSTED, isset() False';
                $_POST['family_name'] = '';
                $_POST['last_name'] = '';
                $_POST['family_name_kana'] = '';
                $_POST['last_name_kana'] = '';
                $_POST['mail'] = '';
                $_POST['password'] = '';
                $_POST['gender'] = '';
                $_POST['postal_code'] = '';
                $_POST['prefecture'] = '';
                $_POST['address_1'] = '';
                $_POST['address_2'] = '';
                $_POST['authority'] = '';
            }
        } else {
            $isset_status = 'started without POST';
            $_POST['family_name'] = '';
            $_POST['last_name'] = '';
            $_POST['family_name_kana'] = '';
            $_POST['last_name_kana'] = '';
            $_POST['mail'] = '';
            $_POST['password'] = '';
            $_POST['gender'] = '';
            $_POST['postal_code'] = '';
            $_POST['prefecture'] = '';
            $_POST['address_1'] = '';
            $_POST['address_2'] = '';
            $_POST['authority'] = '選択してください';
        }
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
                <div>
                    <label>名前（姓）</label>
                    <input class="text" type="text" name="family_name" size="35" value="<?php echo $_POST['family_name']; ?>">
                </div>
                <br>
                <div>
                    <label>名前（名）</label>
                    <input class="text" type="text" name="last_name" size="35" value="<?php echo $_POST['last_name']; ?>">
                </div>
                <br>
                <div>
                    <label>カナ（姓）</label>
                    <input class="text" type="text" name="family_name_kana" size="35" value="<?php echo $_POST['family_name_kana']; ?>">
                </div>
                <br>
                <div>
                    <label>カナ（名）</label>
                    <input class="text" type="text" name="last_name_kana" size="35" value="<?php echo $_POST['last_name_kana']; ?>">
                </div>
                <br>
                <div>
                    <label>メールアドレス</label>
                    <input class="text" type="text" name="mail" size="35" value="<?php echo $_POST['mail']; ?>">
                </div>
                <br>
                <div>
                    <label>パスワード</label>
                    <input class="text" type="text" name="password" size="35" value="<?php echo $_POST['password']; ?>">
                </div>
                <br>
                <div>
                    <label>性別</label>
                    <label class="gender"><input type="radio" name="gender" value="0">男</label>
                    <label class="gender"><input type="radio" name="gender" value="1">女</label>
                </div>
                <br>
                <div>
                    <label>郵便番号</label>
                    <input class="text" type="text" name="postal_code" size="15" value="<?php echo $_POST['postal_code']; ?>">
                </div>
                <br>
                <div>
                    <label>住所（都道府県）</label>
                    <input class="text" type="text" name="prefecture" size="15" value="<?php echo $_POST['prefecture']; ?>">
                </div>
                <br>
                <div>
                    <label>住所（市区町村）</label>
                    <input class="text" type="text" name="address_1" size="35" value="<?php echo $_POST['address_1']; ?>">
                </div>
                <br>
                <div>
                    <label>住所（番地）</label>
                    <input class="text" type="text" name="address_2" size="35" value="<?php echo $_POST['address_2']; ?>">
                </div>
                <br>
                <div>
                    <label>アカウント権限</label>
                    <select name="authority">
                        <option value="選択してください">選択してください</option>
                        <option value="0">一般</option>
                        <option value="1">管理者</option>
                    </select>
                </div>
                <br>
                <div>
                    <input class="sub" type="submit" value="確認する">
                </div>


            </form>
        </main>
        <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programing 
        </footer>
       
    </body>
</html>