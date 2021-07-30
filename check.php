<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortcut-Learingsite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .container-site h1 {
            position: relative;
            padding: 1rem 2rem calc(1rem + 10px);
            background: #fff100;
        }
        .container-site h1:before {
            position: absolute;
            top: -7px;
            left: -7px;
            width: 100%;
            height: 100%;
            content: '';
            border: 4px solid #000;
        }
        #answer{
            color:red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../home.html">Shortcut-Learingsite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href class="nav-link" aria-current="page" href="#">search</a></li>
                    <li class="nav-item"><a href class="nav-link" href="#">setting</a></li>
                    <li class="nav-item"><a href class="nav-link" href="#">contact</a></li>
                    <li class="nav-item"><a href class="nav-link" href="#">user</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-site">
        <h1>Please Enter a shortcut!</h1>
        <div id="board">
            <h2 id="hint"></h2>
            <h3 id="answer"></h3>
            <?php require ("dbconnect.php");
                $statement=$db->query('SELECT COUNT(id) FROM 1key');
                $result = $statement->fetch();
                $count = $result[0];
                $random_id=mt_rand(1,$count);
                $answer=$db->query('SELECT key1 FROM 1key Where id='.$random_id);
                $ans=$answer->fetch();
                $an=$ans[0];
                $exp=$db->query('SELECT explanation FROM 1key Where id='.$random_id);
                $exp=$exp->fetch();
                $ex=$exp[0];
            ?>
            <script type="text/javascript">
                document.getElementById("hint").innerHTML="<?php echo $ex;?>";
                window.addEventListener("keydown", function(e) {
                    if("<?php echo $an; ?>"==e.code){
                        document.getElementById("answer").innerHTML="Correct";
                        document.getElementById("answer").style.color = "#00ff00";
                    }
                    else{
                        document.getElementById("answer").innerHTML="Incorrect";
                        document.getElementById("answer").style.color = "#ff0000";
                    }
                });
                document.onkeydown = function (e) {
                    return false;
                }
            </script>
    </div>
</body>
</html>