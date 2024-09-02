<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "currency");
// fungsi pemanggilan data di database
$result = mysqli_query($conn, "SELECT * FROM currency");
// $currency = mysqli_fetch_assoc($result);

// foreach ($result as $key => $value) {
// 	# code...
// 	$dump_currency = mysqli_fetch_assoc($result);
// }
// $res = mysqli_fetch_all($result);
$render = array();
while ($res = mysqli_fetch_object($result)) {
    
	$array["id"]= $res->id; 
	$array["currency_code"]= $res->currency_code; 
	$array["currency_name"]= $res->currency_code; 
	$array["currency_value"]= $res->value; 
	$array["currency_country"]= $res->country; 

    $render[] = $array; 
    
}
?>