<?php
include("lib.php");
$id=$_GET['brg'];
//$id='1010306010000042';
?>
   <table width="102%" border="0.5" align="center" bordercolor="#000000">
            <tr>
              <th bgcolor="#FFCC00" scope="col">Kode Barang</th>
              <th bgcolor="#FFCC00" scope="col">Nama barang</th>
              <th bgcolor="#FFCC00" scope="col">Jumlah</th>
            </tr>
<?php
				$link=koneksi_db();
				$sqlm="select kd_brg,ur_brg,sum(kuantitas)jumlah from (select s.kd_brg,b.ur_brg ,s.kuantitas,s.tgldok from t_sediam s,t_brg b where b.kd_brg=s.kd_brg group by s.kd_brg,s.tgldok ) g_sedia where kd_brg='$id' group by kd_brg order by tgldok desc";
				$resm=mysql_query($sqlm,$link);
				if($resm){
					$pros=mysql_fetch_array($resm);
					$m=$pros['jumlah'];
				}
				$sqlk="select kd_brg,ur_brg,sum(kuantitas)jumlah from (select s.kd_brg,b.ur_brg ,s.kuantitas,s.tgldok from t_sediak s,t_brg b where b.kd_brg=s.kd_brg group by s.kd_brg,s.tgldok ) g_sedia where kd_brg='$id' group by kd_brg order by tgldok desc";
				$resk=mysql_query($sqlk,$link);
				if($resk){
					$k=mysql_fetch_array($resk);
					$kp=$k['jumlah'];
					}																			
?>
            <tr>
            	
              <td bgcolor="#FFFFFF" scope="row"><?php echo $pros['kd_brg']  ; ?></td>
              <td bgcolor="#FFFFFF"><?php echo $pros['ur_brg']  ; ?></td>
              <td bgcolor="#FFFFFF"><?php echo $m.'-'.$k.'='.$m-$kp  ; ?></td>
            </tr>		
          </table>
