<?php
include 'mainheader.php';
//include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
include 'model/report_query_li.php';
?>



<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:12px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:12px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-dbbi{border-color:inherit;font-size:12px;font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-7btt{border-color:inherit;font-weight:bold;text-align:center;vertical-align:top}
</style>



<!-- Content -->


        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">HEALTH SEEKING BEHAVIOUR</h4></br>
    

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
  


<table class="tg">
<thead>
  <tr>
    <th class="tg-dbbi" colspan="9">HOSPITALISATION &gt; 6 MONTHS</th>
    <th class="tg-0pky" rowspan="10"></th>
    <th class="tg-dbbi" colspan="9">OPD &gt; 6 MONTHS</th>
  </tr>
  <tr>
    <td class="tg-7btt" rowspan="9"><br><br><br><br><br><br><br><br><br>AREA OF RESIDENCE</td>
    <td class="tg-7btt" colspan="8">LOCATION OF HEALTH FACILITIES</td>
    <td class="tg-7btt" rowspan="9"><br><br><br><br><br><br><br><br><br>AREA OF RESIDENCE</td>
    <td class="tg-7btt" colspan="8">LOCATION OF HEALTH FACILITIES</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt" colspan="4">EXPOSED</td>
    <td class="tg-7btt" colspan="2">UNEXPOSED</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt" colspan="4">EXPOSED</td>
    <td class="tg-7btt" colspan="2">UNEXPOSED</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt">Kintampo <br>North</br></td>
    <td class="tg-7btt">Kintampo <br>South</br></td>
    <td class="tg-7btt">Techiman <br>North</br></td>
    <td class="tg-7btt">Nkoranza <br>North</br></td>
    <td class="tg-7btt">Techiman <br>South</br></td>
    <td class="tg-7btt">Nkoranza <br>South</br></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt">Kintampo <br>North</br></td>
    <td class="tg-7btt">Kintampo <br>South</br></td>
    <td class="tg-7btt">Techiman <br>North</br></td>
    <td class="tg-7btt">Nkoranza <br>North</br></td>
    <td class="tg-7btt">Techiman <br>South</br></td>
    <td class="tg-7btt">Nkoranza <br>South</br></td>
  </tr>
  <tr>
    <td class="tg-7btt" rowspan="4"><br><br><br><br>EXPOSED</td>
    <td class="tg-7btt">KN</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt" rowspan="4"><br><br><br><br>EXPOSED</td>
    <td class="tg-7btt">KN</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-7btt">KS</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt">KS</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-7btt">TN</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt">TN</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-7btt">NN</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt">NN</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-7btt" rowspan="2"><br>UNEXPOSED</td>
    <td class="tg-7btt">TS</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt" rowspan="2"><br>UNEXPOSED</td>
    <td class="tg-7btt">TS</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-7btt">NS</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-7btt">NS</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
</thead>
</table>

</form>
</div>
</div>
</div>
 <div class="sidebar-overlay" data-reff=""></div>
