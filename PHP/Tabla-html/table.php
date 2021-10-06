<?php
    $styles = "<style>
    table, th, td {
      border: 1px solid black;
    }
    </style>";
    $rows = array("Toni", "Laura", "Pere","Pau");
    $columns = "<tr>
                    <th>Nombre</th>
                    <th>empty()</th>
                    <th>strlen()</th>
                </tr>";
    $table = "<table>".$columns;
    foreach($rows as $name) {
        $row = "<tr>
                    <th>$name</th>
                    <th>".empty($name)."</th>
                    <th>".strlen($name)."</th>
                </tr>";
        $table = $table.$row;
    }
    $table = $table."</table>";
    echo $styles;
    echo $table;
?>