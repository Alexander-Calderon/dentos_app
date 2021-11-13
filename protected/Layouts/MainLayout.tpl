<!DOCTYPE html>
<html lang="en">
<com:THead ID="Head" Title="<%$ SiteTitle %>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<%= $this->Page->Theme->BaseUrl %>/ie/iehacks.css" />
<![endif]-->
<link rel="shortcut icon" href="<%= $this->Page->Theme->BaseUrl %>/favicon.ico" />

<!-- <link rel="stylesheet" type="text/css" href="<%/ themes/Bootstrap3/bootstrap.min.css %>" /> -->

</com:THead>
<body class="container">

	<style>
		.container {
			width: 80vw;
			margin: auto;
		}
		.tituloMain {
			text-align: center;
			margin-top: 25px;
		}
		.tituloBase {
			margin: 20px 0 50px 0;
			text-align: center;
		}
		.row {
			margin-top: 15px;
			margin-bottom: 15px;
		}
		.buscador-fecha {
			margin: 20 0;
			text-align: right;
		}
		#ctl0_Main_search_by_date{
			border-radius: 5px;
			border-style: solid;
		}
	</style>



	<com:TForm> 
		<header>
			<h1 class="tituloMain"><%$ SiteName %></h1>
			<nav>
				<ul>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</nav>
		</header>
		<main>
			<com:TContentPlaceHolder ID="Main" />
		</main>
		<footer>
			<%= date('Y') %>, <%$ SiteOwner%> ®
		</footer>
	</com:TForm>
</body>
</html>