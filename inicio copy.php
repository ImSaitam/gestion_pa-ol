<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
</head>
<body>
    <div id="pagina">
        <div id="header">
            <button class="logo imagen"></button>
            <button class="usuario imagen"></button>
        </div>
        <div id="subheader">
            <h1>SOY UN TITULO</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div id="contenido">
            <div class="barra">
                <button class="equis"></button>
                <input type="text" placeholder="Buscar..">
                <div></div>
            </div>
            <div class="contenido2">
                <div class="con3" id="inicio">
                    <h1>TITULO</h1>
                    <div class="scrollx">
                        <div class="conscroll">
                            <button class="cubo"></button>
                            <button class="cubo"></button>
                            <button class="cubo"></button>
                            <button class="cubo"></button>
                            <button class="cubo"></button>
                            <button class="cubo"></button>
                            
                        </div>
                    </div>
                    <h1>PAÑOLEROS</h1>
                    <div class="scrollx"style="height: 28vh;">
                        <div class="conscroll2" > 
                            <div class="cubo2"></div>     
                            <div class="cubo2"></div>       
                        </div>
                    </div>
                </div>
                <div class="con3" id="pedidos" style="display:none">

                </div>
                <div class="con3" id="reportes" style="display:none">

                </div>
            </div>
        </div>
        <div id="footer">
            <button class="logoboton imagen izquierda"></button>
            <button class="logoboton imagen centro"></button>
            <button class="logoboton imagen derecha"></button>
        </div>
    </div>
    
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Days+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
.equis{
    background-image: URL(imagenes/x.png);
    background-size: 2vh;
    background-repeat:no-repeat;
    background-position: center;
}

.scrollx{
    position: relative;
    overflow-x: auto;
    overflow-y: none;
    height: 20vh;
    width: 100%;
    display: grid ;

}

.conscroll{
    overflow: hidden;
    position: absolute;
    width: auto;
    height:100%;
    left:0%;
    top:0%;
    gap:1vh;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
   
}
.conscroll2{
    overflow: hidden;
    position: absolute;
    width: auto;
    height:100%;
    left:0%;
    top:0%;
    gap:1vh;
    display: flex;
    flex-direction: row;
    
}
.barra{
    background-color:#4139E6;
    position: absolute;
    border-radius: 5vh;
    display: grid;
    grid-template-columns: 5vh auto 5vh;
    gap:2vh;
    height: 5vh;
    width: 60%;
    left:50%;
    right:50%;
    transform: translate(-50%, -50%);
}

.cubo{
    background-color:#4139E6;
    height: 20vh;
    width: 20vh;
    border-radius: 2vh;
}
.cubo2{
    background-color:#4139E6;
    height: 28vh;
    width: 20vh;
    border-radius: 2vh;
}
#pagina{
    position: absolute;
    right:0%;
    top:0%;
    height:100%;
    width: 100%;
    display:grid;
    grid-template:
    "HEA HEA HEA"7vh
    "SHEA SHEA SHEA"20vh
    "CON CON CON"auto
    "FOO FOO FOO"8vh/
    auto auto auto;
    background-color:#202427;
}
#header{
    padding-left:1vh;
    padding-right:1vh;
    display: grid;
    grid-template:
    ". . ." auto
    "LOGO . USUARIO"5vh
    ". . ." auto/
    5vh auto 5vh;
    grid-area: HEA;
    background-color:#202427;
    box-shadow: 1vh 0.5vh 3vh 0vh rgba(61, 58, 230, 0.1);
}
#header :nth-child(1){
    grid-area:LOGO;
}
#header :nth-child(2){
    grid-area:USUARIO;
}
h1{
    font-family: "Days One", sans-serif;
    font-size: 2vh;
    font-weight: 200;
    color: white;
}
p{
    font-family: "Poppins", sans-serif;
    font-size: 2vh;
    font-weight: 200;
    color: white;
}
input{
    font-family: "Poppins", sans-serif;
    font-size: 2vh;
    font-weight: 200;
    color: white;
    border:none;
    background: transparent;
    border-radius:5vh;
}
input::placeholder {
    color: white;
}

#subheader{
    padding-bottom:1vh;
    overflow: hidden;
    display: grid;
    grid-template:
    ". TITULO ." 1vh
    ". TEXTO ."1fr/
    5vh auto 5vh;
    gap: 1vh;
    grid-area: SHEA;
    background-color:transparent;
}
#subheader h1{
    grid-area: TITULO;
}
#subheader p{
    grid-area: TEXTO;
}
#contenido{
    grid-area: CON;
    background-color:white;
    box-shadow: 1vh -0.5vh 3vh 0vh rgba(61, 58, 230, 0.1);
    border-radius:4vh 4vh 0vh 0vh;
    display: grid;
    position:relative;
    grid-template:
    ". . ."4vh
    ". CON2 ."60vh/
    auto 90% auto;
  
}
.contenido2{
    grid-area: CON2;
    overflow-y: auto;
    display:grid;
    grid-template:
    ". CON3 ."auto/
    auto 100% auto;
}
.con3{
    grid-area: CON3;
    display: flex ;
    flex-direction: column;
    align-items: center;
}
.con3 h1{
    color:#4139E6;
}
#footer{
    grid-area: FOO;
    background-color:white;
    box-shadow: 1vh -0.5vh 3vh 0vh rgba(208, 207, 238, 1);
    display: grid;
    grid-template:
    ". . . . ." auto
    ". IZ CEN DE ."7vh
    ". . . . ." auto/
    5vh auto auto auto 5vh
}
.izquierda{
    grid-area: IZ;          
}
.derecha{
    grid-area: DE;          
}
.centro                     {
    grid-area: CEN;          
}
button{
    background-color: transparent;
    border: none;
}
.logo{
    background-image: URL(imagenes/logo.png);
}
.imagen{
    background-size: contain;
    background-repeat:no-repeat;
    background-position: center;
}

.usuario{
    background-image: URL(imagenes/user.png);
}
.logoboton{
    background-image: URL(imagenes/botonlogo.png);
}
@media (max-width: 768px) {
    .barra{
        width: 90%;
    }
}
</style>

