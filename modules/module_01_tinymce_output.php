<?php

	//Variables
	$output = '';

	//GENERAL CONTROL
	if(REX_IS_VALUE[1] || REX_IS_VALUE[2] || REX_IS_VALUE[3] || REX_IS_VALUE[4] || 
		REX_IS_VALUE[5] || REX_IS_VALUE[6] || REX_IS_VALUE[7] || REX_IS_VALUE[8] || 
		REX_IS_VALUE[9]) || REX_IS_VALUE[10] || REX_IS_VALUE[11] || REX_IS_VALUE[12])
	{
		$output  = '		<div class="row">'."\n";

		//Desktop Spacing
		if("REX_VALUE[13]" == "true")
		{
			$desktopCSS = 'col-lg-';
		}

		//Tablet Spacing
		if("REX_VALUE[14]" == "true")
		{
			$tabletCSS = 'col-sm-';
		}

		//Mobile Spacing
		if("REX_VALUE[15]" == "true")
		{
			$mobileCSS = 'col-';
		}

		if (REX_IS_VALUE[1])
		{



		  REX_HTML_VALUE[1]

		}
	}

?>