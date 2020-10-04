<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SEARCH ENGINE PROJECT: RESULT PAGE</title>

    <!-- TODO - SOME CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
<main>
    <form action="result.php" method="get">
        <input type="text" name="user_query" id="user_query">
        <input type="submit" name="submit" id="submit">
        <?php

        $host = 'mysql:host=localhost;dbname=search';
        $user = 'root';
        $password = '';

    try {
        $database = new PDO($host, $user, $password);
        
        if (isset($_GET['user_query'])) {

            //TODO - Construct select with LIKE rule
            $userQuery = $_GET['user_query'];
            $sql = "SELECT * FROM sites WHERE site_keyword like = '%'.$userQuery.'%'";
            $data = $database->query($sql);

            var_dump($data);
            exit();

            //TODO - View of search
            foreach ($data as $row => $value) {
                echo "<div> ";
                    echo "<h2>".$row['site_title']."</h2>";
                    echo "
                    <h4>
                        <a href=".$row['site_link'].">
                            ".$row['site_link']."
                        </a>
                    </h4>";
                    echo "<p>".$row['site_description']."</p>";
                    echo "<img src='images/$site_image' width='100%'>";

                echo "</div>";
                }

        }

        $database = null;
    } catch (PDOException $e) {
        print "Error with database!: " .__FILE__. $e->getMessage() . "<br/>";
        die();
    }
    
?>
    </form>
</main>
</body>
</html>
