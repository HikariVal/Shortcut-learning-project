<?php require 'header.php';?>
<body>
        <div class="container">
            <div><h1>会員登録</h1></div>
            <form action="backend.php" method="POST">
                <div class="p-5 m-5">
                    <div class="form-group">
                        <label>ユーザー名：</label>
                        <input class="form-control w-50" type="text" name="username" required>
                        <label>メールアドレス：</label>
                        <input class="form-control w-50" type="email" name="email" required>
                        <label>パスワード：</label>
                        <input class="form-control w-50" type="password" name="pass1" required>
                        <label>パスワード確認：</label>
                        <input class="form-control w-50" type="password" name="pass2" required>
                        <div class="text-center mt-3 w-50">
                            <button class="btn btn-outline-info" type="submit" value="signup" name="signup">会員登録</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</body>