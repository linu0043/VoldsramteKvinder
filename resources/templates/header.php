<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="resources/images/favicon.png">
    <link rel="stylesheet" href="./resources/css/master.min.css">
    <?php if(isset($css)) {
        // If page has an individual css file, link to it
        ?> <link rel="stylesheet" href=<?php echo "./resources/css/" . $css . ".min.css" ?>> <?php
    } ?>
    <?php if (isset($pageTitle)) {
        // If page title is set, add on the page title
        ?> <title><?php echo $pageTitle ?> | Voldsramte Kvinder</title> <?php
    } else {
        ?> <title>Voldsramte Kvinder</title> <?php
    } ?>
</head>
<body>
    <header>
        <div class="siteContainer">
            <div id="titleContainer">
                <img src="resources/images/logo.svg" alt="">
                <h1>Voldsramte Kvinder
                    <span class="uppercase">LANDSFORENINGEN FOR VOLDSRAMTE KVINDER</span>
                </h1>
            </div>
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
            <nav>
                <?php
                    // Associative array containing page information
                    // Key is the file name
                    // Value is the page name used for SEO and for displaying to user
                    $pages = array("index"=>"Forside", "partnervold"=>"Partnervold", "boernogvold"=>"Børn og vold", "etlivudenvold"=>"Et liv uden vold", "omos"=>"Om os", "forum"=>"Forum", "kontakt"=>"Kontakt", "sponsor"=>"Bliv sponsor");

                    foreach($pages as $page => $page_value) {
                        $output = "<div class='navItemContainer'><a href='{$page}.php' ";

                        if ($pageTitle == $page_value) {
                            $output .= "class='active'";
                        }

                        $output .= ">{$page_value}</a>";
                        
                        if($page_value == "Partnervold"){
                            $output .= "<div class='navDropdown'>
                                <a href='krisehjaelp.php'>Krisehjælp</a>
                            </div>";
                        }
                        
                        if($page_value == "Om os"){
                            $output .= "<div class='navDropdown'>
                                <a href='lokalforeninger.php'>Lokalforeninger</a>
                                <a href='beretninger.php'>Beretninger</a>
                            </div>";
                        }

                        $output .= "</div>";
                        echo $output;
                    }
                ?>
            </nav>
        </div>
    </header>