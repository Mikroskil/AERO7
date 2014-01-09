<?php
            include "koneksi.php";
            $a=mysql_query("select * from customer");
            while ($baris=mysql_fetch_array($a)){
            
            ?>
            
			<tr class="danger">
				<td><?php echo"saya"; ?></td>
				<td><?php echo $baris[no_induk] ?></td>
				<td><a href="#">...</a></td>
				<td>...</td>
				<td>...</td>
			</tr>
			<?php } ?>