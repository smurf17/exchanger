<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Money Exchange Calculator</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
	<img src="img/1.png" alt="" class="money-img" />
    <h1>Money Exchange Calculator</h1>
    <p>Choose the currency and the amounts to get the exchange rate</p>

<?php ob_start(); ?>
<div class="container">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="utf-8">
			Amounts	:
			<input type="text" name="amount" placeholder="0" autocomplete="off" autofocus>
			<select name="currency-one">
				<option value="AED">AED</option>
		        <option value="ARS">ARS</option>
		        <option value="AUD">AUD</option>
		        <option value="BGN">BGN</option>
		        <option value="BRL">BRL</option>
		        <option value="BSD">BSD</option>
		        <option value="CAD">CAD</option>
		        <option value="CHF">CHF</option>
		        <option value="CLP">CLP</option>
		        <option value="CNY">CNY</option>
		        <option value="COP">COP</option>
		        <option value="CZK">CZK</option>
		        <option value="DKK">DKK</option>
		        <option value="DOP">DOP</option>
		        <option value="EGP">EGP</option>
		        <option value="EUR">EUR</option>
		        <option value="FJD">FJD</option>
		        <option value="GBP">GBP</option>
		        <option value="GTQ">GTQ</option>
		        <option value="HKD">HKD</option>
		        <option value="HRK">HRK</option>
		        <option value="HUF">HUF</option>
		        <option value="IDR">IDR</option>
		        <option value="ILS">ILS</option>
		        <option value="INR">INR</option>
		        <option value="ISK">ISK</option>
		        <option value="JPY">JPY</option>
		        <option value="KRW">KRW</option>
		        <option value="KZT">KZT</option>
		        <option value="MXN">MXN</option>
		        <option value="MYR">MYR</option>
		        <option value="NOK">NOK</option>
		        <option value="NZD">NZD</option>
		        <option value="PAB">PAB</option>
		        <option value="PEN">PEN</option>
		        <option value="PHP">PHP</option>
		        <option value="PKR">PKR</option>
		        <option value="PLN">PLN</option>
		        <option value="PYG">PYG</option>
		        <option value="RON">RON</option>
		        <option value="RUB">RUB</option>
		        <option value="SAR">SAR</option>
		        <option value="SEK">SEK</option>
		        <option value="SGD">SGD</option>
		        <option value="THB">THB</option>
		        <option value="TRY">TRY</option>
		        <option value="TWD">TWD</option>
		        <option value="UAH">UAH</option>
		        <option value="USD" selected>USD</option>
		        <option value="UYU">UYU</option>
          		<option value="VND">VND</option>
          		<option value="ZAR">ZAR</option>
			</select>
	<p>Target currency code :
			<select name="currency-two">
				<option value="AED">AED</option>
		        <option value="ARS">ARS</option>
		        <option value="AUD">AUD</option>
		        <option value="BGN">BGN</option>
		        <option value="BRL">BRL</option>
		        <option value="BSD">BSD</option>
		        <option value="CAD">CAD</option>
		        <option value="CHF">CHF</option>
		        <option value="CLP">CLP</option>
		        <option value="CNY">CNY</option>
		        <option value="COP">COP</option>
		        <option value="CZK">CZK</option>
		        <option value="DKK">DKK</option>
		        <option value="DOP">DOP</option>
		        <option value="EGP">EGP</option>
		        <option value="EUR">EUR</option>
		        <option value="FJD">FJD</option>
		        <option value="GBP">GBP</option>
		        <option value="GTQ">GTQ</option>
		        <option value="HKD">HKD</option>
		        <option value="HRK">HRK</option>
		        <option value="HUF">HUF</option>
		        <option value="IDR" selected>IDR</option>
		        <option value="ILS">ILS</option>
		        <option value="INR">INR</option>
		        <option value="ISK">ISK</option>
		        <option value="JPY">JPY</option>
		        <option value="KRW">KRW</option>
		        <option value="KZT">KZT</option>
		        <option value="MXN">MXN</option>
		        <option value="MYR">MYR</option>
		        <option value="NOK">NOK</option>
		        <option value="NZD">NZD</option>
		        <option value="PAB">PAB</option>
		        <option value="PEN">PEN</option>
		        <option value="PHP">PHP</option>
		        <option value="PKR">PKR</option>
		        <option value="PLN">PLN</option>
		        <option value="PYG">PYG</option>
		        <option value="RON">RON</option>
		        <option value="RUB">RUB</option>
		        <option value="SAR">SAR</option>
		        <option value="SEK">SEK</option>
		        <option value="SGD">SGD</option>
		        <option value="THB">THB</option>
		        <option value="TRY">TRY</option>
		        <option value="TWD">TWD</option>
		        <option value="UAH">UAH</option>
		        <option value="USD">USD</option>
		        <option value="UYU">UYU</option>
          		<option value="VND">VND</option>
          		<option value="ZAR">ZAR</option>
			</select>
			<button class="btn" type="submit" name="submit">Submit
			</button> 
	</p>
		</form>
</div>

<?php if(isset($_POST["submit"])) : ?>
<?php ob_clean() ?>
		<?php 
			echo " <p>Result : ";
			foreach ($render as $key => $value) {
				
			 	if ( $_POST["currency-one"] == $value["currency_code"]) {
			 		$currency_one = $value['currency_value'];
			 		$code_one = $value['currency_code'];
			 		
			 	}
			 	if ( $_POST["currency-two"] == $value["currency_code"]) {
			 		$currency_two = $value['currency_value'];
			 		$code_two = $value['currency_code'];
			 		
			 	}
			}
			echo ($currency_one * $_POST['amount']) * $currency_two . '&nbsp;' .$code_two;
		?>
		<br><br>
		<a class="btn" href="index.php" title="">Back</a>
<?php endif; ?>




</body>
</html>
