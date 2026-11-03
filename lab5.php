
<?php
    $file = 'count.txt';
    $c = file_get_contents($file);
    file_put_contents($file, $c+1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f2ff;
            text-align: center;
            margin-top: 100px;
        }

        h1 {
            color: #333399;
        }

        .box {
            background-color: white;
            width: 350px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        p {
            font-size: 20px;
            color: #333;
        }

        .count {
            font-size: 30px;
            font-weight: bold;
            color: green;
        }

        button {
            background-color: #333399;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #5555cc;
        }
    </style>
</head>

<body>

    <div class="box">

        <h1>REFRESH PAGE</h1>

        <p>The number of users visited:</p>

        <p class="count"><?php echo $c; ?></p>

        <button onclick="location.reload()">Refresh</button>

    </div>

</body>
</html>

