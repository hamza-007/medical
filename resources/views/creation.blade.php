<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: linear-gradient(45deg, #ebf7f61b, #e6e7d816) ,url(img/d.jpeg);
            background-repeat: no-repeat;
            background-size:100% 100%;
            height: 100vh;
            font-family: arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            position: relative;
        }

        form {
            background: #f6f9f983;
            padding: 3rem;
            height: 330px;
            border-radius: 20px;
            border-left: 10px solid rgba(255, 255, 255, .3);
            border-top: 1px solid rgba(255, 255, 255, .3);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            -moz-backdrop-filter: blur(10px);
            box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
            text-align: center;
            margin-right: 10px;
        }

        p {
            color: #e62f22;
            font-weight: 500;
            opacity: .7;
            font-size: 1.4rem;
            margin-bottom: 15px;
            margin-top: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
        }

        input {
            background: transparent;
            border: none;
            border-left: 1px solid rgba(255, 255, 255, .3);
            border-top: 1px solid rgba(255, 255, 255, .3);
            padding: 1rem;
            height: 15px;
            width: 200px;
            border-radius: 50px;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            -moz-backdrop-filter: blur(5px);
            box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
            color: black;
            font-weight: 500;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
            transition: all .3s;
            margin-bottom: 1em;
            margin-top: 1px;
            font-size: 16px;
        }

        input:hover,
        input[type="email"]:focus,
        input[type="password"]:focus {
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
        }

        #button{
            background-color: #e62f22;
            padding: 20px;
            margin: 18px;
            padding-bottom: 15%;
            color: white;

        }
        input[type="button"] {
            margin-top: 10px;
            width: 150px;
            font-size: 1rem;
            cursor: pointer;
        }

        ::placeholder {
            color: rgb(201, 160, 160);
        }

        .button{
            padding: 2px;
        }

        .drop {
            background: rgba(255, 255, 255, .3);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 10px;
            border-left: 1px solid rgba(255, 255, 255, .3);
            border-top: 1px solid rgba(255, 255, 255, .3);
            box-shadow: 10px 10px 60px -8px rgba(0, 0, 0, 0.2);
            position: absolute;
            transition: all 0.2s ease;
        }


    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form>
            <p><strong>Inscription</strong></p>
            <input type="text" placeholder="Adresse e-mail"><br>
            <input type="text" placeholder="Nouveau mot de passe"><br>
            <input type="text" placeholder="Confirmer le mot de passe"><br>
            <input type="button" name="Inscription" value="Inscription" id="button">
            <i class="fa-duotone fa-user"></i>
        </form>

    </div>
</body>

</html>
