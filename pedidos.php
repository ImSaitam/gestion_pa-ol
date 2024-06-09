<?php
include "./codigophp/sesion.php";
include "codigophp/conexionbs.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="estiloscss/animaciones.css">
    <link rel="stylesheet" href="estiloscss/styles.css">
    <link rel="stylesheet" href="estiloscss/imagenes.css">
</head>
<body>
    <div id="pagina">
        <div id="header">
            <a href="inicio.php" class="logo imagen"></a>
            <button  class="usuario imagen" id="user"></button>
        </div>
        <div id="subheader">
            <h1>Historial de pedidos de <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div id="contenido">
            <form action="pedido.php" method="post">
                <button class="barra" type="submit">
                    <div class="mas"></div>
                        <div>Crear nuevo pedido</div>
                        <div></div>
                        <input type="text" value="nuevopedido" name="estado" style="display:none;">
                        <input type="text" value="" name="pedido" style="display:none;">
                </button>
            </form>
            <div class="contenido2">
                <div class="con3" id="inicio">
                    <h1>HISTORIAL DE PEDIDOS</h1>
                    <div class="scroll-y" style="height: 100%;">
                        <div class="conscroll-y">
                            <?php
                                $sql = "SELECT * FROM pedidos WHERE pedidos.usuario_solicitante = ?";
                    
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $_SESSION['id_usuario']); 
                    $stmt->execute();
                    $result = $stmt->get_result();
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="rectangulo2"><h1>'.$row["fecha_pedido"].'</h1> <p>'.$row["id_aula"].' '.$row["estado"].'</p> <form action="./codigophp/borrarpedido.php" method="post"><input type="hidden" name="pedido" value="'.$row["id_pedido"].'"><input type="submit" class="imagen opciones" value="Eliminar"></form></div>';
                        }
                    } else {
                        echo "<h1>NO HAY PEDIDOS AUN</h1>";
                    }
                    
                    $stmt->close();
                    $conn->close();
                    ?>         
                    <div class="rectangulo2"><h1>DIA Y HORA</h1> <p>NOTIFICACION</p> <button class="imagen opciones"></button></div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <a href="notificaciones.php" class="campana imagen izquierda">Notificaciones</a>
            <a href="inicio.php" class="flecha imagen centro">Volver al inicio</a>
            <a href="reportes.php" class="alerta imagen derecha">Reportes</a>
        </div>
    </div>
    <div id="sombra" class="sombra">
        <div class="contenidosombra">
        <button class="barra" id="opcionequis">
                <div class="equis"></div>
                    <div>Volver</div>
                    <div></div>
            </button>
            <div class="contenido2">
                <div class="con3" id="inicio">
                    <div class="scroll-y" style="height: 100%; padding-top:2vh;">
                        <div class="conscroll-y">
                            <form action = "./codigophp/borrarpedido.php" method = "post">
                                <input type="text" style="display:none;" name="pedido" value="2">
                                <input type = "submit" class="basura imagen boton" style=" padding-left: 5vh;" value="Eliminar pedido">
                            </form>
                            <form action = "./pedido.php" method = "post">
                                <input type="text" style="display:none;" name="estado" value="2">
                                <input type="text" style="display:none;" name="pedido" value='{"herramientas": [1,2],"cantidad": [10,2]}'>
                                <input type = "submit" class="ojo imagen boton" style=" padding-left: 5vh;" value="Ver pedido">
                            </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sombra2" class="sombra">
        <div class="contenidosombra">
        <button class="barra" id="opcionequis2">
                <div class="equis" ></div>
                    <div>Volver</div>
                    <div></div>
            </button>
            <div class="contenido2">
                <div class="con3" id="inicio">
                    <div class="scroll-y" style="height: 100%; padding-top:2vh;">
                        <div class="conscroll-y">
                                <a href="codigophp/cerrarsesion.php" class="flecha imagen boton">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>

<script src="codigojs/sombra2.js"></script>
<script src="codigojs/sombra.js"></script>
</body>
</html>
