<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SITE_NAME ?></title>
</head>
<body>

***** NEW YEARS TOPIC !!!!! **************
<!-- template data -->
<?php echo $content; ?>
</body>
</html>
<div class="row" style="background-color:<?php foreach ($data['back'] as $value) {
    if($value['is_active']==1){
        echo $value['back_color'];
    }
} ?>">