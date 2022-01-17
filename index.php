<?php
    $uncensored = 'She sells sea shells by the sea shore. The shells she sells are surely seashells. So if she sells shells on the seashore, I\'m sure she sells seashore shells.';
    $censored = str_replace($_GET['Badword'],'*****',$uncensored);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <h1>BadWords</h1>

<!-- this is the uncensored paragraph -->
    <h2>This is the uncensored one:</h2>
    <p><?php echo $uncensored ?></p>
    <p>String length:<?php echo strlen($uncensored); ?></p>
<!-- this is the uncensored paragraph's end -->

</body>
</html>