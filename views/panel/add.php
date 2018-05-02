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

        #postBox {
            width: 100%;
            max-width: 1000px;
            padding: 10px;
            box-sizing: border-box;
            background-color: white;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
            margin: auto;
            margin-top: 20px;
        }

        header {
            width: 100%;
            height: 50px;
            border-bottom: 1px solid #eee;
        }

        header>input {
            width: 100%;
            outline: none;
            height: 30px;
            border: 1px solid cornflowerblue;
            padding-right: 10px;
            box-sizing: border-box;
        }

        #postContent {
            width: 100%;
            min-height: 30px;
            line-height: 30px;
            padding: 5px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            outline: none;
            height: 30px;
            border: 1px solid cornflowerblue;
            padding-right: 10px;
            box-sizing: border-box;
            height: 200px;
            margin-top: 10px;
        }
    </style>

</head>

<body>
    <div id="wrapper">
        <form method="post">
            <div id="postBox">
                <header>
                    <input type="text" value="عنوان">
                </header>
                <textarea>متن</textarea>
                <input type="submit" value="ذخیره" />
            </div>
        </form>
    </div>
</body>

</html>