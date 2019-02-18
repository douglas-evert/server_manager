<html>
<head>
    <meta charset="utf-8" />
    <title>Inventory Manager 0.0.1</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./style/main.css" />
</head>
<body>
    <div class="frame100">
        <div class="title_bar">
            <p> Title </p> 
        </div>
        <div class="left_side_bar">
            <p> left side bar</p>
        </div>
        <div class="main_body">
            <p> Main Body </p>
        </div>

    </div>
    <?php
    include './php/header.php'
    ?>
    <?php
        $test = "testing";
        echo '<p>this is a test</p>';
        echo $_SERVER[HTTP_USER_AGENT];
        echo "\n" . $test;
    ?>
</body>
</html>
