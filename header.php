<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en-US" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html lang="en-US" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html lang="en-US" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html lang="en-US" class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US" class="no-js"><!--<![endif]-->

	<head>

    	<meta name="description" content=""/>
    	<meta name="keywords" content="" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1" />

		<meta charset="UTF-8" />

		<title></title>

		<link rel="stylesheet" href="dist/css/all.css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="dist/js/all.js"></script>
        <script type="text/javascript">
  			$(function() {
    			var select_ticket_status = function(status) {
      			if (status == 'All') {
        			$('.ticket').show();
      			} else {
        			$('.ticket').not('[data-status="' + status + '"]').hide();
        			$('.ticket[data-status="' + status + '"]').show();
      			}
    			};

    			$('#status-radios :radio').change(function(event) {
      			select_ticket_status($(this).val());
    			});

    			$('#status-radios :radio:checked').change();
  			});
		</script>

	</head>

<body>

<div class="container">

	<header role="banner">
        <a href="index.php" class="header-logo">
        	<img src="/ah-crm/dist/images/ah-logo.png" alt="">
        </a>
    	<ul class="switch-nav">
    		<li class="instaflex">
				<a href="#"></a>
			</li>
        	<li class="luminday"><a href="#"></a></li>
        	<li class="nugenix"><a href="#"></a></li>
        	<li class="beneflex"><a href="#"></a></li>
			<li class="logout"><a href="#"></a></li>
    	</ul>
    </header>
