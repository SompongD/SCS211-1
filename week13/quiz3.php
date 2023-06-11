<?php
$people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"), true);
$people = $people_obj["people"];
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>

    <h2>Responsive "Meet The Team" Section</h2>
    <p>Resize the browser window to see the effect.</p>
    <br>

    <div class="row">
    <?php foreach($people as $row){ ?>
        <div class="column">
            <div class="card">
                <img src="<?=$row["image"]?>" style="width:100%">
                <div class="container">
                    <h2><?=$row["name"]?></h2>
                    <p class="title"><?=$row["role"]?></p>
                    <p><?=$row["education"]?></p>
                    <p><?=$row["email"]?></p>
                    <p><?=$row["phone"]?></p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>

</body>

</html>