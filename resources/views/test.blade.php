<?php
      $connect = oci_connect('hr', 'hiba', ' (DESCRIPTION =
      (ADDRESS_LIST =
        (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
      )
      (CONNECT_DATA =
        (SERVICE_NAME = orcl)
      )
      )')
      or die(oci_error());

      if(!$connect){
      echo "Sorry, there is some issue";
      }else{
          $query = 'SELECT * FROM employees';
        // $results = DB::select('select * from users');
          //$var = "select * from V$OBJECT_USAGE";
          $stid = oci_parse($connect, $query);
      $r = oci_execute($stid);
      print '<table border="1">';
      while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
        print '<tr>';
        foreach ($row as $item) {
            print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        print '</tr>';
      }
      print '</table>';

      }
      //close the connection
      oci_close($connect);
?>