<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HistoryPushState</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div id="demo-top-bar">

  <div id="demo-bar-inside">

    <h2 id="demo-bar-badge">

      <a href="/">HTML5History</a>

    </h2>


  </div>

</div>
    <div class="page-wrap">
        <div class="gallery">
            <a href="/peter.php">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/bill.png" alt="Peter" class="peter" data-name="peter"/>
            </a>
            <a href="/ray.php">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/dan.png" alt="Ray" class="ray" data-name="ray"/>
            </a>
            <a href="/egon.php">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/egon.png" alt="Egon" class="egon" data-name="egon"/>
            </a>
            <a href="/winston.php">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/winston.png" alt="Winston" class="winston" data-name="winston">
            </a>
        </div>

        <p class="highlight"></p>

        <div class="content"></div>
    </div>

    <script src="app.js"></script>

 <style type="text/css" style="display: none !important;">
	* {
		margin: 0;
		padding: 0;
	}
	body {
		overflow-x: hidden;
	}
	#demo-top-bar {
		text-align: left;
		background: #222;
		position: relative;
		zoom: 1;
		width: 100% !important;
		z-index: 6000;
		padding: 20px 0 20px;
	}
	#demo-bar-inside {
		width: 960px;
		margin: 0 auto;
		position: relative;
		overflow: hidden;
	}
	#demo-bar-buttons {
		padding-top: 10px;
		float: right;
	}
	#demo-bar-buttons a {
		font-size: 12px;
		margin-left: 20px;
		color: white;
		margin: 2px 0;
		text-decoration: none;
		font: 14px "Lucida Grande", Sans-Serif !important;
	}
	#demo-bar-buttons a:hover,
	#demo-bar-buttons a:focus {
		text-decoration: underline;
	}
	#demo-bar-badge {
		display: inline-block;
		width: 302px;
		padding: 0 !important;
		margin: 0 !important;
		background-color: transparent !important;
	}
	#demo-bar-badge a {
		display: block;
		width: 100%;
		height: 38px;
		border-radius: 0;
		bottom: auto;
		margin: 0;
		background-size: 100%;
		overflow: hidden;
		text-indent: -9999px;
	}
	#demo-bar-badge:before, #demo-bar-badge:after {
		display: none !important;
	}
</style>
</body>

</html>