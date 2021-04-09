<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>¡Betplay te felicita!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style>
		td{padding: 0px 10px 0px 10px;}
	</style>
</head>
<body style="margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="600px"; style="margin:0 auto">
	<tr>
		<td width="100%">
			<img src="https://portalgane.com/multimedia/banner_main.jpg" alt="" width="100%" height="auto" style="display: block;" />
		</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="600px"; style="margin:0 auto">
	<tr>
		<td width="100%"><p style="color:#131F4C;letter-spacing: 0.18px;text-align: center; font-size: 15px; font-family: Arial, sans-serif, 'Open Sans'; line-height: 20px; padding-top: 30px;"><span style="font-weight:bold; font-size:24px;">¡Felicidades!</span>
			<br>
			<br>
			Ahora haces parte del equipo BetPlay.
			<br>
			<br>
			<span style="font-weight:600;">Disfruta tu c&oacute;digo:</span></p>
		</td>
	</tr>
	<tr>
		<td style="background-image: url(https://portalgane.com/multimedia/contenedor_code_1.png);background-position: center;background-repeat: no-repeat;background-size: auto;padding: 18px 0 26px;">
			<span style="font-family: Arial, sans-serif, 'Open Sans';font-weight:700;display: block;text-align: center;color: #fff;font-size: 30px;letter-spacing: 9.88px;line-height: 36px;">{{ $code->coupon }}</span>
		</td>
	</tr>
	<tr>
		<td>
			<p style="color:#131F4C;letter-spacing: 0.18px;text-align: center; font-size: 15px; font-family: Arial, sans-serif, 'Open Sans'; line-height: 20px;">Recuerda esta fecha para activar el c&oacute;digo de tu cup&oacute;n.<br>
			<br>
			<span style="font-size: 16px;font-weight: 600;">{{ $code->activation_date_start->format('d/m/Y h:iA') }}</span>
			<br>
			<br>
			Tu cup&oacute;n tiene vigencia hasta:
			<br>
			<br>
			<span style="font-size: 16px;font-weight: 600;">{{ $code->activation_date_end->format('d/m/Y h:iA') }}</span></p>
		</td>
	</tr>
</table>
</body>
</html>