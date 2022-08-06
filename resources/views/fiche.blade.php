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
            height: 500px;
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
        #date{
            color: #000;
        }
        #button{
            background-color: #e62f22;
            padding: 25px;
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
            color: rgb(127, 45, 45);
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
        <form method="POST" action="http://localhost:8000/api/addpatient">
            <p><strong> Patient</strong></p>
            <!-- <input name="id" type="text" placeholder="N°Dossier"><br> -->
            <input name="nom" type="text" placeholder="Nom"><br>
            <input name="prenom" type="text" placeholder="Prenom"><br>
            <input name="date" type="datetime-local" id="date"><br>
            <input name="age" type="number" placeholder="Age"><br>
            <input name="profession" type="text" placeholder="Profession"><br>


            <p><strong>Coordonnées Patient</strong></p>
            <input name="email" type="email" placeholder="Email"><br>
            <input name="num1" type="number" placeholder="Téléphone 01"><br>
            <input name="num2"type="number" placeholder="Téléphone 02"><br>
            <input name="adresse" type="text" placeholder="Adresse"><br>

            <p><strong>Autre</strong></p>
            <input name="sexe" type="text" placeholder="Sexe"><br>
            <input name="groupes" type="text" placeholder="Groupe Sanguin"><br>
            <input name="etat" type="text" placeholder="etat Familial"><br>
            <input name="note" type="text" placeholder="Note"><br>
            <button type="submit" id="button">suivant</button>
        </form>
    </div>
</body>

</html>
