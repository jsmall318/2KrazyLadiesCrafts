<?php

    /*** include the header ***/
    include 'includes/header.php';
?>

<div class="page-header">
  <h1 style="text-align:center">Quotes For your Old Phone</h1>
</div>

<TABLE style="text-align:left; width:800px; margin:auto;">
	<TR>
		<TD style="font-weight: bold; width:300px;">Brand:</TD>
		<TD style="width:500px;">
			<SELECT name="searchBrand" id="searchBrand">
				<OPTION value="select one">Select One</OPTION>
				<OPTION value="apple">Apple</OPTION>
				<OPTION value="samsung">Samsung</OPTION>
				<OPTION value="lg">LG</OPTION>
			</SELECT>
		</TD>
	</TR>
	<TR>
		<TD style="font-weight: bold">Model:</TD>
		<TD>
			<SELECT name="searchModel" id="searchModel">
				<OPTION value="Select One">Select One</OPTION>
			</SELECT>
		</TD>
	</TR>
	<TR>
		<TD style="font-weight: bold">Storage Capacity:</TD>
		<TD>
			<SELECT name="searchStorageCapacity" id="searchStorageCapacity">
				<OPTION value="Select One">Select One</OPTION>
			</SELECT>
		</TD>
	</TR>
	<TR>
		<TD style="font-weight: bold">Color:</TD>
		<TD>
			<SELECT name="searchColor" id="searchColor">
				<OPTION value="Select One">Select One</OPTION>
			</SELECT>
		</TD>
	</TR>
	<TR>
		<TD style="font-weight: bold; vertical-align: text-top;">Check All That Apply:</TD>
		<TD>
			<input type="checkbox" name="waterDamage" value="Y">Water Damage<br>
			<input type="checkbox" name="brokenScreen" value="Y">Broken Screen<br>
			<input type="checkbox" name="brokenBack" value="Y">Broken Back<br>
			<input type="checkbox" name="mic" value="Y">Microphone<br>
			<input type="checkbox" name="speaker" value="Y">Speaker<br>
			<input type="checkbox" name="chargePort" value="Y">Charging Port<br>
			<input type="checkbox" name="colorChange" value="Y">Change Screen/Back Color
		</TD>
	</TR>
	<TR>
		<TD style="font-weight: bold; vertical-align: text-top;">Other Information/Questions:</TD>
		<TD>
			<textarea maxlength="50" rows="4" cols="50">Enter text here...</textarea>
		</TD>
	</TR>
	<TR>
		<TD colspan="2" style="text-align:center;  height:40px; vertical-align: bottom;">
			<INPUT type="submit" value="Request Quote" style="color:black"/>
		</TD>
	</TR>
</TABLE>