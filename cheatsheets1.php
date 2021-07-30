<main>
    <?php require("dbconnect.php");
        $shortcuts=$db->query('SELECT * FROM 1key ORDER BY id ASC');
    ?>
    <article>
        <?php 
            echo '<table border="1">
            <tr>
                <th>ID</th>
                <th>Key1</th>
                <th>Category</th>
                <th>Explanation</th>
            </tr>';
            foreach ($shortcuts as $shortcut){
                echo '<tr>';
                echo '<th>'.$shortcut["id"].'</th>';
                echo '<th>'.$shortcut["key1"].'</th>';
                echo '<th>'.$shortcut["category"].'</th>';
                echo '<th>'.$shortcut["explanation"].'</th>';
        }
        ?>
    </article>
</main>

