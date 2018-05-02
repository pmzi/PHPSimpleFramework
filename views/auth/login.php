<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <style>

        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #wrapper{
            width: 100%;
            min-height: 100%;
            position: absolute;
            left: 0px;
            top: 0px;
            background-color: whitesmoke;
        }

        #loginBox{
            width: 500px;
            height: 230px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        }

        header{
            width: 100%;
            height: 50px;
            font-weight: bold;
            line-height: 50px;
            text-align: center;
        }

        .row{
            width: 100%;
            height: 30px;
            padding: 5px 0px;
            margin-bottom: 5px;
        }

        .row>input{
            width: 100%;
            outline: none;
            height: 30px;
            border: 1px solid cornflowerblue;
            padding-left: 10px;
            box-sizing: border-box;
        }

        input[type=submit]{
            cursor: pointer;
        }

    </style>

</head>
<body>
    <div id="wrapper">
        <div id="loginBox">
            <form method="post">

                <header>
                    Login Form
                </header>

                <div class="row">

                    <input required type="text" placeholder="Username" />
    
                </div>

                <div class="row">

                    <input required type="password" placeholder="Password" />

                </div>
                
                <div class="row">

                    <input type="submit" value="Login" />

                </div>
            </form>

        </div>
    </div>
</body>
</html>