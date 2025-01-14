<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{$lang_insert_image_title}</title>
	<script language="javascript" type="text/javascript" src="../../tiny_mce_popup.js"></script>
	<script language="javascript" type="text/javascript" src="../../utils/mctabs.js"></script>
	<script language="javascript" type="text/javascript" src="../../utils/form_utils.js"></script>
	<script language="javascript" type="text/javascript" src="jscripts/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="jscripts/functions.js"></script>
	<link href="css/advimage.css" rel="stylesheet" type="text/css" />
	<base target="_self" />
</head>
<body id="advimage" onload="tinyMCEPopup.executeOnLoad('init();');" style="display: none">
    <form onsubmit="insertAction();return false;" action="#" id="txpimage"> 
		<div class="tabs">
			<ul>
				<li id="general_tab" class="current"><span><a href="javascript:mcTabs.displayTab('general_tab','general_panel');" onmousedown="return false;">{$lang_advimage_tab_general}</a></span></li>
				<li id="appearance_tab"><span><a href="javascript:mcTabs.displayTab('appearance_tab','appearance_panel');" onmousedown="return false;">{$lang_advimage_tab_appearance}</a></span></li>
				<li id="advanced_tab"><span><a href="javascript:mcTabs.displayTab('advanced_tab','advanced_panel');" onmousedown="return false;">{$lang_advimage_tab_advanced}</a></span></li>
			</ul>
		</div>

		<div class="panel_wrapper">
			<div id="general_panel" class="panel current">
				<fieldset id="catselect"></fieldset>
				<div id="image_browse">
					<img src="images/loading.gif" width="32" height="32" alt="Loading" id="loading" />
				</div>
				<fieldset>
						<legend>{$lang_advimage_general}</legend>

						<table class="properties">
							<tr>
								<td class="column1"><label id="srclabel" for="src">{$lang_insert_image_src}</label></td>
								<td colspan="2"><table border="0" cellspacing="0" cellpadding="0">
									<tr> 
									  <td><input name="src" type="text" id="src" value="" /></td> 
									  <td id="srcbrowsercontainer">&nbsp;</td>
									</tr>
								  </table></td>
							</tr>
							<tr> 
								<td class="column1"><label id="altlabel" for="alt">{$lang_insert_image_alt}</label></td> 
								<td colspan="2"><input id="alt" name="alt" type="text" value="" /></td> 
							</tr> 
							<tr> 
								<td class="column1"><label id="titlelabel" for="title">{$lang_advimage_title}</label></td> 
								<td colspan="2"><input id="title" name="title" type="text" value="" /></td> 
							</tr>
						</table>
				</fieldset>
			</div>

			<div id="appearance_panel" class="panel">
				<fieldset>
					<legend>{$lang_advimage_tab_appearance}</legend>

					<table border="0" cellpadding="4" cellspacing="0">
						<tr> 
							<td class="column1"><label id="alignlabel" for="align">{$lang_insert_image_align}</label></td> 
							<td><select id="align" name="align" onchange="changeAppearance();"> 
									<option value="">{$lang_insert_image_align_default}</option> 
									<option value="baseline">{$lang_insert_image_align_baseline}</option> 
									<option value="top">{$lang_insert_image_align_top}</option> 
									<option value="middle">{$lang_insert_image_align_middle}</option> 
									<option value="bottom">{$lang_insert_image_align_bottom}</option> 
									<option value="texttop">{$lang_insert_image_align_texttop}</option> 
									<option value="absmiddle">{$lang_insert_image_align_absmiddle}</option> 
									<option value="absbottom">{$lang_insert_image_align_absbottom}</option> 
									<option value="left">{$lang_insert_image_align_left}</option> 
									<option value="right">{$lang_insert_image_align_right}</option> 
								</select> 
							</td>
							<td rowspan="6" valign="top">
								<div class="alignPreview">
									<img id="alignSampleImg" src="images/sample.gif" alt="{$lang_advimage_example_img}" />
									Lorem ipsum, Dolor sit amet, consectetuer adipiscing loreum ipsum edipiscing elit, sed diam
									nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Loreum ipsum
									edipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
									erat volutpat.
								</div>
							</td>
						</tr>

						<tr>
							<td class="column1"><label id="widthlabel" for="width">{$lang_insert_image_dimensions}</label></td>
							<td nowrap="nowrap">
								<input name="width" type="text" id="width" value="" size="5" maxlength="5" onchange="changeHeight();" /> x 
								<input name="height" type="text" id="height" value="" size="5" maxlength="5" onchange="changeWidth();" /> px
							</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td><table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td><input id="constrain" type="checkbox" name="constrain" class="checkbox" /></td>
										<td><label id="constrainlabel" for="constrain">{$lang_advimage_constrain_proportions}</label></td>
									</tr>
								</table></td>
						</tr>

						<tr>
							<td class="column1"><label id="vspacelabel" for="vspace">{$lang_insert_image_vspace}</label></td> 
							<td><input name="vspace" type="text" id="vspace" value="" size="3" maxlength="3" onchange="changeAppearance();updateStyle();" />
							</td>
						</tr>

						<tr> 
							<td class="column1"><label id="hspacelabel" for="hspace">{$lang_insert_image_hspace}</label></td> 
							<td><input name="hspace" type="text" id="hspace" value="" size="3" maxlength="3" onchange="changeAppearance();updateStyle();" /></td> 
						</tr>

						<tr>
							<td class="column1"><label id="borderlabel" for="border">{$lang_insert_image_border}</label></td> 
							<td><input id="border" name="border" type="text" value="" size="3" maxlength="3" onchange="changeAppearance();updateStyle();" /></td> 
						</tr>

						<tr>
							<td><label id="classlabel" for="classlist">{$lang_class_name}</label></td>
							<td colspan="2">
								 <select id="classlist" name="classlist">
									<option value="" selected>{$lang_not_set}</option>
								 </select>
							</td>
						</tr>

						<tr>
							<td class="column1"><label id="stylelabel" for="style">{$lang_advimage_style}</label></td> 
							<td colspan="2"><input id="style" name="style" type="text" value="" onchange="styleUpdated();" /></td> 
						</tr>

						 <tr>
							<td class="column1"><label id="classeslabel" for="classes">{$lang_advimage_classes}</label></td> 
							<td colspan="2"><input id="classes" name="classes" type="text" value="" onchange="selectByValue(this.form,'classlist',this.value,true);" /></td> 
						</tr> 
					</table>
				</fieldset>
			</div>

			<div id="advanced_panel" class="panel">
				<fieldset>
					<legend>{$lang_advimage_misc}</legend>

					<table border="0" cellpadding="4" cellspacing="0">
						<tr>
							<td class="column1"><label id="idlabel" for="id">{$lang_advimage_id}</label></td> 
							<td><input id="id" name="id" type="text" value="" /></td> 
						</tr>

						<tr>
							<td class="column1"><label id="dirlabel" for="dir">{$lang_advimage_langdir}</label></td> 
							<td>
								<select id="dir" name="dir" onchange="changeAppearance();"> 
										<option value="">{$lang_not_set}</option> 
										<option value="ltr">{$lang_advimage_ltr}</option> 
										<option value="rtl">{$lang_advimage_rtl}</option> 
								</select>
							</td> 
						</tr>

						<tr>
							<td class="column1"><label id="langlabel" for="lang">{$lang_advimage_langcode}</label></td> 
							<td>
								<input id="lang" name="lang" type="text" value="" />
							</td> 
						</tr>

						<tr>
							<td class="column1"><label id="usemaplabel" for="usemap">{$lang_advimage_image_map}</label></td> 
							<td>
								<input id="usemap" name="usemap" type="text" value="" />
							</td> 
						</tr>

						<tr>
							<td class="column1"><label id="longdesclabel" for="longdesc">{$lang_advimage_long_desc}</label></td>
							<td><table border="0" cellspacing="0" cellpadding="0">
									<tr>
									  <td><input id="longdesc" name="longdesc" type="text" value="" /></td>
									  <td id="longdesccontainer">&nbsp;</td>
									</tr>
								</table></td> 
						</tr>
					</table>
				</fieldset>
			</div>
		</div>

		<div class="mceActionPanel">
			<div style="float: left">
				<input type="button" id="insert" name="insert" value="{$lang_insert}" onclick="insertAction();" />
			</div>

			<div style="float: right">
				<input type="button" id="cancel" name="cancel" value="{$lang_cancel}" onclick="cancelAction();" />
			</div>
		</div>
    </form>
</body> 
</html> 
