<?php  


	// $c = oci_connect('scott', 'tiger', '//localhost:8080/apex');
 //  $s = oci_parse($c, 'select * from emp');
 //  oci_execute($s);
 //  while (($row = oci_fetch_array($s, OCI_ASSOC)) != false)
 //    foreach ($row as $item)
 //      print $item;


?>


<?php
	$conn=oci_connect("scott","tiger","localhost/XE");
		//return $conn;
	if (!$conn){ 
	echo "The Oracle connection failed.";
	exit;}
	else { 
	echo 'The connection to Oracle succeed.';
	}
	?>

<?php
  // phpinfo(); // all info
  // // module info, phpinfo(8) identical
  // phpinfo(INFO_MODULES);
?>