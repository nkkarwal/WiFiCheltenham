<?php
require_once('vertex/cms_core_functions.php');
s5_restricted_access_call();
/*
-----------------------------------------
Hexa Corp - Shape 5 Club Design
-----------------------------------------
Site:      shape5.com
Email:     contact@shape5.com
@license:  Copyrighted Commercial Software
@copyright (C) 2018 Shape 5 LLC

*/

?>
<!DOCTYPE HTML>
<html <?php s5_language_call(); ?>>
<head>
<?php s5_head_call(); ?>
<?php
require_once("vertex/parameters.php");
require_once("vertex/general_functions.php");
require_once("vertex/module_calcs.php");
$s5_responsive_menu_button = "override";
require_once("vertex/includes/vertex_includes_header.php");
//Detect homepage and disable side images on other pages
$app = JFactory::getApplication();
$menu = $app->getMenu();
$lang = JFactory::getLanguage();
$s5_frontpage = "yes";
if ($menu->getActive() == $menu->getDefault($lang->getTag())) {}
else {
	$s5_frontpage = "no";
}
?>

<?php if(($s5_fonts_highlight1 != "Arial") && ($s5_fonts_highlight1 != "Helvetica") && ($s5_fonts_highlight1 != "Sans-Serif")) { ?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=<?php echo str_replace(" ","%20",$s5_fonts_highlight1); if ($s5_fonts_highlight1_style != "") { echo ":".$s5_fonts_highlight1_style; } ?>" />
<?php } ?>

<style type="text/css"> 
.highlight_font, h1, h2, h3, h4, h5, .iacf_title, .video_text_large, .button, button, .readon, p.readmore a:hover, .btn, .btn-primary, .learn_about_us_icon_group_title, .stats_number, .s5_masonry_articles a {
font-family: <?php echo $s5_fonts_highlight1; ?> !important;
}

/*
body, .inputbox, .default_font {font-family: '<?php echo $s5_fonts;?>',Helvetica,Arial,Sans-Serif !important;} 

.btn-link, a, .highlight1_color, .module_round_box_outer ul li a:hover, #s5_bottom_menu_wrap a:hover, ul.menu li.current a, ul.s5_am_innermenu a:hover, #s5_responsive_menu_button:hover {
color:#<?php echo $s5_highlightcolor1; ?>;
}

#s5_bottom_menu_wrap a:hover, .icon_group_icon, ul.menu li.current a, ul.s5_am_innermenu a:hover, .testimonial_name, .team_title {
color:#<?php echo $s5_highlightcolor1; ?> !important;
}

.S5_submenu_item:hover, .S5_grouped_child_item .S5_submenu_item:hover,
.S5_submenu_item.active, .S5_grouped_child_item .S5_submenu_item.active {
background:#<?php echo change_Color($s5_highlightcolor1,'+45'); ?> !important;
}

#s5_nav li.active, #s5_top_bar, a.readon, a.pager, button, .button, .pagenav a, .s5_ls_readmore, .readmore a:hover, .module_round_box.highlight1, .jdGallery .carousel .carouselInner .thumbnail.active, .item-page .dropdown-menu li > a:hover, .s5_pricetable_column.recommended .s5_title, .ac-container input:checked + label, .ac-container input:checked + label:hover, .ac-container2 input:checked + label, .ac-container2 input:checked + label:hover, #s5_responsive_mobile_sidebar_login_bottom button, #s5_responsive_mobile_sidebar_register_bottom button, #s5_accordion_menu h3:hover, #s5_accordion_menu h3.s5_am_open, .s5_tab_show_slide_button_active, #s5_pos_custom_5, #s5_pos_custom_7, .icon_hover, .s5_masonry_active, .edit a.btn {
background:#<?php echo $s5_highlightcolor1; ?> !important;
}

#s5_scrolltopvar:hover, #s5_nav li.mainMenuParentBtnFocused, #s5_nav li.mainMenuParentBtn:hover, #subMenusContainer div ul {
background:#<?php echo change_Color($s5_highlightcolor1,'+15'); ?> !important;
}
*/
#subMenusContainer div.s5_sub_wrap_lower ul, #subMenusContainer div.s5_sub_wrap_lower_rtl ul {
border:solid 1px #<?php echo change_Color($s5_highlightcolor1,'+25'); ?> !important;
}
/*
#s5_nav li.mainMenuParentBtnFocused, #s5_nav li.mainMenuParentBtn:hover, #s5_nav li.active {
border-left:solid 1px #<?php echo $s5_highlightcolor1; ?> !important;
}
*/
a.readon:hover, a.pager:hover, button:hover, .button:hover, .pagenav a:hover, .s5_ls_readmore:hover, .readmore a, #s5_scrolltopvar, .icon_outer_wrap, .learn_about_us_icon_group_icon, .s5_masoncat, a.readon_highlight2, .s5_masonry_inactive:hover, .module_round_box.highlight2, .edit a.btn:hover {
background:#<?php echo $s5_highlightcolor2; ?> !important;
}

a.readon_highlight2:hover, a.readon_highlight_dark:hover {
background:#<?php echo $s5_highlightcolor1; ?> !important;
}

@media screen and (max-width: <?php echo $s5_responsive_mobile_bar_trigger; ?>px){
#s5_menu_wrap {
background:#FFFFFF !important;
}
#s5_scroll_wrap {
display:none;
}
}


<?php if ($s5_uppercase == "yes") { ?>
.icon_image_box h3, .uppercase, button, .button, .btn, .readon, #s5_nav li, #s5_login, #s5_register, #subMenusContainer a, #s5_nav li li a, .customer_quote_name strong, .stats_text, .s5_masoncat, .s5_masonry_inactive, .s5_masonry_active {
text-transform:uppercase;
}
<?php } ?>

<?php if ($s5_hide_subarrows == "yes") { ?>
.mainParentBtn a, #s5_nav li.mainParentBtn:hover a, #s5_nav li.mainMenuParentBtnFocused.mainParentBtn a, .s5_wrap_fmfullwidth .mainParentBtn a {
background:none !important;
}
#s5_nav li.mainParentBtn .s5_level1_span2 a {
padding:0px;
}
<?php } ?>

<?php if ($s5_pos_right == "published" || $s5_pos_right_inset == "published" || $s5_pos_right_top == "published" || $s5_pos_right_bottom == "published") { ?>
#s5_center_column_wrap_inner {
padding-right:6%;
}
@media screen and (max-width: 1100px){
#s5_center_column_wrap_inner {
padding-right:4%;
}
@media screen and (max-width: <?php echo $s5_responsive_fluid_single_column; ?>px){
#s5_center_column_wrap_inner {
padding-right:0%;
}
}
<?php } ?>

<?php if ($s5_pos_left == "published" || $s5_pos_left_inset == "published" || $s5_pos_left_top == "published" || $s5_pos_left_bottom == "published") { ?>
#s5_center_column_wrap_inner {
padding-left:6%;
}
@media screen and (max-width: 1100px){
#s5_center_column_wrap_inner {
padding-left:4%;
}
@media screen and (max-width: <?php echo $s5_responsive_fluid_single_column; ?>px){
#s5_center_column_wrap_inner {
padding-left:0%;
}
}
<?php } ?>

<?php if ($browser == "ie7" || $browser == "ie8" || $browser == "ie9") { ?>
.s5_lr_tab_inner {writing-mode: bt-rl;filter: flipV flipH;}
<?php } ?>

<?php if($s5_thirdparty == "enabled") { ?>
/* k2 stuff */
div.itemHeader h2.itemTitle, div.catItemHeader h3.catItemTitle, h3.userItemTitle a, #comments-form p, #comments-report-form p, #comments-form span, #comments-form .counter, #comments .comment-author, #comments .author-homepage,
#comments-form p, #comments-form #comments-form-buttons, #comments-form #comments-form-error, #comments-form #comments-form-captcha-holder {font-family: '<?php echo $s5_fonts;?>',Helvetica,Arial,Sans-Serif ;} 
<?php } ?>	
.s5_wrap{width:<?php echo $s5_body_width; echo $s5_fixed_fluid ?>;}	
</style>
</head>

<body id="s5_body">

<div id="s5_scrolltotop"></div>

<!-- Top Vertex Calls -->
<?php require_once("vertex/includes/vertex_includes_top.php"); ?>

<!-- Body Padding Div Used For Responsive Spacing -->		
<div id="s5_body_padding"<?php if ($s5_frontpage != "yes") { ?> class="s5_not_frontpage"<?php } ?>>

	<!-- Header -->			
		<header id="s5_header_area1">		
		<div id="s5_header_area2">	
		<div id="s5_header_area_inner">					
			<div id="s5_header_wrap">
			
				<?php if ($s5_pos_custom_1 == "published" || $s5_pos_custom_2 == "published" || $s5_font_resizer == "yes" || $s5_pos_search == "published" || $s5_login != "" || $s5_register != "") { ?>
					<div id="s5_top_bar">
						<div class="s5_wrap" id="s5_top_bar_inner">
							<?php if ($s5_pos_custom_1 == "published") { ?>
								<div class="s5_header_left" id="s5_pos_custom_1">
									<?php s5_module_call('custom_1','notitle'); ?>
									<div style="clear:both; height:0px"></div>
								</div>
							<?php } ?>
							<?php if ($s5_pos_search == "published") { ?>
								<div onclick="s5_search_open()" id="s5_search_wrap" class="ion-search s5_header_right"></div>
								<div id="s5_search_overlay" class="s5_search_close">
									<div class="ion-close s5_icon_search_close" onclick="s5_search_close()"></div>		
									<div class="s5_wrap">
										<div id="s5_search_pos_wrap">
										<?php s5_module_call('search','round_box'); ?>
										</div>		
									</div>
								</div>
							<?php } ?>
							<?php if ($s5_pos_custom_2 == "published") { ?>
								<div class="s5_header_right" id="s5_pos_custom_2">
									<?php s5_module_call('custom_2','notitle'); ?>
									<div style="clear:both; height:0px"></div>
								</div>
							<?php } ?>
							<?php if (($s5_login != "") || ($s5_register != "")) { ?>	
								<div class="s5_header_right" id="s5_loginreg">	
									<div id="s5_logregtm">			
										<?php if (($s5_register != "" && $s5_pos_register == "published") || ($s5_register != "" && $s5_register_url != "")) { ?>
											<?php if ($s5_user_id) { } else {?>
												<div id="s5_register" class="s5box_register">
													<?php echo $s5_register;?>				
												</div>
											<?php } ?>							
										<?php } ?>					
										<?php if (($s5_login != "" && $s5_pos_login == "published") || ($s5_login != "" && $s5_login_url != "")) { ?>
											<div id="s5_login" class="s5box_login">
												<?php if ($s5_user_id) { echo $s5_loginout; } else { echo $s5_login; } ?>
											</div>						
										<?php } ?>						
									</div>
								</div>
							<?php } ?>
							<?php if($s5_font_resizer == "yes") { ?>
								<div class="s5_header_right" id="fontControls"></div>
							<?php } ?>
							<div style="clear:both; height:0px"></div>	
						</div>
					</div>
				<?php } ?>
				
				<div style="clear:both; height:0px"></div>	

				<div id="s5_menu_wrap">	
					<div id="s5_menu_wrap2" class="s5_wrap">
						<div id="s5_menu_wrap_inner">
						
							<?php if ($s5_responsive_menu_button == "override" && ($s5_responsive_mobile_layout != "dropdowns") ) { ?>
								<div id="s5_responsive_menu_button" style="display:none" onclick="s5_responsive_mobile_sidebar()"><div class="s5_menuicon ion-android-menu"></div></div>
							<?php } ?>
						
							<?php if($s5_logo_type != "none") { ?>
								<div id="s5_logo_wrap" class="s5_logo s5_logo_<?php echo $s5_logo_type; ?>">
									<?php if ($s5_logo_type == "css") { ?>
										<img alt="logo" src="<?php echo $s5_directory_path ?>/images/s5_logo.png" onclick="window.document.location.href='<?php echo $LiveSiteUrl; ?>'" />
									<?php } ?>
									<?php if ($s5_logo_type == "image") { 
										if(strrpos($s5_logo_image_file,"ttp://") > 0) { ?>
											<img alt="logo" src="<?php echo $s5_logo_image_file; ?>" onclick="window.document.location.href='<?php echo $LiveSiteUrl ?>'" />
										<?php } else { ?>
											<img alt="logo" src="<?php echo $LiveSiteUrl; echo $s5_logo_image_file; ?>" onclick="window.document.location.href='<?php echo $LiveSiteUrl ?>'" />
										<?php } ?>
									<?php } ?>
									<?php if ($s5_pos_logo == "published" && $s5_logo_type == "module") { ?>
										<div id="s5_logo_text_wrap">
											<?php s5_module_call('logo','notitle'); ?>
											<div style="clear:both;"></div>
										</div>
									<?php } ?>
									<?php if ($s5_logo_type == "text") { ?>
										<div id="s5_logo_text_wrap">
											<?php echo $s5_logo_text; ?>
											<div style="clear:both;"></div>
										</div>
									<?php } ?>
									<div style="clear:both;"></div>
								</div>	
							<?php } ?>
							
							<?php if ($s5_show_menu == "show") { ?>	
									<nav id="s5_menu_inner" class="s5_hide">
										<?php include("vertex/s5flex_menu/default.php"); ?>
										<div style="clear:both;"></div>
									</nav>
							<?php } ?>

							<div style="clear:both;"></div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		</div>
		</header>
	<!-- End Header -->	
	
	
	<?php if ($s5_pos_custom_3 == "published") { ?>
		<div id="s5_pos_custom_3_4_wrap">
			<div id="s5_pos_custom_3">
				<?php s5_module_call('custom_3','notitle'); ?>
				<div style="clear:both; height:0px"></div>
			</div>
			<?php if ($s5_pos_custom_4 == "published") { ?>
				<div id="s5_pos_custom_4_wrap">
				<div id="s5_pos_custom_4_wrap_inner" class="s5_wrap">
				<div id="s5_pos_custom_4">
					<?php s5_module_call('custom_4','notitle'); ?>
					<div style="clear:both; height:0px"></div>
				</div>
				</div>
				</div>
			<?php } ?>
			<div style="clear:both; height:0px"></div>
		</div>
	<?php } ?>
	
	
	<!-- <?php if ($s5_pos_custom_5 == "published") { ?>
		<div id="s5_pos_custom_5">
			<div class="s5_wrap 1">
				<?php //s5_module_call('custom_5','notitle'); ?>
				<div style="clear:both; height:0px"></div>
			</div>
		</div>
	<?php } ?>
 -->	
	
	<?php if ($s5_pos_breadcrumb == "published") { ?>
		<div id="s5_breadcrumb_wrap" class="s5_wrap">
			<?php s5_module_call('breadcrumb','notitle'); ?>
		</div>
		<div style="clear:both;"></div>
	<?php } ?>

	
	<!-- Top Row1 -->	
		<?php if ($s5_pos_top_row1_1 == "published" || $s5_pos_top_row1_2 == "published" || $s5_pos_top_row1_3 == "published" || $s5_pos_top_row1_4 == "published" || $s5_pos_top_row1_5 == "published" || $s5_pos_top_row1_6 == "published") { ?>
			<section id="s5_top_row1_area1"<?php if ($s5_top_row1_area1_background == "no") { ?> class="s5_slidesection s5_no_custom_bg"<?php } else { ?> class="s5_slidesection s5_yes_custom_bg<?php if ($s5_top_row1_area1_background_color == "FFFFFF" && $s5_top_row1_area1_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
			<div id="s5_top_row1_area2"<?php if ($s5_top_row1_area2_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_top_row1_area2_background_color == "FFFFFF" && $s5_top_row1_area2_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
			<div id="s5_top_row1_area_inner" class="s5_wrap">

				<div id="s5_top_row1_wrap">
				<div id="s5_top_row1">
				<div id="s5_top_row1_inner">
				
					<?php if ($s5_pos_top_row1_1 == "published") { ?>
						<div id="s5_pos_top_row1_1" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_1_width ?>%">
							<?php s5_module_call('top_row1_1','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row1_2 == "published") { ?>
						<div id="s5_pos_top_row1_2" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_2_width ?>%">
							<?php s5_module_call('top_row1_2','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row1_3 == "published") { ?>
						<div id="s5_pos_top_row1_3" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_3_width ?>%">
							<?php s5_module_call('top_row1_3','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row1_4 == "published") { ?>
						<div id="s5_pos_top_row1_4" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_4_width ?>%">
							<?php s5_module_call('top_row1_4','round_box'); ?>
						</div>
					<?php } ?>

					<?php if ($s5_pos_top_row1_5 == "published") { ?>
						<div id="s5_pos_top_row1_5" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_5_width ?>%">
							<?php s5_module_call('top_row1_5','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row1_6 == "published") { ?>
						<div id="s5_pos_top_row1_6" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_6_width ?>%">
							<?php s5_module_call('top_row1_6','round_box'); ?>
						</div>
					<?php } ?>
						
					<div style="clear:both; height:0px"></div>
					
				</div>
				</div>
				</div>

		</div>
		</div>
		</section>
		<?php } ?>
	<!-- End Top Row1 -->	
		
		
		
	<!-- Top Row2 -->	
		<?php if ($s5_pos_top_row2_1 == "published" || $s5_pos_top_row2_2 == "published" || $s5_pos_top_row2_3 == "published" || $s5_pos_top_row2_4 == "published" || $s5_pos_top_row2_5 == "published" || $s5_pos_top_row2_6 == "published") { ?>
		<?php if ($s5_frontpage == "yes") { ?>
		<div class="s5_frontpage_margin">
		<?php } ?>
		<section id="s5_top_row2_area1"<?php if ($s5_top_row2_area1_background == "no") { ?> class="s5_slidesection s5_no_custom_bg"<?php } else { ?> class="s5_slidesection s5_yes_custom_bg<?php if ($s5_top_row2_area1_background_color == "FFFFFF" && $s5_top_row2_area1_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
		<div id="s5_top_row2_area2"<?php if ($s5_top_row2_area2_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_top_row2_area2_background_color == "FFFFFF" && $s5_top_row2_area2_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
		<div id="s5_top_row2_area_inner" class="s5_wrap">			
		
			<div id="s5_top_row2_wrap">
			<div id="s5_top_row2">
			<div id="s5_top_row2_inner">	
			
				<?php if ($s5_pos_top_row2_1 == "published") { ?>
					<div id="s5_pos_top_row2_1" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_1_width ?>%">
						<?php s5_module_call('top_row2_1','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row2_2 == "published") { ?>
					<div id="s5_pos_top_row2_2" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_2_width ?>%">
						<?php s5_module_call('top_row2_2','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row2_3 == "published") { ?>
					<div id="s5_pos_top_row2_3" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_3_width ?>%">
						<?php s5_module_call('top_row2_3','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row2_4 == "published") { ?>
					<div id="s5_pos_top_row2_4" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_4_width ?>%">
						<?php s5_module_call('top_row2_4','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row2_5 == "published") { ?>
					<div id="s5_pos_top_row2_5" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_5_width ?>%">
						<?php s5_module_call('top_row2_5','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row2_6 == "published") { ?>
					<div id="s5_pos_top_row2_6" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_6_width ?>%">
						<?php s5_module_call('top_row2_6','round_box'); ?>
					</div>
				<?php } ?>			
				
				<div style="clear:both; height:0px"></div>
				
			</div>
			</div>	
			</div>	
				
		</div>
		</div>
		</section>
		<?php if ($s5_frontpage == "yes") { ?>
		</div>
		<?php } ?>
		<?php } ?>
	<!-- End Top Row2 -->
	
	
	
	<!-- Top Row3 -->	
		<?php if ($s5_pos_top_row3_1 == "published" || $s5_pos_top_row3_2 == "published" || $s5_pos_top_row3_3 == "published" || $s5_pos_top_row3_4 == "published" || $s5_pos_top_row3_5 == "published" || $s5_pos_top_row3_6 == "published") { ?>
		<section id="s5_top_row3_area1"<?php if ($s5_top_row3_area1_background == "no") { ?> class="s5_slidesection s5_no_custom_bg"<?php } else { ?> class="s5_slidesection s5_yes_custom_bg<?php if ($s5_top_row3_area1_background_color == "FFFFFF" && $s5_top_row3_area1_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>	
		<div id="s5_top_row3_area2"<?php if ($s5_top_row3_area2_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_top_row3_area2_background_color == "FFFFFF" && $s5_top_row3_area2_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
		<div id="s5_top_row3_area_inner" class="s5_wrap">
		
			<div id="s5_top_row3_wrap">
			<div id="s5_top_row3">
			<div id="s5_top_row3_inner">
			
				<?php if ($s5_pos_top_row3_1 == "published") { ?>
					<div id="s5_pos_top_row3_1" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_1_width ?>%">
						<?php s5_module_call('top_row3_1','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row3_2 == "published") { ?>
					<div id="s5_pos_top_row3_2" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_2_width ?>%">
						<?php s5_module_call('top_row3_2','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row3_3 == "published") { ?>
					<div id="s5_pos_top_row3_3" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_3_width ?>%">
						<?php s5_module_call('top_row3_3','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row3_4 == "published") { ?>
					<div id="s5_pos_top_row3_4" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_4_width ?>%">
						<?php s5_module_call('top_row3_4','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row3_5 == "published") { ?>
					<div id="s5_pos_top_row3_5" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_5_width ?>%">
						<?php s5_module_call('top_row3_5','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_top_row3_6 == "published") { ?>
					<div id="s5_pos_top_row3_6" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_6_width ?>%">
						<?php s5_module_call('top_row3_6','round_box'); ?>
					</div>
				<?php } ?>			
				
				<div style="clear:both; height:0px"></div>

			</div>
			</div>
			</div>

		</div>
		</div>
		</section>
		<?php } ?>
	<!-- End Top Row3 -->	
		
		
	<!-- Center area -->	
		<?php if ($s5_show_component == "yes" || $s5_pos_left_top == "published" || $s5_pos_left == "published" || $s5_pos_left_inset == "published" || $s5_pos_left_bottom == "published" || $s5_pos_right_top == "published" || $s5_pos_right == "published" || $s5_pos_right_inset == "published" || $s5_pos_right_bottom == "published" || $s5_pos_middle_top_1 == "published" || $s5_pos_middle_top_2 == "published" || $s5_pos_middle_top_3 == "published" || $s5_pos_middle_top_4 == "published" || $s5_pos_middle_top_5 == "published" || $s5_pos_middle_top_6 == "published" || $s5_pos_above_body_1 == "published" || $s5_pos_above_body_2 == "published" || $s5_pos_above_body_3 == "published" || $s5_pos_above_body_4 == "published" || $s5_pos_above_body_5 == "published" || $s5_pos_above_body_6 == "published" || $s5_pos_middle_bottom_1 == "published" || $s5_pos_middle_bottom_2 == "published" || $s5_pos_middle_bottom_3 == "published" || $s5_pos_middle_bottom_4 == "published" || $s5_pos_middle_bottom_5 == "published" || $s5_pos_middle_bottom_6 == "published" || $s5_pos_below_body_1 == "published" || $s5_pos_below_body_2 == "published" || $s5_pos_below_body_3 == "published" || $s5_pos_below_body_4 == "published" || $s5_pos_below_body_5 == "published" || $s5_pos_below_body_6 == "published" || $s5_pos_above_columns_1 == "published" ||  $s5_pos_above_columns_2 == "published" ||  $s5_pos_above_columns_3 == "published" ||  $s5_pos_above_columns_4 == "published" ||  $s5_pos_above_columns_5 == "published" ||  $s5_pos_above_columns_6 == "published" ||  $s5_pos_below_columns_1 == "published" ||  $s5_pos_below_columns_2 == "published" ||  $s5_pos_below_columns_3 == "published" ||  $s5_pos_below_columns_4 == "published" ||  $s5_pos_below_columns_5 == "published" ||  $s5_pos_below_columns_6 == "published") { ?>
		<section id="s5_center_area1"<?php if ($s5_center_area1_background == "no") { ?> class="s5_slidesection s5_no_custom_bg"<?php } else { ?> class="s5_slidesection s5_yes_custom_bg<?php if ($s5_center_area1_background_color == "FFFFFF" && $s5_center_area1_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
		<div id="s5_center_area2"<?php if ($s5_center_area2_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_center_area2_background_color == "FFFFFF" && $s5_center_area2_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
		<div id="s5_center_area_inner" class="s5_wrap">
		
		<!-- Above Columns Wrap -->	
			<?php if ($s5_pos_above_columns_1 == "published" || $s5_pos_above_columns_2 == "published" || $s5_pos_above_columns_3 == "published" || $s5_pos_above_columns_4 == "published" || $s5_pos_above_columns_5 == "published" || $s5_pos_above_columns_6 == "published") { ?>
			<section id="s5_above_columns_wrap1"<?php if ($s5_above_columns_wrap1_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_above_columns_wrap1_background_color == "FFFFFF" && $s5_above_columns_wrap1_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>	
			<div id="s5_above_columns_wrap2"<?php if ($s5_above_columns_wrap2_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_above_columns_wrap2_background_color == "FFFFFF" && $s5_above_columns_wrap2_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
			<div id="s5_above_columns_inner">

				<?php if ($s5_pos_above_columns_1 == "published") { ?>
					<div id="s5_above_columns_1" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_1_width ?>%">
						<?php s5_module_call('above_columns_1','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_above_columns_2 == "published") { ?>
					<div id="s5_above_columns_2" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_2_width ?>%">
						<?php s5_module_call('above_columns_2','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_above_columns_3 == "published") { ?>
					<div id="s5_above_columns_3" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_3_width ?>%">
						<?php s5_module_call('above_columns_3','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_above_columns_4 == "published") { ?>
					<div id="s5_above_columns_4" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_4_width ?>%">
						<?php s5_module_call('above_columns_4','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_above_columns_5 == "published") { ?>
					<div id="s5_above_columns_5" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_5_width ?>%">
						<?php s5_module_call('above_columns_5','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_above_columns_6 == "published") { ?>
					<div id="s5_above_columns_6" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_6_width ?>%">
						<?php s5_module_call('above_columns_6','round_box'); ?>
					</div>
				<?php } ?>	
				
				<div style="clear:both; height:0px"></div>

			</div>
			</div>
			</section>
			<?php } ?>
		<!-- End Above Columns Wrap -->			
				
			<!-- Columns wrap, contains left, right and center columns -->	
			<section id="s5_columns_wrap"<?php if ($s5_columns_wrap_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_columns_wrap_background_color == "FFFFFF" && $s5_columns_wrap_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
			<div id="s5_columns_wrap_inner"<?php if ($s5_columns_wrap_inner_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_columns_wrap_inner_background_color == "FFFFFF" && $s5_columns_wrap_inner_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
				
				<section id="s5_center_column_wrap">
				<div id="s5_center_column_wrap_inner" style="margin-left:<?php echo $s5_center_column_margin_left ?>px; margin-right:<?php echo $s5_center_column_margin_right ?>px;">
					
					<?php if ($s5_pos_middle_top_1 == "published" || $s5_pos_middle_top_2 == "published" || $s5_pos_middle_top_3 == "published" || $s5_pos_middle_top_4 == "published" || $s5_pos_middle_top_5 == "published" || $s5_pos_middle_top_6 == "published") { ?>
			
						<section id="s5_middle_top_wrap">
							
							<div id="s5_middle_top">
							<div id="s5_middle_top_inner">
							
								<?php if ($s5_pos_middle_top_1 == "published") { ?>
									<div id="s5_pos_middle_top_1" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_1_width ?>%">
										<?php s5_module_call('middle_top_1','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_2 == "published") { ?>
									<div id="s5_pos_middle_top_2" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_2_width ?>%">
										<?php s5_module_call('middle_top_2','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_3 == "published") { ?>
									<div id="s5_pos_middle_top_3" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_3_width ?>%">
										<?php s5_module_call('middle_top_3','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_4 == "published") { ?>
									<div id="s5_pos_middle_top_4" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_4_width ?>%">
										<?php s5_module_call('middle_top_4','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_5 == "published") { ?>
									<div id="s5_pos_middle_top_5" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_5_width ?>%">
										<?php s5_module_call('middle_top_5','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_6 == "published") { ?>
									<div id="s5_pos_middle_top_6" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_6_width ?>%">
										<?php s5_module_call('middle_top_6','round_box'); ?>
									</div>
								<?php } ?>		
								
								<div style="clear:both; height:0px"></div>

							</div>
							</div>
						
						</section>

					<?php } ?>
					
					<?php if ($s5_show_component == "yes" || $s5_pos_above_body_1 == "published" || $s5_pos_above_body_2 == "published" || $s5_pos_above_body_3 == "published" || $s5_pos_above_body_4 == "published" || $s5_pos_above_body_5 == "published" || $s5_pos_above_body_6 == "published" || $s5_pos_below_body_1 == "published" || $s5_pos_below_body_2 == "published" || $s5_pos_below_body_3 == "published" || $s5_pos_below_body_4 == "published" || $s5_pos_below_body_5 == "published" || $s5_pos_below_body_6 == "published") { ?>
						
						<section id="s5_component_wrap">
						<div id="s5_component_wrap_inner">
						
							<?php if ($s5_pos_above_body_1 == "published" || $s5_pos_above_body_2 == "published" || $s5_pos_above_body_3 == "published" || $s5_pos_above_body_4 == "published" || $s5_pos_above_body_5 == "published" || $s5_pos_above_body_6 == "published") { ?>
						
								<section id="s5_above_body_wrap">
									
									<div id="s5_above_body">
									<div id="s5_above_body_inner">
									
										<?php if ($s5_pos_above_body_1 == "published") { ?>
											<div id="s5_pos_above_body_1" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_1_width ?>%">
												<?php s5_module_call('above_body_1','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_2 == "published") { ?>
											<div id="s5_pos_above_body_2" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_2_width ?>%">
												<?php s5_module_call('above_body_2','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_3 == "published") { ?>
											<div id="s5_pos_above_body_3" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_3_width ?>%">
												<?php s5_module_call('above_body_3','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_4 == "published") { ?>
											<div id="s5_pos_above_body_4" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_4_width ?>%">
												<?php s5_module_call('above_body_4','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_5 == "published") { ?>
											<div id="s5_pos_above_body_5" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_5_width ?>%">
												<?php s5_module_call('above_body_5','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_6 == "published") { ?>
											<div id="s5_pos_above_body_6" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_6_width ?>%">
												<?php s5_module_call('above_body_6','round_box'); ?>
											</div>
										<?php } ?>			
										
										<div style="clear:both; height:0px"></div>

									</div>
									</div>
								
								</section>

							<?php } ?>
									
							<?php if ($s5_show_component == "yes") { ?>
							<main>
								<?php s5_component_call(); ?>
								<div style="clear:both;height:0px"></div>
							</main>
							<?php } ?>
							
							<?php if ($s5_pos_below_body_1 == "published" || $s5_pos_below_body_2 == "published" || $s5_pos_below_body_3 == "published" || $s5_pos_below_body_4 == "published" || $s5_pos_below_body_5 == "published" || $s5_pos_below_body_6 == "published") { ?>
						
								<section id="s5_below_body_wrap">			
								
									<div id="s5_below_body">
									<div id="s5_below_body_inner">
									
										<?php if ($s5_pos_below_body_1 == "published") { ?>
											<div id="s5_pos_below_body_1" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_1_width ?>%">
												<?php s5_module_call('below_body_1','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_2 == "published") { ?>
											<div id="s5_pos_below_body_2" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_2_width ?>%">
												<?php s5_module_call('below_body_2','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_3 == "published") { ?>
											<div id="s5_pos_below_body_3" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_3_width ?>%">
												<?php s5_module_call('below_body_3','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_4 == "published") { ?>
											<div id="s5_pos_below_body_4" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_4_width ?>%">
												<?php s5_module_call('below_body_4','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_5 == "published") { ?>
											<div id="s5_pos_below_body_5" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_5_width ?>%">
												<?php s5_module_call('below_body_5','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_6 == "published") { ?>
											<div id="s5_pos_below_body_6" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_6_width ?>%">
												<?php s5_module_call('below_body_6','round_box'); ?>
											</div>
										<?php } ?>		
										
										<div style="clear:both; height:0px"></div>

									</div>
									</div>
								</section>

							<?php } ?>
							
						</div>
						</section>
						
					<?php } ?>
					
					<?php if ($s5_pos_middle_bottom_1 == "published" || $s5_pos_middle_bottom_2 == "published" || $s5_pos_middle_bottom_3 == "published" || $s5_pos_middle_bottom_4 == "published" || $s5_pos_middle_bottom_5 == "published" || $s5_pos_middle_bottom_6 == "published") { ?>
					
						<section id="s5_middle_bottom_wrap">
							
							<div id="s5_middle_bottom">
							<div id="s5_middle_bottom_inner">
							
								<?php if ($s5_pos_middle_bottom_1 == "published") { ?>
									<div id="s5_pos_middle_bottom_1" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_1_width ?>%">
										<?php s5_module_call('middle_bottom_1','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_2 == "published") { ?>
									<div id="s5_pos_middle_bottom_2" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_2_width ?>%">
										<?php s5_module_call('middle_bottom_2','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_3 == "published") { ?>
									<div id="s5_pos_middle_bottom_3" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_3_width ?>%">
										<?php s5_module_call('middle_bottom_3','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_4 == "published") { ?>
									<div id="s5_pos_middle_bottom_4" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_4_width ?>%">
										<?php s5_module_call('middle_bottom_4','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_5 == "published") { ?>
									<div id="s5_pos_middle_bottom_5" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_5_width ?>%">
										<?php s5_module_call('middle_bottom_5','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_6 == "published") { ?>
									<div id="s5_pos_middle_bottom_6" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_6_width ?>%">
										<?php s5_module_call('middle_bottom_6','round_box'); ?>
									</div>
								<?php } ?>	
								
								<div style="clear:both; height:0px"></div>

							</div>
							</div>
						
						</section>

					<?php } ?>
					
				</div>
				</section>
				<!-- Left column -->	
				<?php if($s5_pos_left == "published" || $s5_pos_left_inset == "published" || $s5_pos_left_top == "published" || $s5_pos_left_bottom == "published") { ?>
					<aside id="s5_left_column_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_left_column_width ?>px"<?php } ?>>
					<div id="s5_left_column_wrap_inner">
						<?php if($s5_pos_left_top == "published") { ?>
							<div id="s5_left_top_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_left_column_width ?>px"<?php } ?>>
								<?php s5_module_call('left_top','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_left == "published") { ?>
							<div id="s5_left_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_left_width ?>px"<?php } ?>>
								<?php s5_module_call('left','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_left_inset == "published") { ?>
							<div id="s5_left_inset_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_left_inset_width ?>px"<?php } ?>>
								<?php s5_module_call('left_inset','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_left_bottom == "published") { ?>
							<div id="s5_left_bottom_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_left_column_width ?>px"<?php } ?>>
								<?php s5_module_call('left_bottom','round_box'); ?>
							</div>
						<?php } ?>
						<div style="clear:both;height:0px;"></div>
					</div>
					</aside>
				<?php } ?>
				<!-- End Left column -->	
				<!-- Right column -->	
				<?php if($s5_pos_right == "published" || $s5_pos_right_inset == "published" || $s5_pos_right_top == "published" || $s5_pos_right_bottom == "published") { ?>
					<aside id="s5_right_column_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_right_column_width ?>px; margin-left:-<?php echo $s5_right_column_width + $s5_left_column_width ?>px"<?php } ?>>
					<div id="s5_right_column_wrap_inner">
						<?php if($s5_pos_right_top == "published") { ?>
							<div id="s5_right_top_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_right_column_width ?>px"<?php } ?>>
								<?php s5_module_call('right_top','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_right_inset == "published") { ?>
							<div id="s5_right_inset_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_right_inset_width ?>px"<?php } ?>>
								<?php s5_module_call('right_inset','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_right == "published") { ?>
							<div id="s5_right_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_right_width ?>px"<?php } ?>>
								<?php s5_module_call('right','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_right_bottom == "published") { ?>
							<div id="s5_right_bottom_wrap" class="s5_float_left"<?php if ($s5_columns_fixed_fluid == "px") { ?> style="width:<?php echo $s5_right_column_width ?>px"<?php } ?>>
								<?php s5_module_call('right_bottom','round_box'); ?>
							</div>
						<?php } ?>
						<div style="clear:both;height:0px;"></div>
					</div>
					</aside>
				<?php } ?>
				<!-- End Right column -->	
				<div style="clear:both;height:0px;"></div>
			</div>
			</section>
			<!-- End columns wrap -->	
			
 
			<?php if ($s5_pos_below_columns_1 == "published" || $s5_pos_below_columns_2 == "published" || $s5_pos_below_columns_3 == "published" || $s5_pos_below_columns_4 == "published" || $s5_pos_below_columns_5 == "published" || $s5_pos_below_columns_6 == "published") { ?>
			<section id="s5_below_columns_wrap1"<?php if ($s5_below_columns_wrap1_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_below_columns_wrap1_background_color == "FFFFFF" && $s5_below_columns_wrap1_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>	
			<div id="s5_below_columns_wrap2"<?php if ($s5_below_columns_wrap2_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_below_columns_wrap2_background_color == "FFFFFF" && $s5_below_columns_wrap2_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
			<div id="s5_below_columns_inner">

						<?php if ($s5_pos_below_columns_1 == "published") { ?>
							<div id="s5_below_columns_1" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_1_width ?>%">
								<?php s5_module_call('below_columns_1','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_2 == "published") { ?>
							<div id="s5_below_columns_2" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_2_width ?>%">
								<?php s5_module_call('below_columns_2','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_3 == "published") { ?>
							<div id="s5_below_columns_3" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_3_width ?>%">
								<?php s5_module_call('below_columns_3','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_4 == "published") { ?>
							<div id="s5_below_columns_4" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_4_width ?>%">
								<?php s5_module_call('below_columns_4','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_5 == "published") { ?>
							<div id="s5_below_columns_5" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_5_width ?>%">
								<?php s5_module_call('below_columns_5','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_6 == "published") { ?>
							<div id="s5_below_columns_6" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_6_width ?>%">
								<?php s5_module_call('below_columns_6','round_box'); ?>
							</div>
						<?php } ?>		
						
						<div style="clear:both; height:0px"></div>

			</div>
			</div>
			</section>
			<?php } ?>
		<!-- End Below Columns Wrap -->				
			
			
		</div>
		</div>
		</section>
		<?php } ?>
	<!-- End Center area -->	
	
	
	<?php if ($s5_pos_custom_6 == "published") { ?>
		<div id="s5_pos_custom_6">
			<?php s5_module_call('custom_6','notitle'); ?>
			<div style="clear:both; height:0px"></div>
		</div>
	<?php } ?>
	
	
	<!-- Bottom Row1 -->	
		<?php if ($s5_pos_bottom_row1_1 == "published" || $s5_pos_bottom_row1_2 == "published" || $s5_pos_bottom_row1_3 == "published" || $s5_pos_bottom_row1_4 == "published" || $s5_pos_bottom_row1_5 == "published" || $s5_pos_bottom_row1_6 == "published") { ?>
			<section id="s5_bottom_row1_area1"<?php if ($s5_bottom_row1_area1_background == "no") { ?> class="s5_slidesection s5_no_custom_bg"<?php } else { ?> class="s5_slidesection s5_yes_custom_bg<?php if ($s5_bottom_row1_area1_background_color == "FFFFFF" && $s5_bottom_row1_area1_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
			<div id="s5_bottom_row1_area2"<?php if ($s5_bottom_row1_area2_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_bottom_row1_area2_background_color == "FFFFFF" && $s5_bottom_row1_area2_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
			<div id="s5_bottom_row1_area_inner" class="s5_wrap">

				<div id="s5_bottom_row1_wrap">
				<div id="s5_bottom_row1">
				<div id="s5_bottom_row1_inner">
				
					<?php if ($s5_pos_bottom_row1_1 == "published") { ?>
						<div id="s5_pos_bottom_row1_1" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_1_width ?>%">
							<?php s5_module_call('bottom_row1_1','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row1_2 == "published") { ?>
						<div id="s5_pos_bottom_row1_2" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_2_width ?>%">
							<?php s5_module_call('bottom_row1_2','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row1_3 == "published") { ?>
						<div id="s5_pos_bottom_row1_3" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_3_width ?>%">
							<?php s5_module_call('bottom_row1_3','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row1_4 == "published") { ?>
						<div id="s5_pos_bottom_row1_4" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_4_width ?>%">
							<?php s5_module_call('bottom_row1_4','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row1_5 == "published") { ?>
						<div id="s5_pos_bottom_row1_5" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_5_width ?>%">
							<?php s5_module_call('bottom_row1_5','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row1_6 == "published") { ?>
						<div id="s5_pos_bottom_row1_6" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_6_width ?>%">
							<?php s5_module_call('bottom_row1_6','round_box'); ?>
						</div>
					<?php } ?>
					
					<div style="clear:both; height:0px"></div>

				</div>
				</div>
				</div>

		</div>
		</div>
		</section>
		<?php } ?>
	<!-- End Bottom Row1 -->	
	
	
	<?php if ($s5_pos_custom_7 == "published") { ?>
		<div id="s5_pos_custom_7">
			<div class="s5_wrap">
				<?php s5_module_call('custom_7','notitle'); ?>
				<div style="clear:both; height:0px"></div>
			</div>
		</div>
	<?php } ?>
	
	
	<?php if ($s5_pos_custom_8 == "published") { ?>
		<div id="s5_pos_custom_8">
			<?php s5_module_call('custom_8','notitle'); ?>
			<div style="clear:both; height:0px"></div>
		</div>
	<?php } ?>
		
		
	<!-- Bottom Row2 -->	
		<?php if ($s5_pos_bottom_row2_1 == "published" || $s5_pos_bottom_row2_2 == "published" || $s5_pos_bottom_row2_3 == "published" || $s5_pos_bottom_row2_4 == "published" || $s5_pos_bottom_row2_5 == "published" || $s5_pos_bottom_row2_6 == "published") { ?>
		<section id="s5_bottom_row2_area1"<?php if ($s5_bottom_row2_area1_background == "no") { ?> class="s5_slidesection s5_no_custom_bg"<?php } else { ?> class="s5_slidesection s5_yes_custom_bg<?php if ($s5_bottom_row2_area1_background_color == "FFFFFF" && $s5_bottom_row2_area1_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
		<div id="s5_bottom_row2_area2"<?php if ($s5_bottom_row2_area2_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_bottom_row2_area2_background_color == "FFFFFF" && $s5_bottom_row2_area2_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
		<div id="s5_bottom_row2_area_inner" class="s5_wrap">			
		
			<div id="s5_bottom_row2_wrap">
			<div id="s5_bottom_row2">
			<div id="s5_bottom_row2_inner">					
				<?php if ($s5_pos_bottom_row2_1 == "published") { ?>
					<div id="s5_pos_bottom_row2_1" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_1_width ?>%">
						<?php s5_module_call('bottom_row2_1','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row2_2 == "published") { ?>
					<div id="s5_pos_bottom_row2_2" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_2_width ?>%">
						<?php s5_module_call('bottom_row2_2','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row2_3 == "published") { ?>
					<div id="s5_pos_bottom_row2_3" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_3_width ?>%">
						<?php s5_module_call('bottom_row2_3','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row2_4 == "published") { ?>
					<div id="s5_pos_bottom_row2_4" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_4_width ?>%">
						<?php s5_module_call('bottom_row2_4','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row2_5 == "published") { ?>
					<div id="s5_pos_bottom_row2_5" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_5_width ?>%">
						<?php s5_module_call('bottom_row2_5','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row2_6 == "published") { ?>
					<div id="s5_pos_bottom_row2_6" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_6_width ?>%">
						<?php s5_module_call('bottom_row2_6','round_box'); ?>
					</div>
				<?php } ?>		
				
				<div style="clear:both; height:0px"></div>
				
			</div>
			</div>	
			</div>	
				
		</div>
		</div>
		</section>
		<?php } ?>
	<!-- End Bottom Row2 -->
	
		<?php if ($s5_pos_custom_5 == "published") { ?>
		<div id="s5_pos_custom_5">
			<div class="s5_wrap 1">
				<?php s5_module_call('custom_5','notitle'); ?>
				<div style="clear:both; height:0px"></div>
			</div>
		</div>
	<?php } ?>
	
	<?php if ($s5_pos_custom_9 == "published") { ?>
		<div id="s5_pos_custom_9">
			<?php s5_module_call('custom_9','notitle'); ?>
			<div style="clear:both; height:0px"></div>
		</div>
	<?php } ?>
	
	
	<div id="s5_bottom_wrap"<?php if ($s5_pos_bottom_row3_1 == "unpublished" && $s5_pos_bottom_row3_2 == "unpublished" && $s5_pos_bottom_row3_3 == "unpublished" && $s5_pos_bottom_row3_4 == "unpublished" && $s5_pos_bottom_row3_5 == "unpublished" && $s5_pos_bottom_row3_6 == "unpublished") { ?> class="s5_bottom_no_row"<?php } ?>>
	
	<!-- Bottom Row3 -->	
		<?php if ($s5_pos_bottom_row3_1 == "published" || $s5_pos_bottom_row3_2 == "published" || $s5_pos_bottom_row3_3 == "published" || $s5_pos_bottom_row3_4 == "published" || $s5_pos_bottom_row3_5 == "published" || $s5_pos_bottom_row3_6 == "published") { ?>
		<section id="s5_bottom_row3_area1"<?php if ($s5_bottom_row3_area1_background == "no") { ?> class="s5_slidesection s5_no_custom_bg"<?php } else { ?> class="s5_slidesection s5_yes_custom_bg<?php if ($s5_bottom_row3_area1_background_color == "FFFFFF" && $s5_bottom_row3_area1_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>	
		<div id="s5_bottom_row3_area2"<?php if ($s5_bottom_row3_area2_background == "no") { ?> class="s5_no_custom_bg"<?php } else { ?> class="s5_yes_custom_bg<?php if ($s5_bottom_row3_area2_background_color == "FFFFFF" && $s5_bottom_row3_area2_background_image == "") { ?> s5_yes_custom_bg_white<?php } ?>"<?php } ?>>
		<div id="s5_bottom_row3_area_inner" class="s5_wrap">
		
			<div id="s5_bottom_row3_wrap"<?php if ($s5_pos_custom_9 == "published") { ?> class="s5_bottom_negative_margin"<?php } ?>>
			<div id="s5_bottom_row3">
			<div id="s5_bottom_row3_inner">
			
				<?php if ($s5_pos_bottom_row3_1 == "published") { ?>
					<div id="s5_pos_bottom_row3_1" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_1_width ?>%">
						<?php s5_module_call('bottom_row3_1','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row3_2 == "published") { ?>
					<div id="s5_pos_bottom_row3_2" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_2_width ?>%">
						<?php s5_module_call('bottom_row3_2','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row3_3 == "published") { ?>
					<div id="s5_pos_bottom_row3_3" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_3_width ?>%">
						<?php s5_module_call('bottom_row3_3','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row3_4 == "published") { ?>
					<div id="s5_pos_bottom_row3_4" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_4_width ?>%">
						<?php s5_module_call('bottom_row3_4','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row3_5 == "published") { ?>
					<div id="s5_pos_bottom_row3_5" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_5_width ?>%">
						<?php s5_module_call('bottom_row3_5','round_box'); ?>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_bottom_row3_6 == "published") { ?>
					<div id="s5_pos_bottom_row3_6" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_6_width ?>%">
						<?php s5_module_call('bottom_row3_6','round_box'); ?>
					</div>
				<?php } ?>	
				
				<div style="clear:both; height:0px"></div>

			</div>
			</div>
			</div>

		</div>
		</div>
		</section>
		<?php } ?>
	<!-- End Bottom Row3 -->
	
	
	<!-- Footer Area -->
		<footer id="s5_footer_area1" class="s5_slidesection">
		<div id="s5_footer_area2">
		<div id="s5_footer_area_inner" class="s5_wrap">
		
			<?php if($s5_pos_footer == "published") { ?>
				<div id="s5_footer_module">
					<?php s5_module_call('footer','notitle'); ?>
				</div>	
			<?php } else { ?>
				<div id="s5_footer">
					<?php require_once("vertex/footer.php"); ?>
				</div>
			<?php } ?>
			
			<?php if($s5_pos_language == "published") { ?>
				<div id="s5_language_wrap">
					<?php require_once("vertex/language_position.php"); ?>
				</div>
			<?php } ?>

			<?php if($s5_pos_bottom_menu == "published") { ?>
				<div id="s5_bottom_menu_wrap">
					<?php s5_module_call('bottom_menu','notitle'); ?>
				</div>	
			<?php } ?>
			<div style="clear:both; height:0px"></div>
			
		</div>
		</div>
		</footer>
	<!-- End Footer Area -->
	
	<?php s5_module_call('debug','round_box'); ?>
	
	
	<div style="clear:both; height:0px"></div>
	</div>
	
	
	<!-- Bottom Vertex Calls -->
	<?php require_once("vertex/includes/vertex_includes_bottom.php"); ?>
	
</div>
<!-- End Body Padding -->
	
	
<?php if ($s5_pos_search == "published") { ?>
<script>
function s5_search_open() {
	document.getElementById('s5_search_overlay').className = "s5_search_open";
	if (document.getElementById("s5_drop_down_container")) { 
		document.getElementById("s5_drop_down_container").style.display = "none"; 
	}
}
function s5_search_close() {
	document.getElementById('s5_search_overlay').className = "s5_search_close";
	if (document.getElementById("s5_drop_down_container")) { 
		document.getElementById("s5_drop_down_container").style.display = "block"; 
	}
}
</script>
<?php } ?>

<script>
function s5_check_team_height() {
	var s5_check_team_height_holder = 1;
	var s5_check_team_height1 = document.getElementById("s5_body").querySelectorAll('DIV');
	for (var s5_check_team_height1_y=0; s5_check_team_height1_y<s5_check_team_height1.length; s5_check_team_height1_y++) {
		if (s5_check_team_height1[s5_check_team_height1_y].className.indexOf("eam_details") >= 0) {
			s5_check_team_height1[s5_check_team_height1_y].style.minHeight = "1px";
			if (s5_check_team_height1[s5_check_team_height1_y].offsetHeight > s5_check_team_height_holder) {
				s5_check_team_height_holder = s5_check_team_height1[s5_check_team_height1_y].offsetHeight;
			}
		}
	}
	if (document.body.offsetWidth >= 550) {
	var s5_check_team_height2 = document.getElementById("s5_body").querySelectorAll('DIV');
	for (var s5_check_team_height2_y=0; s5_check_team_height2_y<s5_check_team_height2.length; s5_check_team_height2_y++) {
		if (s5_check_team_height2[s5_check_team_height2_y].className.indexOf("eam_details") >= 0) {
			s5_check_team_height2[s5_check_team_height2_y].style.minHeight = s5_check_team_height_holder + "px";
		}
	}
}
}
jQuery(document).ready( function() { s5_check_team_height(); });
jQuery(window).resize(s5_check_team_height);
</script>

</body>
</html>