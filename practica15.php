<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css">
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo"><a href="practica15.html">StemPhp</a></h1>
            <nav>
                <ul><li><a href="practica15.html" class="current">Inicio</a></li></ul>
            </nav>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Energía producida por una central hidroeléctrica</h2>
                <p>Descripción:</p>
                <p>Determina la energía producida (en MWh) en una central hidroeléctrica de turbina Pelton 
                    con rendimiento de 90%, en el mes de marzo, si el salto de agua es de 120m y el caudal es de 2,75m³/s.
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/central.png" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <p>Potencia teórica: D*c*g*s</p>
                <p>Potencia real: Pt*r</p>
                <p>Energía producida: Pr*t</p>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>r= 0.9<li>
                    <li>h = 120</li>
                    <li>Q = 2.75</li>
                    <li>d = 1000kg/m^3</li>
                    <li>g = 9.81m/s^2</li>
                    <li>t = 31días, 24h/día</li>
                </ul>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <p>Sustituyendo los valores en las fórmulas:</p>
                <?php
                function calcular_energia_hidroelectrica() {
                    // Constantes y datos
                    $densidad = 1000; // Densidad del agua (kg/m³)
                    $caudal = 2.75; // Caudal (m³/s)
                    $gravedad = 9.8; // Gravedad (m/s²)
                    $salto = 120; // Altura (m)
                    $rendimiento = 0.9; // Eficiencia de la turbina
                    $tiempo = 31 * 24; // Tiempo total (horas en marzo)

                    // Cálculos
                    $potencia_bruta = $densidad * $caudal * $gravedad * $salto; // Potencia bruta (W)
                    $potencia_real = $potencia_bruta * $rendimiento; // Potencia real (W)
                    $energia = $potencia_real * $tiempo; // Energía en Wh
                    $energia_mwh = $energia / 1e6; // Convertir a MWh

                    return round($energia_mwh, 2); // Redondear a 2 decimales
                }
                ?>
                <section class="resultado">
                    <h2>Resultado:</h2>
                    <div id="resultadoA">
                        <?php
                        $energia = calcular_energia_hidroelectrica();
                        echo "<h1>Resultado: " . $energia . " MWh</h1>";
                        ?>
                    </div>
                </section>
            </section>
        </section>
        <footer class="pie">
            <p>Creative Commons versión 4.0 SciSoft 2024</p>
        </footer>
    </section>
</body>
</html>
