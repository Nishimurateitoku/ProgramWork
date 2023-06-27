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
            <form name="myForm" class="validationForm" action="regist_confirm.php" method="post" novalidate>
                <div>
                    <label for="family_name">名前（姓）</label>
                    <input class="required pattern" type="text" id="family_name" name="family_name" size="35" id="family_name" value="<?php echo $_POST['family_name']; ?>" ,maxlength="10" data-pattern="name1" data-error-pattern="ひらがなもしくは漢字で入力してください"　data-error-required="※名前（姓）が未入力です">
                </div>
                <br>
                <div>
                    <label for="last_name">名前（名）</label>
                    <input class="required pattern" type="text" id="family_name" name="last_name" size="35" id="last_name" value="<?php echo $_POST['last_name']; ?>" maxlength="10" data-pattern="name1" data-error-pattern="ひらがなもしくは漢字で入力してください"　data-error-required="※名前（名）が未入力です">
                </div>
                <br>
                <div>
                    <label for="family_name_kana">カナ（姓）</label>
                    <input class="required pattern" type="text" name="family_name_kana" size="35" id="family_name_kana" value="<?php echo $_POST['family_name_kana']; ?>" maxlength="10" data-pattern="name2" data-error-pattern="全角カナで入力してください"　data-error-required="※カナ（姓）が未入力です">
                </div>
                <br>
                <div>
                    <label for="last_name_kana">カナ（名）</label>
                    <input class="required pattern" type="text" name="last_name_kana" size="35" id="last_name_kana" value="<?php echo $_POST['last_name_kana']; ?>" maxlength="10" data-pattern="name2"　data-error-pattern="全角カナで入力してください" data-error-required="※カナ（名）が未入力です">
                </div>
                <br>
                <div>
                    <label>メールアドレス</label>
                    <input class="required pattern" type="text" name="mail" id="mail" size="35" value="<?php echo $_POST['mail']; ?>" maxlength="100" data-pattern="email" data-error-pattern="メールアドレスには@やドメインが必要です" data-error-required="※メールアドレスが未入力です">
                </div>
                <br>
                <div>
                    <label>パスワード</label>
                    <input class="required pattern" type="text" name="password" id="password" size="35" value="<?php echo $_POST['password']; ?>" maxlength="10" data-pattern="password"　data-error-pattern="半角英数字で入力してください" data-error-required="※パスワードが未入力です">
                </div>
                <br>
                <div>
                    <label>性別</label>
                    <label class="required"><input type="radio" name="gender" value="0"　class="required" data-error-required="男女どちらか選択してください">男</label>
                    <label class="required"><input type="radio" name="gender" value="1">女</label>
                   
                </div>
                <br>
                <div>
                    <label>郵便番号</label>
                    <input class="required pattern" type="text" name="postal_code" size="15" value="<?php echo $_POST['postal_code']; ?>" maxlength="7" data-pattern="postal_code" data-error-pattern="半角数字7文字で入力してください" data-error-required="郵便番号を入力してください">
                </div>
                <br>
                <div>
                    <label>住所（都道府県）</label>
                    <select name="prefecture"　class="required" data-error-required="都道府県が選択されていません"　id="prefecture">
                        <option value="" selected hidden></option>
                        <option value="北海道">北海道</option>
                        <option value="青森">青森</option>
                        <option value="岩手">岩手</option>
                        <option value="宮城">宮城</option>
                        <option value="秋田">秋田</option>
                        <option value="山形">山形</option>
                        <option value="福島">福島</option>
                        <option value="茨城">茨城</option>
                        <option value="栃木">栃木</option>
                        <option value="群馬">群馬</option>
                        <option value="埼玉">埼玉</option>
                        <option value="千葉">千葉</option>
                        <option value="東京">東京</option>
                        <option value="神奈川">神奈川</option>
                        <option value="新潟">新潟</option>
                        <option value="富山">富山</option>
                        <option value="石川">石川</option>
                        <option value="福井">福井</option>
                        <option value="山梨">山梨</option>
                        <option value="長野">長野</option>
                        <option value="岐阜">岐阜</option>
                        <option value="静岡">静岡</option>
                        <option value="愛知">愛知</option>
                        <option value="三重">三重</option>
                        <option value="滋賀">滋賀</option>
                        <option value="京都">京都</option>
                        <option value="大阪">大阪</option>
                        <option value="兵庫">兵庫</option>
                        <option value="奈良">奈良</option>
                        <option value="和歌山">和歌山</option>
                        <option value="鳥取">鳥取</option>
                        <option value="島根">島根</option>
                        <option value="岡山">岡山</option>
                        <option value="広島">広島</option>
                        <option value="山口">山口</option>
                        <option value="徳島">徳島</option>
                        <option value="香川">香川</option>
                        <option value="愛媛">愛媛</option>
                        <option value="高知">高知</option>
                        <option value="福岡">福岡</option>
                        <option value="佐賀">佐賀</option>
                        <option value="長崎">長崎</option>
                        <option value="熊本">熊本</option>
                        <option value="大分">大分</option>
                        <option value="宮崎">宮崎</option>
                        <option value="鹿児島">鹿児島</option>
                        <option value="沖縄">沖縄</option>
                    </select>
                    <div class="error-message">
                        ※都道府県が未入力です
                    </div>
                </div>
                <br>
                <div>
                    <label>住所（市区町村）</label>
                    <input class="text" type="text" name="address_1" size="35" value="<?php echo $_POST['address_1']; ?>" pattern="[\u4E00-\u9FFF\u3040-\u309Fー\u30A1-\u30F6\uFF10-\uFF19|　| ]* + [0-9-]+$"　required>
                    <div class="error-message">
                        ※住所（市区町村）が未入力です
                    </div>
                </div>
                <br>
                <div>
                    <label>住所（番地）</label>
                    <input class="validation" type="text" name="address_2" size="35" value="<?php echo $_POST['address_2']; ?>" pattern="[\u4E00-\u9FFF\u3040-\u309Fー\u30A1-\u30F6\uFF10-\uFF19|　| ]* + [0-9-]+$"　required>
                    <div class="error-message">
                        ※住所（番地）が未入力です
                    </div>
                </div>
                <br>
                <div>
                    <label>アカウント権限</label>
                    <select name="authority">
                        <option value="0" selected>一般</option>
                        <option value="1">管理者</option>
                    </select>
                </div>
                <br>
                <div>
                    <input id="sub" class="sub" type="submit" value="確認する">
                </div>


            </form>
        </main>
        <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programing 
        </footer>
        
        <script src="validation.js"></script>
       
    </body>
</html>