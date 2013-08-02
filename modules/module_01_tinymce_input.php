<script type="text/javascript">

	jQuery(document).ready(function($) {
		// Accordion
		$("#accordion").accordion({ header: "h3" });

		// Tabs
		$('#tabs').tabs();
	});
</script>

<strong>Fliesstext:</strong><br />

<!-- <div id="tabs">

	<ul>
		<li><a href="#tabs-1">Text 01</a></li>
		<li><a href="#tabs-2">Text 02</a></li>
		<li><a href="#tabs-3">Text 03</a></li>
		<li><a href="#tabs-4">Text 04</a></li>
		<li><a href="#tabs-5">Text 05</a></li>
		<li><a href="#tabs-6">Text 06</a></li>
		<li><a href="#tabs-7">Text 07</a></li>
		<li><a href="#tabs-8">Text 08</a></li>
		<li><a href="#tabs-9">Text 09</a></li>
		<li><a href="#tabs-10">Text 10</a></li>
		<li><a href="#tabs-11">Text 11</a></li>
		<li><a href="#tabs-12">Text 12</a></li>
	</ul>

	<div id="tabs-1"><textarea name="VALUE[1]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[1]</textarea></div>
	<div id="tabs-2"><textarea name="VALUE[2]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[2]</textarea></div>
	<div id="tabs-3"><textarea name="VALUE[3]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[3]</textarea></div>
	<div id="tabs-4"><textarea name="VALUE[4]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[4]</textarea></div>
	<div id="tabs-5"><textarea name="VALUE[5]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[5]</textarea></div>
	<div id="tabs-6"><textarea name="VALUE[6]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[6]</textarea></div>
	<div id="tabs-7"><textarea name="VALUE[7]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[7]</textarea></div>
	<div id="tabs-8"><textarea name="VALUE[8]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[8]</textarea></div>
	<div id="tabs-9"><textarea name="VALUE[9]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[9]</textarea></div>
	<div id="tabs-10"><textarea name="VALUE[10]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[10]</textarea></div>
	<div id="tabs-11"><textarea name="VALUE[11]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[11]</textarea></div>
	<div id="tabs-12"><textarea name="VALUE[12]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[12]</textarea></div>

</div> -->

<div id="accordion">

	<div>
		<h3><a href="#">Text 01</a></h3>
		<div><textarea name="VALUE[1]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[1]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 02</a></h3>
		<div><textarea name="VALUE[2]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[2]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 03</a></h3>
		<div><textarea name="VALUE[3]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[3]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 04</a></h3>
		<div><textarea name="VALUE[4]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[4]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 05</a></h3>
		<div><textarea name="VALUE[5]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[5]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 06</a></h3>
		<div><textarea name="VALUE[6]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[6]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 07</a></h3>
		<div><textarea name="VALUE[7]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[7]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 08</a></h3>
		<div><textarea name="VALUE[8]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[8]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 09</a></h3>
		<div><textarea name="VALUE[9]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[9]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 10</a></h3>
		<div><textarea name="VALUE[10]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[10]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 11</a></h3>
		<div><textarea name="VALUE[11]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[11]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Text 12</a></h3>
		<div><textarea name="VALUE[12]" class="tinyMCEEditor" style="width:675px;height:350px;">REX_VALUE[12]</textarea></div>
	</div>
	<div>
		<h3><a href="#">Einstellungen / Aufteilung</a></h3>
		<div>
			<h2>Nutzung der Spalten</h2>
			<div stlye="float:left; width: 33.3%">
				Desktop-Breite verwenden?:
				<select name="VALUE[13]">
			        <?php
				        $desktops = array('false'=>'nein', 'true'=>'ja');
				        $desktopcurrent = "REX_VALUE[13]";
         
				        foreach ( $desktops as $desktop => $key)
				        {
				        	$selecteddesk = $desktop == $desktopcurrent ? ' selected="selected"' : '';
				        	echo '<option value="'.$desktop.'"'. $selecteddesk .'>'. $key .'</option>';
				        }
			        ?>
		        </select>
		    </div>
			<div stlye="float:left; width: 33.3%">
				Tablet-Breite verwenden?:
				<select name="VALUE[14]">
			        <?php
				        $tablets = array('false'=>'nein', 'true'=>'ja');
				        $tabletcurrent = "REX_VALUE[14]";
         
				        foreach ( $tablets as $tablet => $key)
				        {
				        	$selectedtab = $tablet == $tabletcurrent ? ' selected="selected"' : '';
				        	echo '<option value="'.$tablet.'"'. $selectedtab .'>'. $key .'</option>';
				        }
			        ?>
		        </select>
		    </div>
			<div stlye="float:left; width: 33.3%">
				Mobile-Breite verwenden?:
				<select name="VALUE[15]">
			        <?php
				        $mobiles = array('false'=>'nein', 'true'=>'ja');
				        $mobilecurrent = "REX_VALUE[15]";
         
				        foreach ( $mobiles as $mobile => $key)
				        {
				        	$selectedmob = $mobile == $mobilecurrent ? ' selected="selected"' : '';
				        	echo '<option value="'.$mobile.'"'. $selectedmob .'>'. $key .'</option>';
				        }
			        ?>
		        </select>
		    </div>
			<br />
			<h2>Aufteilung der Spalten</h2>
			<div stlye="float:left; width: 33.3%">
				Desktop-Spalten aufteilen?:
				<select name="VALUE[16]">
			        <?php
				        $desktopscols = array('false'=>'nein', 'true'=>'ja');
				        $desktopcolcurrent = "REX_VALUE[16]";
         
				        foreach ( $desktopcols as $desktopcol => $key)
				        {
				        	$selecteddeskcol = $desktopcol == $desktopcolcurrent ? ' selected="selected"' : '';
				        	echo '<option value="'.$desktopcol.'"'. $selecteddeskcol .'>'. $key .'</option>';
				        }
			        ?>
		        </select>
		    </div>
			<div stlye="float:left; width: 33.3%">
				Tablet-Spalten aufteilen?:
				<select name="VALUE[17]">
			        <?php
				        $tabletcols = array('false'=>'nein', 'true'=>'ja');
				        $tabletcolcurrent = "REX_VALUE[17]";
         
				        foreach ( $tabletcols as $tabletcol => $key)
				        {
				        	$selectedtabcol = $tabletcol == $tabletcolcurrent ? ' selected="selected"' : '';
				        	echo '<option value="'.$tabletcol.'"'. $selectedtabcol .'>'. $key .'</option>';
				        }
			        ?>
		        </select>
		    </div>
			<div stlye="float:left; width: 33.3%">
				Mobile-Spalten aufteilen?:
				<select name="VALUE[18]">
			        <?php
				        $mobilecols = array('false'=>'nein', 'true'=>'ja');
				        $mobilecolcurrent = "REX_VALUE[18]";
         
				        foreach ( $mobilecols as $mobilecol => $key)
				        {
				        	$selectedmobcol = $mobilecol == $mobilecolcurrent ? ' selected="selected"' : '';
				        	echo '<option value="'.$mobilecol.'"'. $selectedmobcol .'>'. $key .'</option>';
				        }
			        ?>
		        </select>
		    </div>
		</div>
	</div>


</div>