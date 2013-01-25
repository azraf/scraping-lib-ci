<!DOCTYPE html>
<html>
    <head>
        <title>Scraping library with SimpleHtmlDom for CodeIgniter 2.1</title>
    </head>
    <body>
        <div>
            <form action="" method="get">
                <span>URL: </span>&nbsp;<input type="text" name="url" id="url"/>&nbsp;&nbsp;&nbsp;
                <input type="submit" value="GO!">
            </form>
            <br />
            <?php
            if (isset($page)){
                echo'Page url: ' . $url . '<hr />';
                echo $page;
            }
            if (isset($notice)){
                
                echo "<h3>$notice</h3>";
            }
            ?>
        </div>
    </body>
</html>
