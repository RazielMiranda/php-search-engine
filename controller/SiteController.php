<?php
if (isset($_POST['submit'])) {
    echo $site_title = $_POST['site_title'];
    echo $site_link = $_POST['site_link'];
    echo $site_keyword = $_POST['site_keyword'];
    echo $site_description = $_POST['site_description'];
    echo $_site_image = $_FILES['_site_image']['name'];
    echo $_site_image_tmp = $_FILE['_site_image']['tmp_image'];
}