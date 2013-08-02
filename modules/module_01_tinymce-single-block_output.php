<?php

	/*Legende
	REX_VALUE[1]  = Textfeld
	REX_VALUE[2]  = Desktop-Breite true/false
	REX_VALUE[3]  = Tablet-Breite  true/false
	REX_VALUE[4]  = Mobile-Breite  true/false
	REX_VALUE[5]  = Desktop-Spalte 1-12
	REX_VALUE[6]  = Tablet-Spalte  1-12
	REX_VALUE[7]  = Mobile-Spalte  1-12
	REX_VALUE[8]  = Versatz        none, 1-12
	REX_VALUE[9]  = Anordnung      none, push, pull
	REX_VALUE[10] = Anordnung      1-12
	*/

	//Variables
	$output   = '';
	$desktop  = '';
	$tablet   = '';
	$mobile   = '';
	$offset   = '';
	$pushpull = '';

	//CSS-Klassen
	$cssD    = ' col-lg-';
	$cssT    = ' col-sm-';
	$cssM    = ' col-';
	$cssO    = ' col-offset-';
	$cssPush = ' col-push-';
	$cssPull = ' col-pull-';

	//Desktop
	if("REX_VALUE[2]" == 'true')
	{
		$desktop = $cssD.'REX_VALUE[5]';
	}

	//Tablet
	if("REX_VALUE[3]" == 'true')
	{
		$tablet = $cssT.'REX_VALUE[6]';
	}

	//Mobile
	if("REX_VALUE[4]" == 'true')
	{
		$mobile = $cssM.'REX_VALUE[7]';
	}

	//Offset
	if("REX_VALUE[8]" != 'none')
	{
		$offset = $cssO.'REX_VALUE[8]';
	}

	//Push - Pull - Anordnung
	if("REX_VALUE[9]" != 'none')
	{
		if("REX_VALUE[9]" == 'push')
		{
			$pushpull = $cssPush.'REX_VALUE[10]';
		}
		else
		{
			$pushpull = $cssPull.'REX_VALUE[10]';
		}
	}

	//Output
	if(REX_IS_VALUE[1] && !$REX['REDAXO'])
	{
		$output  = '		  <div class="'. $desktop . $tablet . $mobile . $offset . $pushpull .'">'."\n";
		$output .= '            <div class="metrostyle-text">'."\n";
		$output .= '              REX_HTML_VALUE[1]'."\n";
		$output .= '            </div>'."\n";
		$output .= '          </div>'."\n";

		print $output;
	}
	elseif(REX_IS_VALUE[1] && $REX['REDAXO'])
	{
		$output  = '<div style="position:relative;float:left;width:100%,padding: 15px 0;">';
		$output .= '<div style="position:relative; float:left; width:100%; padding-bottom:15px;">';
		$output .= '  REX_HTML_VALUE[1]';
		$output .= '</div>';
		$output .= '<div style="position:relative; float:left; width: 100%;">';
		$output .= '  <div style="position:relative;float:left;width:33.3%">';
		$output .= '    Desktop-Breite:<br /><strong>REX_VALUE[2]</strong>';
		$output .= '  </div>';
		$output .= '  <div style="position:relative;float:left;width:33.3%">';
		$output .= '    Tablet-Breite:<br /><strong>REX_VALUE[3]</strong>';
		$output .= '  </div>';
		$output .= '  <div style="position:relative;float:left;width:33.3%">';
		$output .= '    Mobile-Breite:<br /><strong>REX_VALUE[4]</strong>';
		$output .= '  </div>';
		$output .= '</div>';
		$output .= '<div style="position:relative; float:left; width: 100%;">';
		$output .= '  <div style="position:relative;float:left;width:33.3%">';
		$output .= '    Desktop-Spalte:<br /><strong>REX_VALUE[5]</strong>';
		$output .= '  </div>';
		$output .= '  <div style="position:relative;float:left;width:33.3%">';
		$output .= '    Tablet-Spalte:<br /><strong>REX_VALUE[6]</strong>';
		$output .= '  </div>';
		$output .= '  <div style="position:relative;float:left;width:33.3%">';
		$output .= '    Mobile-Spalte:<br /><strong>REX_VALUE[7]</strong>';
		$output .= '  </div>';
		$output .= '</div>';
		$output .= '<div style="position:relative; float:left; width: 100%;">';
		$output .= '  <div style="position:relative;float:left;width:33.3%">';
		$output .= '    Versatz:<br /><strong>REX_VALUE[8]</strong>';
		$output .= '  </div>';
		$output .= '  <div style="position:relative;float:left;width:33.3%">';
		$output .= '    Anordnung:<br /><strong>REX_VALUE[9]</strong>';
		$output .= '  </div>';
		$output .= '  <div style="position:relative;float:left;width:33.3%">';
		$output .= '    um wieviel:<br /><strong>REX_VALUE[10]</strong>';
		$output .= '  </div>';
		$output .= '</div>';
		$output .= '</div>';

		print $output;
	}
	elseif(!REX_IS_VALUE[1] && $REX['REDAXO'])
	{
		$output  = 'Leider kein Inhalt - darum wird nichts angezeigt...';

		print $output;
	}
	else
	{
		echo '&nbsp;&middot&nbsp;';
	}

?>