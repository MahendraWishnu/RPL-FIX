<center>
		<table class="tabel">
			<tr>
				<th>Kode Tiket</th>
				<th>Kode Wisata</th>
				<th>Nama </th>
				<th>Lokasi</th>
				<th>Tujuan</th>
				<th colspan="2">Aksi</th>
			</tr>
				<?php
					include "konek.php";
					$result = mysqli_query ($dbkonek, "SELECT * FROM tiket ORDER BY idTiket");
					
					while($a = mysqli_fetch_array($result)){
				?>
			<tr>
				<td><?= $a['kodeTiket']?></td>
				<td><?= $a['kodePesawat']?></td>
				<td><?= $a['namaPembeli']?></td>
				<td><?= $a['berangkat']?></td>
				<td><?= $a['tujuan']?></td>
				<td><a href="detail.php?detail=<?= $a['idTiket']?>" style="color: blue";>Detail</a></td>
				<td><a href="?act=data-tiket&hapus=<?= $a['idTiket']?>"style="color: blue";>Hapus</a></td>
			</tr>
			<?php }?>
		</table>
</center>
<?php
	include "konek.php";
	if(isset($_GET['hapus'])){
		$idTiket = $_GET['hapus'];
		$q = $dbkonek->query("DELETE FROM tiket WHERE idTiket='$idTiket'");
		if($q){
			header ("location:detail.php?act=data-tiket");
		}
	}
?>