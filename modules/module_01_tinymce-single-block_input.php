<script type="text/javascript">

	jQuery(document).ready(function($) {
		// Accordion
		$("#accordion").accordion({ header: "h3" });

		// Tabs
		$('#tabs').tabs();
	});
</script>

<div id="accordion">

	<div>
		<h3><a href="#">Fliesstext</a></h3>
		<div><textarea name="VALUE[1]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[1]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Einstellungen / Aufteilung</a></h3>
		<div>
			<div style="position: relative; float: left; padding-top: 30px; width: 100%;">
				<h2>Nutzung der Spalten</h2>
				<div style="position:relative; float:left; width: 33.3%">
					Desktop-Breite verwenden?:
					<br />
					<select name="VALUE[2]">
			        	<?php
				        	$desktops = array('false'=>'nein', 'true'=>'ja');
				        	$desktopcurrent = "REX_VALUE[2]";
         
				        	foreach ( $desktops as $desktop => $key)
				        	{
				        		$selecteddesk = $desktop == $desktopcurrent ? ' selected="selected"' : '';
				        		echo '<option value="'.$desktop.'"'. $selecteddesk .'>'. $key .'</option>';
				        	}
			        	?>
			        </select>
			    </div>
				<div style="position:relative;float:left; width: 33.3%">
					Tablet-Breite verwenden?:
					<br />
					<select name="VALUE[3]">
			        	<?php
				        	$tablets = array('false'=>'nein', 'true'=>'ja');
				        	$tabletcurrent = "REX_VALUE[3]";
         
					        foreach ( $tablets as $tablet => $key)
					        {
					        	$selectedtab = $tablet == $tabletcurrent ? ' selected="selected"' : '';
					        	echo '<option value="'.$tablet.'"'. $selectedtab .'>'. $key .'</option>';
					        }
			        	?>
			        </select>
			    </div>
				<div style="position:relative;float:left; width: 33.3%">
					Mobile-Breite verwenden?:
					<br />
					<select name="VALUE[4]">
				        <?php
					        $mobiles = array('false'=>'nein', 'true'=>'ja');
					        $mobilecurrent = "REX_VALUE[4]";
         	
					        foreach ( $mobiles as $mobile => $key)
					        {
				    	    	$selectedmob = $mobile == $mobilecurrent ? ' selected="selected"' : '';
				        		echo '<option value="'.$mobile.'"'. $selectedmob .'>'. $key .'</option>';
					        }
				        ?>
			        </select>
		    	</div>
			</div>
			<div style="position: relative; float: left; padding-top: 30px; width: 100%;">
				<h2>Breite der Spalte</h2>
				<div style="position: relative; float:left; width: 33.3%">
					Desktop-Spalte aufteilen?:
					<br />
					<select name="VALUE[5]">
				        <?php
					        $desktopcols = array('12','11','10','9','8','7','6','5','4','3','2','1');
					        $desktopcolcurrent = "REX_VALUE[5]";
         
				    	    foreach ( $desktopcols as $desktopcol)
				        	{
					        	$selecteddeskcol = $desktopcol == $desktopcolcurrent ? ' selected="selected"' : '';
					        	echo '<option value="'.$desktopcol.'"'. $selecteddeskcol .'>'. $desktopcol .'</option>';
					        }
				        ?>
		        	</select>
			    </div>
				<div style="position: relative; float:left; width: 33.3%">
					Tablet-Spalte aufteilen?:
					<br />
					<select name="VALUE[6]">
			    	    <?php
				    	    $tabletcols = array('12','11','10','9','8','7','6','5','4','3','2','1');
				        	$tabletcolcurrent = "REX_VALUE[6]";
         
					        foreach ( $tabletcols as $tabletcol)
					        {
					        	$selectedtabcol = $tabletcol == $tabletcolcurrent ? ' selected="selected"' : '';
					        	echo '<option value="'.$tabletcol.'"'. $selectedtabcol .'>'. $tabletcol .'</option>';
					        }
			        	?>
			        </select>
			    </div>
				<div style="position: relative; float:left; width: 33.3%">
					Mobile-Spalte aufteilen?:
					<br />
					<select name="VALUE[7]">
				        <?php
					        $mobilecols = array('12','11','10','9','8','7','6','5','4','3','2','1');
					        $mobilecolcurrent = "REX_VALUE[7]";
         
					        foreach ( $mobilecols as $mobilecol)
				    	    {
					        	$selectedmobcol = $mobilecol == $mobilecolcurrent ? ' selected="selected"' : '';
					        	echo '<option value="'.$mobilecol.'"'. $selectedmobcol .'>'. $mobilecol .'</option>';
					        }
				        ?>
		        	</select>
			    </div>
			</div>
			<div style="position: relative; float: left; padding-top: 30px; width: 100%;">
				<h2>Specials:</h2>
				<div style="position: relative; float:left; width: 33.3%">
					Versatz der Spalte:
					<br />
					<select name="VALUE[8]">
			        	<?php
				        	$offsetcols = array('none','12','11','10','9','8','7','6','5','4','3','2','1');
					        $offsetcolcurrent = "REX_VALUE[8]";
    	     
					        foreach ( $offsetcols as $offsetcol)
					        {
					        	$selectedoffsetcol = $offsetcol == $offsetcolcurrent ? ' selected="selected"' : '';
				    	    	echo '<option value="'.$offsetcol.'"'. $selectedoffsetcol .'>'. $offsetcol .'</option>';
				        	}
				        ?>
			        </select>
			    </div>
				<div style="position: relative; float:left; width: 33.3%">
					Anordnung der Spalte:
					<br />
					<select name="VALUE[9]">
				        <?php
					        $pushpullcols = array('none','push','pull');
					        $pushpullcurrent = "REX_VALUE[9]";
         
					        foreach ( $pushpullcols as $pushpullcol)
				    	    {
					        	$selectedpushpull = $pushpullcol == $pushpullcurrent ? ' selected="selected"' : '';
					        	echo '<option value="'.$pushpullcol.'"'. $selectedpushpull .'>'. $pushpullcol .'</option>';
					        }
				        ?>
		        	</select>
			    </div>
				<div style="position: relative; float:left; width: 33.3%">
					Anordnung der Spalte um wieviel?:
					<br />
					<select name="VALUE[10]">
			    	    <?php
				    	    $ppoffsets = array('12','11','10','9','8','7','6','5','4','3','2','1');
				        	$ppoffsetscurrent = "REX_VALUE[10]";
         
					        foreach ( $ppoffsets as $ppoffset)
					        {
					        	$selectedppoffset = $ppoffset == $ppoffsetscurrent ? ' selected="selected"' : '';
					        	echo '<option value="'.$ppoffset.'"'. $selectedppoffset .'>'. $ppoffset .'</option>';
					        }
			        	?>
			        </select>
			    </div>
			</div>
		</div>
	</div>
</div>