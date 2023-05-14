<html>
<?php

require "config.php";

use App\EMPSTATS;

$emps = EMPSTATS::list();

echo "<table border='1' cellpadding='5' id='myTable'>";
$keys = array_keys($emps);

for ($i = 0; $i < count($emps); $i++) {
    echo "<tr>";
    foreach ($emps[$keys[$i]] as $key => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
 <script>
    window.onload = function() {
      var table = document.getElementById("myTable");
      var columnCount = table.rows[0].cells.length;
      for (var i = columnCount - 1; i >= 0; i -= 2) {
        for (var j = 0; j < table.rows.length; j++) {
          table.rows[j].deleteCell(i);
        }
      }
    };
  </script>

</html>	