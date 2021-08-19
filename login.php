<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css" integrity="sha256-QVBN0oT74UhpCtEo4Ko+k3sNo+ykJFBBtGduw13V9vw=" crossorigin="anonymous" />

    <style type="text/css">
        body {
        background-color: #DADADA;
        }
        body > .grid {
        height: 100%;
        }
        .image {
        margin-top: -100px;
        }
        .column {
        max-width: 450px;
        }
    </style>    
</head>
<body>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
        <img src="assets/images/logo.png" class="image">
        <div class="content">
            Log-in to your account
        </div>
        </h2>
        <form class="ui large form">
        <div class="ui stacked segment">
            <div class="field">
            <div class="ui left icon input">
                <i class="user icon"></i>
                <input type="text" name="email" placeholder="E-mail address">
            </div>
            </div>
            <div class="field">
            <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            </div>
            <div class="ui fluid large teal submit button">Login</div>
        </div>

        <div class="ui error message"></div>

        </form>

        <div class="ui message">
        New to us? <a href="#">Sign Up</a>
        </div>
    </div>
</div>
    
</body>
</html>