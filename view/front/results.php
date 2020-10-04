<?php
    include '../../controller/SearchController.php';
    $search = new SearchController();
    $result = $search->getAll();
    foreach ($result as $row) {
        echo "<div> ";
            echo "<h2>".$row['site_title']."</h2>";
            echo "
            <h4>
                <a href=".$row['site_link'].">
                    ".$row['site_link']."
                </a>
            </h4>";
            echo "<p>".$row['site_description']."</p>";
        echo "</div>";
    }
?>