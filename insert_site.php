<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SEARCH ENGINE PROJECT: INSERT SITE</title>

    <!-- TODO - SOME CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
<main>
    <form action="insert_site.php" method="post" enctype="multipart/form-data">
        <table width="800" cellspacing="2">

            <tr>
                <td><h2>Inserting new website</h2></td>
            </tr>

            <tr id="site_title">
                <td>Site Title</td>
                <td>
                    <input type="text" name="site_title" >
                </td>
            </tr>

            <tr id="site_link">
                <td>Site Link</td>
                <td>
                    <input type="text" name="site_link">
                </td>
            </tr>

            <tr id="site_keyword">
                <td>Site Keywords</td>
                <td>
                    <input type="text" name="site_keyword" >
                </td>
            </tr>

            <tr id="site_description">
                <td>Site Description</td>
                <td>
                    <input type="text" name="site_description" >
                </td>
            </tr>

            <tr id="site_image">
                <td>Site Image</td>
                <td>
                    <input type="file" name="site_image">
                </td>
            </tr>

            <tr id="submit">
                <td>
                    <input type="submit" name="submit" >
                </td>
            </tr>

        </table>
    </form>
</main>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    echo $site_title = $_POST['site_title'];
    echo $site_link = $_POST['site_link'];
    echo $site_keyword = $_POST['site_keyword'];
    echo $site_description = $_POST['site_description'];
    echo $site_image = $_FILES['site_image']['name'];
    echo $site_image_tmp = $_FILES['site_image']['tmp_name'];
}
?>