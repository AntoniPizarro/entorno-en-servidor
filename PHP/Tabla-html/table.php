<?php
    $styles = '<link rel="stylesheet" type="text/css" href="styles.css">';

    // Declaración los datos por cada fila
    $rows = array(
        "",
        null,
        array(),
        array(1, 2, 3),
        false,
        true,
        1,
        42,
        0,
        -1,
        "1",
        "0",
        "1",
        "php",
        "true",
        "false"
    );

    // Declaración de cabeceras
    $columns = "<tr>
                    <th>Valor</th>
                    <th>gettype()</th>
                    <th>empty()</th>
                    <th>is_null()</th>
                    <th>isset()</th>
                    <th>bool</th>
                </tr>";

    $table = "<table>".$columns;
    
    // Cálculo por cada dato por columna
    foreach($rows as $name) {
        $col2 = gettype($name);
        if($col2 == "array") {
            $col1 = 'array('.implode(", ", $name).')';
        }else {
            $col1 = json_encode($name);
        }
        $col3 = json_encode(empty($name));
        $col4 = json_encode(is_null($name));
        $col5 = json_encode(isset($name));

        if ($name) {
            $col6 = json_encode(true);
        }else {
            $col6 = json_encode(false);
        }
        
        // Inserción de datos en tabla
        $row = '<tr>
                    <th>$x = '.$col1.'</th>
                    <th>'.$col2.'</th>
                    <th>'.$col3.'</th>
                    <th>'.$col4.'</th>
                    <th>'.$col5.'</th>
                    <th>'.$col6.'</th>
                </tr>';
        $table = $table.$row;
    }
    $table = $table."</table>";

    echo $styles;
    echo $table;
?>
