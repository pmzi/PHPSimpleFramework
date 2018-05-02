<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #wrapper {
            width: 100%;
            min-height: 100%;
            position: absolute;
            left: 0px;
            top: 0px;
            background-color: whitesmoke;
            direction: rtl;
        }

        #listBox {
            width: 100%;
            max-width: 1000px;
            padding: 10px;
            box-sizing: border-box;
            background-color: white;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
            margin: auto;
            margin-top: 20px;
        }

        .post {
            width: 100%;
            border-bottom: 1px solid #eee;
            min-height: 50px;
            line-height: 40px;
        }

        .postShortContent {
            width: 100%;
            min-height: 50px;
        }

        .actions {
            width: 100%;
            height: 40px;
            line-height: 40px;
            padding: 5px 0px;
            box-sizing: border-box;
            display: flex;
            align-items: center;
        }

        .actions > a {
            display: block;
            float: right;
            margin-left: 5px;
            border: 1px solid cornflowerblue;
            text-decoration: none;
            box-sizing: border-box;
            height: 20px;
            font-size: 12px;
            line-height: 20px;
        }

        .post:last-of-type {
            border: none;
        }

    </style>

</head>

<body>
<div id="wrapper">
    <div id="listBox">
        <?php

        if (@$_SESSION['isAdmin']) {


            ?>

            <div class="actions">
                <a href="add">
                    افزودن
                </a>
            </div>

            <?php
        }

        ?>
        <?php

        foreach ($posts as $post) {

            ?>

            <article class="post">
                <div class="postShortContent">
                    <a href="show/<?php echo $post['id']; ?>">
                        <?php

                        echo substr($post['title'], 0, 100);

                        ?>
                    </a>
                </div>
                <?php

                if (@$_SESSION['isAdmin']) {


                    ?>

                    <div class="actions">
                        <a href="edit/<?php echo $post['id']; ?>">
                            ویرایش
                        </a>
                        <a href="delete/<?php echo $post['id']; ?>"">
                        حذف
                        </a>
                    </div>

                    <?php
                }

                ?>
            </article>

            <?php

        }

        ?>
    </div>
</div>
</body>

</html>