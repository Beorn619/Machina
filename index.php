<?php
	$json = file_get_contents("https://discordapp.com/api/guilds/176804482934505472/widget.json");
	$obj = json_decode($json);
	$member = $obj->members;
	$invite = $obj->instant_invite;
	$online = 0;

	foreach ($member as $value){
		$online = $online + 1;
	}

?>
<html>
	<head>
		<title>Machina Minecraft Server</title>
		<meta name="viewport" content="width=device-width, initial-scale=0.5">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
		<link rel="manifest" href="images/icons/site.webmanifest">
		<link rel="mask-icon" href="images/icons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#ffc40d">
		<meta name="theme-color" content="#ffffff">

	</head>
	<body>
		<h1>Machina Minecraft Server</h1>
		<h2 onclick="SelectText('ip')" id="ip" title="Click to copy!">mc.machina.fun</h2>
		<div id="discord-wrapper">
			<a class="div_link" target="_blank" href="<?php echo $invite; ?>"><img src="images/Discord-Logo-Color.svg" id="discord-logo" alt="The Discord Logo. A video game controller with eyes."></a>
			<a class="div_link" target="_blank" href="<?php echo $invite; ?>"><p id="discord-json"><strong><?php echo $online; ?></strong> Members Online</p></a>
		</div>

		<div id="info-wrapper">
			<div id="atlauncher-div">
				<img src="images/at.png" id="at-logo" alt="AT Launcher">
				<p id="bevo-text">You will need <a target="_blank" href="https://www.atlauncher.com/downloads" class="div_link">AT Launcher</a> to run this pack.</p>
			</div>
			<div id="bevo-div">
				<img src="images/bevo.png" id="bevo-logo" alt="Bevo's Tech Pack." class="auto-style1">
				<p id="bevo-text">This server runs on the latest version of <a class="div_link" href="https://www.atlauncher.com/pack/BevosTechPack" target="_blank">Bevo's Tech Pack 1.7.10</a></p>
			</div>
		</div>

		<h2>World Map</h2>
		<iframe src="http://machina.mine.bz:8120/"></iframe>
		<script type="text/javascript" src="scripts/main.js"></script>
	</body>
</html>