<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
            <h2>アカウント登録確認画面</h2>
            
            <p>名前（姓）<span><?php echo $_POST['family_name']; ?></span></p>
            <p>名前（名）<span><?php echo $_POST['last_name']; ?></span></p>
            <p>カナ（姓）<span><?php echo $_POST['family_name_kana']; ?></span></p>
            <p>カナ（名）<span><?php echo $_POST['last_name_kana']; ?></span></p>
            <p>メールアドレス<span><?php echo $_POST['mail']; ?></span></p>
            <p>パスワード<span><?php echo $_POST['password']; ?></span></p>
            <p>性別<span><?php echo $_POST['sex']; ?></span></p>
            <p>郵便番号<span><?php echo $_POST['postal_code']; ?></span></p>
            <p>住所（都道府県）<span><?php echo $_POST['prefecture']; ?></span></p>
            <p>住所（市区町村）<span><?php echo $_POST['address_1']; ?></span></p>
            <p>住所（番地）<span><?php echo $_POST['address_2']; ?></span></p>
            <p>アカウント権限<span><?php echo $_POST['authority']; ?></span></p>
            
            <form action="regist.php" method="post">
                <input type="submit" class="button1" value="前に戻る">
            </form>
            <form action="insert.php" method="post">
                <input type="submit" class="button2" value="登録する">
            </form>
            
        </main>
        <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programing 
        </footer>
        
    </body>
</html>