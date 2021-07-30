<?php
    require 'header.php';
    require 'users.php';
?>
<body>
    <div class="container">
        <h1>ログインしてください</h1>
        <form method="POST" action="backend.php">
            <div class="form-group">
                <label>ユーザー名：</label>
                <input class="form-control w-25" type="text" name="username">
                <label>パスワード：</label>
                <input class="form-control w-25" type="password" name="password" id="password" autocomplete="off">
            </div>
            <div>
                <button class="btn btn-outline-info" type="submit" name="login" value="login" class="submit">ログイン</button>
            </div>
        </form>
    </div>
</body>