<?php
		$query ="select nim from akademik.ms_mahasiswa where statusmhs = 'A'";
		$conn = pg_connect("host=180.250.165.150 port=5432 dbname=iainmigrasi user=iain password='ampelakademik!3'");
		$result = pg_query($conn,"$query");
		// echo $result;
		while ($row = pg_fetch_assoc($result))
		{
				$nim[] 	= $row['nim'];						
		}
?>
  
  <script src="<?php echo base_url();?>assets/js/plugins/jquery.ajaxQueue.min.js" type="text/javascript"></script>

		<script>

	var nim = <?php print json_encode($nim); ?>
	var no;
	for(var par = 0;par<nip.length;par++){
		
		no = par+1;
		nipnya = nip[par];
		jQuery.ajaxQueue({
			type: "POST",
			url: "/etl/update_mhs",
			data: { nip: nipnya,no:no}
		}).done(function( data ) {
			// location.reload();
			alert("done");
		});
	}		
</script>
