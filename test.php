<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include('includes/simplehtmldom_1_9_1/simple_html_dom.php');
        $html = file_get_html('https://matpetfamily.com/danh-muc-san-pham/danh-muc-cun/husky-siberian/');
        foreach($html->find('img') as $element) {
            echo '<img src="'.$element->src.'" /><br>';
     }
    ?>
</body>
</html>