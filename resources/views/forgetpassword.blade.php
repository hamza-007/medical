<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Patient</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
    color: #00987F;
    font-weight: 600;
    font-size: 1.5em;
    text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #b3d243ce;
    display: inline-block;
    letter-spacing: 1px;
}
section .contentBx .formBx .inputBx{
    margin-bottom: 20px;
}
section .contentBx .formBx .inputBx span{
    font-size: 16px;
    margin-bottom: 5px;
    display: inline-block;
    color: #00987F;
    font-weight: 300;
    font-size: 16px;
    letter-spacing: 1px;
}
section .contentBx .formBx .inputBx input{
    width: 100%;
    padding: 10px 20px;
    outline: none;
    font-weight: 400;
    border: 1px solid#00987F;
    font-size: 16px;
    letter-spacing: 1px;
    color: #00987F;
    background: transparent;
    border-radius: 30px;
}
section .contentBx .formBx .inputBx input[type="submit"]{
    background: #b2d243;
    color: #fff;
    outline: none;
    border: none;
    font-weight: 500;
    cursor: pointer;
}
section .contentBx .formBx .inputBx input[type="submit"]:hover{
    background: #04c4a4;
}
section .contentBx .formBx .remember{
    margin-bottom: 10px;
    color: #00987F;
    font-weight: 400;
    font-size: 14px;
}
section .contentBx .formBx .inputBx p{
    color: #00987F;
    background: #b2d243;
    border-radius: 30px;
    padding-left: 5rem;
    padding-right: 5rem;
    padding-top: .5rem;
    padding-bottom: .5rem;
}
section .contentBx .formBx .inputBx p a{
    color: #fff;
    font-size: 22px;
    margin-left: 3.5rem;
    text-decoration: none;
}
section .contentBx .formBx h3{
    color: #00987F;
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
    background: #00987F;
    border-radius: 50%;
    margin: 0 7px;
    cursor: pointer;
}
section .contentBx .formBx .sci li:hover{
    background: #b2d243;

}
section .contentBx .formBx .sci li a{

    filter: invert(1);
    color: #000;
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
            <div class="contentBx">
                <div class="formBx">
                    <h2>
                      Login
                    </h2>
                    <form>
                        <div class="inputBx">
                            <span>Username or number</span>
                            <input type="text" name="">
                        </div>

                        <div class="inputBx">
                            <p><a href="code">Next <br></a></p>
                         </div>

                    </form>
                    <ul class="sci">
                        <li><a href="code"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="imgBx">
                <img src="img/pa.jpeg">
            </div>

        </section>
    </body>
</html>
