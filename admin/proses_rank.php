<?
            include "koneksi.php";
            $a=mysql_query("select * from customer");
            while ($baris=mysql_fetch_array($a)){
            
            ?>
            
			<tr class="danger">
				<td><? echo"saya"; ?></td>
				<td><? echo $baris[no_induk] ?></td>
				<td><a href="#">...</a></td>
				<td>...</td>
				<td>...</td>
			</tr>
			<? } ?>