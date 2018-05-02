<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Title - Blah Blah Blah</title>

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

        #postBox{
            width: 100%;
            max-width: 1000px;
            padding: 10px;
            box-sizing: border-box;
            background-color: white;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            margin: auto;
            margin-top: 20px;
        }

        header{
            width: 100%;
            height: 50px;
            border-bottom: 1px solid #eee;
        }

        header>span{
            width: 100%;
            display: block;
            height: 30px;
            line-height: 30px;
        }
        header>time{
            width: 100%;
            display: block;
            line-height: 20px;
            height: 20px;
            font-size: 12px;
            font-style: italic;
        }

        #postContent{
            width: 100%;
            min-height: 30px;
            line-height: 30px;
            padding: 5px;
            box-sizing: border-box;
        }

    </style>

</head>

<body>
    <div id="wrapper">
        <article id="postBox">
            <header>
                <span>
                    <?php

                    echo $post['title'];

                    ?>
                </span>
                <time>
                    <?php

                    echo $post['created'];

                    ?>
                </time>
            </header>
            <div id="postContent">
                <?php

                    echo $post['content'];

                ?>
             </div>
        </article>
    </div>
</body>

</html>