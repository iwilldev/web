<?php
require "server/config.php";

?>

<!DOCTYPE html>
<html lang="en">

	<head>
	<title><?php echo $pg_name; ?> </title>

		<link rel="stylesheet" href= "<?php echo $main_css; ?>" >
		<script src = "<?php $main_js; ?>"> </script>
		
		<link rel="icon" type="image/png" href="<?php echo $favicon96?>" sizes="96x96" />
		<link rel="icon" type="image/svg+xml" href="<?php echo $favicon_v?>" />
		<link rel="shortcut icon" href="<?php echo $favicon?>" />
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $appleicon?>" />
		<link rel="manifest" href="<?php echo $wman?>" />
		
		<style>
		html { color-scheme: light dark; }

		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">