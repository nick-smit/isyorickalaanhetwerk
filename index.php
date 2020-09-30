<?php
$isWorking = (new DateTime())->format('H') > 10 || (new DateTime())->format('H') < 18;
?>

<html>
<head>
    <style>
        html, body {
            margin:0; padding:0;
        }
        body {
            height: 100%;
            width: 100%;
        }

        body > div {
            display: flex;
            justify-content: center;
            align-content: center;
            height: 100%;
        }

        div > div {
            padding-top: 250px;
            font-weight: 900;
            font-size: 300px;
        }

        footer {
            position: absolute;
            bottom: 0;
            text-align: center;
            width:100%;
        }
    </style>
    <title>Is Yorick al aan het werk?</title>
</head>
<body>
    <div>
        <div><?= $isWorking ? 'JA' : 'NEE'?></div>
    </div>
    <footer>
        Yorick werkt tussen 10:00 en 18:00 uur.
    </footer>
</body>
</html>
