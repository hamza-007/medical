<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Staff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

section{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
}
section .imgBx{
    position: relative;
    width: 50%;
    height: 100%;
}
section .imgBx::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(225deg,#1ee9ce10,#dbdfd01a);
    z-index: 1;
    mix-blend-mode: screen;
}
section .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
section .contentBx{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    height: 100%;
}
section .contentBx .formBx{
    width: 50%;
}
section .contentBx .formBx h2{
    color: #8ca681;
    font-weight: 600;
    font-size: 1.5em;
    text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #8de6b6;
    display: inline-block;
    letter-spacing: 1px;
}
section .contentBx .formBx .inputBx{
    margin-bottom: 20px;
}
section .contentBx .formBx .inputBx h3{
    font-size: 20px;
    text-align: left;
    margin-top: -5px;
}
section .contentBx .formBx .inputBx .radio input{
    width: 20px;
    height: 20px;
    border-radius: 25%;
    cursor: pointer;
    outline: none;
    color: #8de6b6;
}
section .contentBx .formBx .inputBx #M{
    margin-left:80px;
    color: #667451;
}
section .contentBx .formBx .inputBx span{
    font-size: 16px;
    margin-bottom: 5px;
    display: inline-block;
    color: #8ca681;
    font-weight: 300;
    font-size: 16px;
    letter-spacing: 1px;
}
section .contentBx .formBx .inputBx input{
    width: 100%;
    padding: 10px 20px;
    outline: none;
    font-weight: 400;
    border: 1px solid#8ca681;
    font-size: 16px;
    letter-spacing: 1px;
    color: #8ca681;
    background: transparent;
    border-radius: 30px;
}
section .contentBx .formBx .inputBx input[type="submit"]{
    background: #8de6b6;
    color: #fff;
    outline: none;
    border: none;
    font-weight: 500;
    cursor: pointer;
}
section .contentBx .formBx .inputBx input[type="submit"]:hover{
    background: #8ca681;
}

section .contentBx .formBx .inputBx p{
    color: #8ca681;
}
section .contentBx .formBx .inputBx p a{
    color: #8de6b6;
}
section .contentBx .formBx h3{
    color: #8ca681;
    text-align: center;
    margin: 80px 0 10px;
    font-weight: 500;
}
section .contentBx .formBx .sci{
    display: flex;
    justify-content: center;
    align-items: center;
}

section .contentBx .formBx .sci li{
    list-style: none;
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #8ca681;
    border-radius: 50%;
    margin: 0 7px;
    cursor: pointer;
}
section .contentBx .formBx .sci li:hover{
    background: #8de6b6;

}
section .contentBx .formBx .sci li a{

    filter: invert(1);
    color: #000;
}
section .contentBx .formBx .radio{
    padding: 10px;
}
@media (max-width: 768px){
    section .imgBx{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;}
    section .contentBx{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    section .contentBx .formBx{
        width: 100%;
        padding: 40px;
        background: rgb(255 255 255 / 0.9);
        margin: 50px;
    }
    section .contentBx .formBx h3{
        color: #00987F;
        text-align: center;
        margin: 30px 0 10px;
        font-weight: 500;
    }
}

</style>
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="img/staff2.jpeg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>
                    Login
                </h2>
                <form method="POST" action="">
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="email" name="email" >
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>

                    <div class="inputBx">
                  <input type="submit" value="Sign in" name="">
                    </div>

                    <div class="inputBx">
                        <p>Don't have an account ? <a href="creation">Sign up</a></p>
                    </div>
                    <div class="inputBx">
                        <p><a href="forgetstaff">Forget your password?</a></p>
                    </div>

                </form>
                <ul class="sci">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>

    </section>
</body>

</html>

