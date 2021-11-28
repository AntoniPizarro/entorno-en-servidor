<?php
    $styles = '<link rel="stylesheet" type="text/css" href="styles.css">';

    $var = 1234;
    $rows = array(
        "",
        null,
        $var,
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

    $columns = '<tr class="headers">
    <th>Valor</th>
    <th>gettype()</th>
    <th>empty()</th>
    <th>is_null()</th>
    <th>isset()</th>
    <th>bool</th>
</tr>';

    $table = "<table>".$columns;
    
    foreach ($rows as $name) {
        $col2 = gettype($name);
        if ($col2 == "array") {
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

        if ($col3 == 'true') {
            $sty3 = 'style="background-color: greenyellow;"';
        } else {
            $sty3 = 'style="background-color: crimson;"';
        }

        if ($col4 == 'true') {
            $sty4 = 'style="background-color: greenyellow;"';
        } else {
            $sty4 = 'style="background-color: crimson;"';
        }

        if ($col5 == 'true') {
            $sty5 = 'style="background-color: greenyellow;"';
        } else {
            $sty5 = 'style="background-color: crimson;"';
        }

        if ($col6 == 'true') {
            $sty6 = 'style="background-color: greenyellow;"';
        } else {
            $sty6 = 'style="background-color: crimson;"';
        }

        $row = "<tr>
    <th>".'$x'." = ".$col1."</th>
    <th>".$col2."</th>
    <th $sty3>$col3</th>
    <th $sty4>$col4</th>
    <th $sty5>$col5</th>
    <th $sty6>$col6</th>
</tr>";
        $table = $table.$row;
    }
    $table = $table."</table>";

    echo $styles;
    echo $table;
?>
