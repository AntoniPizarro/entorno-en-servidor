<?php
    $styles = "<style>
    table, th, td {
      border: 1px solid black;
    }
    </style>";

    $rows = array("Toni", "Laura", "Pere", null);
    $columns = "<tr>
                    <th>Nombre</th>
                    <th>empty()</th>
                    <th>isset()</th>
                    <th>boolval()</th>
                </tr>";
    $table = "<table>".$columns;
    
    foreach($rows as $name) {
        $col2 = empty($name);
        $col3 = isset($name);
        $col4 = boolval($name);

        if ($name == null) {
            $name = "null";
            $col2 = empty(null);
            $col3 = 0;
            $col4 = boolval(null);
        }

        $row = "<tr>
                    <th>$name</th>
                    <th>".$col2."</th>
                    <th>".$col3."</th>
                    <th>".$col4."</th>
                </tr>";
        $table = $table.$row;
    }
    $table = $table."</table>";

    echo $styles;
    echo $table;
?>