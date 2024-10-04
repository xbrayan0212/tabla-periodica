<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Periódica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="encabezado">
    <h1>Universidad Tecnológica de Panamá</h1>
    <h2>Desarrollo de Software VI</h2>
    <div class="estudiantes">
        <p><strong>Estudiantes:</strong></p>
        <p>Brayaan Rodríguez - 8-1009-525</p>
        <p>Daniela Quiros - 8-1002-363</p>
    </div>
</div>
<div class="tabla-periodica">
    <?php
    include('datos.php');
    
    // Generar los elementos de la tabla periódica
    foreach ($elementos as $elemento) {
        echo '<div class="elemento" 
                 data-simbolo="' . $elemento['simbolo'] . '" 
                 data-nombre="' . $elemento['nombre'] . '" 
                 data-numero="' . $elemento['numero'] . '" 
                 data-peso="' . $elemento['peso'] . '" 
                 data-config="' . $elemento['config'] . '" 
                 data-estado-oxidacion="' . $elemento['estado_oxidacion'] . '" 
                 data-grupo="' . $elemento['grupo'] . '" 
                 data-periodo="' . $elemento['periodo'] . '" 
                 data-valencia="' . $elemento['valencia'] . '" 
                 data-densidad="' . $elemento['densidad'] . '">
                 ' . $elemento['simbolo'] . '
              </div>';
    }
    ?>
</div>

<!-- Div para mostrar información del elemento -->
<div class="info-elemento" id="info-elemento">
    <h2>Información del Elemento</h2>
    <p id="info-text">Haz clic en un elemento para ver la información aquí.</p>
</div>
</div>


<script>
    const elementos = document.querySelectorAll('.elemento');
    const infoText = document.getElementById('info-text');

    elementos.forEach(elemento => {
        elemento.addEventListener('click', () => {
            const simbolo = elemento.getAttribute('data-simbolo');
            const nombre = elemento.getAttribute('data-nombre');
            const numero = elemento.getAttribute('data-numero');
            const peso = elemento.getAttribute('data-peso');
            const config = elemento.getAttribute('data-config');
            const estadoOxidacion = elemento.getAttribute('data-estado-oxidacion');
            const grupo = elemento.getAttribute('data-grupo');
            const periodo = elemento.getAttribute('data-periodo');
            const valencia = elemento.getAttribute('data-valencia');
            const densidad = elemento.getAttribute('data-densidad');

            infoText.innerHTML = `
                <strong>Nombre:</strong> ${nombre} <br>
                <strong>Símbolo:</strong> ${simbolo} <br>
                <strong>Número Atómico:</strong> ${numero} <br>
                <strong>Peso Atómico:</strong> ${peso} <br>
                <strong>Configuración Electrónica:</strong> ${config} <br>
                <strong>Estado de Oxidación:</strong> ${estadoOxidacion} <br>
                <strong>Grupo:</strong> ${grupo} <br>
                <strong>Período:</strong> ${periodo} <br>
                <strong>Valencia:</strong> ${valencia} <br>
                <strong>Densidad:</strong> ${densidad}
            `;
        });
    });
</script>

</body>
</html>

