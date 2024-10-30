<?php 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/*
Plugin Name: Case Study Ninja
Plugin URI:  http://casestudyninja.com/xxxx
Description: The Case Study Ninja plugin enables you to display your Case Study Ninja case studies on your Wordpress site.
Version:     1.0
Author:      Lara Brook
Author URI:  http://larabrook.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Case Study Ninja is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Case Study Ninja is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Case Study Ninja. If not, see https://www.gnu.org/licenses/gpl-2.0.html
*/

//Add an admin submenu link under Settings


function add_case_study_ninja_menu() {
    add_management_page(
            'Case Study Ninja Options',
            'Case Study Ninja',
            'manage_options',
            'case-study-ninja-menu',
            'case_study_ninja_options_page'
        );
}

add_action('admin_menu', 'add_case_study_ninja_menu');

/**
 * Register the settings
 */
function csn_cs_register_settings() {
	register_setting(
          'csn_cs_options',  // settings section
          'csn-cs-directoryListing' // setting name
     );
	 register_setting(
          'csn_cs_options',  // settings section
          'csn-cs-support' // setting name
     );
     register_setting(
          'csn_cs_options',  // settings section
          'csn-cs-total' // setting name
     );
	 register_setting(
          'csn_cs_options',  // settings section
          'csn-cs-row' // setting name
     );
	 register_setting(
          'csn_cs_options',  // settings section
          'csn-cs-css' // setting name
     );
}

register_activation_hook( __FILE__, 'csn_cs_set_up_options' );

function csn_cs_set_up_options(){
  add_option('csn-cs-css', '#caseStudyNinja {
	font-family: "Roboto";
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: normal;
	margin-top: 10px;
}
#caseStudyNinja.caseStudyOut {
	border: 1px solid #ccc;
	padding: 0 15px;
}
#caseStudyNinja a:link, #caseStudyNinja a:visited {
	text-decoration: none;
	color: #393B3F;
}

#caseStudyNinja a:hover, .nolinks a:active {
	text-decoration: underline;
	color: #79C7FF; 
}

#caseStudyNinja h2   { width: 100%;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
}
#caseStudyNinja h2.caseStudyHeading   {     
	margin-top: 10px;
    margin-bottom: 0;
    font-size: 16px;
	font-weight: 700;
}
#caseStudyNinja .caseStudyh2 { width: 100%;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
	    margin-top: 0; } 
#caseStudyNinja p    { position: absolute; bottom: 0; font-size: 14px; color: #3c609e; margin-bottom: 2px;}
#caseStudyNinja .caseStudyp {
	position: absolute;
    font-size: 12px;
    color: #3c609e;
    left: 45%;
    margin-bottom: 4px;
}
#caseStudyNinja .caseStudy { float: left; }
#caseStudyNinja .caseStudyDL {  float: left; border-width: 0.5px;
    border-color: rgb(220, 223, 228);
    position: relative;
    box-shadow: 0px 3px 9px 0px rgba(77, 77, 77, 0.5);
	    padding: 0 0 0 0;
    margin: 20px 0 0 0;
    width: 100%;}
#caseStudyNinja .caseStudy img { height: auto; width:100%; }
#caseStudyNinja .caseStudyDL img { height: auto; width:100%; }
#caseStudyNinja .caseStudyInner {     border-width: 0.5px;
    border-color: rgb(220, 223, 228);
    position: relative;
    box-shadow: 0px 3px 9px 0px rgba(77, 77, 77, 0.5);
    padding: 0 0 20px 0;
    margin: 20px;
	width: 93%;
	 }
#caseStudyNinja .caseStudyInnerDL {     
    padding: 0 0 20px 0;
	width: 93%;
	 }	 
#caseStudyNinja .caseStudyMeta { padding: 20px; height: 100; }
#caseStudyNinja .caseStudyMetaDL { padding: 7px; float: left; width: 55%; }
#caseStudyNinja .row {width: 100%; clear: both; }
#caseStudyNinja .caseStudyImg { height: auto; background-color: white;}
#caseStudyNinja .caseStudyImgDL { height: auto; background-color: white; float: left; width: 45%;}
#caseStudyNinja #caseStudyNinjaFooter img { width:25px; height:25px; float:left; margin-right: 10px; }
#caseStudyNinja #caseStudyNinjaFooterDL img { width:25px; height:25px; float:left; margin-right: 10px; }
#caseStudyNinja #caseStudyNinjaFooterDL .caseStudyDLImg { margin-top: 10px;}
#caseStudyNinja #caseStudyNinjaFooter { margin-bottom: 50px; clear: both; }
#caseStudyNinja #caseStudyNinjaFooterDL { margin-bottom: 10px; clear: both; }
#caseStudyNinja #caseStudyNinjaFooter p { padding-top: 10px; color: #7C7F83; position: relative;}
#caseStudyNinja #caseStudyNinjaFooterDL p { padding-top: 10px; color: #7C7F83; position: relative;}
#caseStudyNinja .tilevis {
    width: 19px;
    height: 19px;
    position: absolute;
    right: 12px;
    bottom: 12px;
}
#caseStudyNinja .tilevisDL {
    width: 19px;
    height: 19px;
    position: absolute;
    right: 12px;
    bottom: 6px;
}

@media (max-width: 700px) {
	#caseStudyNinja .caseStudy {
		float: none;
		width: 100% !important;
	}
	#caseStudyNinja .caseStudyInner {
		height:inherit !important;
	}
		
}');
add_option('csn-cs-row', '3');
add_option('csn-cs-total', '10');
add_option('csn-cs-directoryListing', 'yes');
add_option('csn-cs-support', 'no');
}


add_action( 'admin_init', 'csn_cs_register_settings' );



// add scripts

function csn_cs_scripts_with_jquery()
{
    // Register the script like this for a plugin:
    wp_register_script( 'csn-cs-script', plugins_url( '/js/caseStudyNinja.js', __FILE__ ), array( 'jquery' ) );
  
 
    // enqueue the script:
    wp_enqueue_script( 'csn-cs-script' );
}
add_action( 'wp_enqueue_scripts', 'csn_cs_scripts_with_jquery' );

// add css

add_action('wp_head','hook_csn_cs_styles');

function hook_csn_cs_styles() {
	
	global $wp_query;
	$content = $wp_query->post->post_content;
//if ( has_shortcode( $content, 'case-study-ninja' ) ) {
	$output="<style>".get_option( 'csn-cs-css' )."</style>";

	echo $output;

//}
//else {
	
//}

}

function csn_cs_styles()
{
    // Register the style like this for a plugin:
    wp_register_style( 'csn-cs-style', ( 'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900'), array(), '20120209', 'all' );
  
 
    //  enqueue the style:
    wp_enqueue_style( 'csn-cs-style' );
}
add_action( 'wp_enqueue_scripts', 'csn_cs_styles' );
//register shortcode 
function case_study_ninja_shortcode($atts) {
	
	$output = '';
 
    $case_study_ninja_atts = shortcode_atts( array(
        'team' => 'My Quote',
        'attribution' => 'none',
    ), $atts );
	
	$team_id = wpautop( wp_kses_post( $case_study_ninja_atts[ 'team' ] ) );
	$number = $csn_cs_total_val = get_option( 'csn-cs-total' ); 
	$row_items = get_option( 'csn-cs-row' );
	$directoryListing = get_option( 'csn-cs-directoryListing' );
	$support = get_option( 'csn-cs-support' );
	
	if ($directoryListing == 'yes') {
	
		
	$requestUrl = "https://www.casestudyninja.com/beta/api?k=csnwordpress&a=listpublicteamcasestudies&id=".$team_id;


// get the case studies


$requestUrl = str_replace(' ', '', $requestUrl);
$requestUrl = str_replace('<p>', '', $requestUrl);
$requestUrl = str_replace('</p>', '', $requestUrl);

$outputIs = wp_remote_get($requestUrl);

// decode the json
$json = json_decode($outputIs['body'], true);


$totalAvailable = $json['totalAvailable'];


//check if data is returned
if ($totalAvailable <= 0 || $totalAvailable =='') {
	echo "Sorry we can't find any case studies for the team you have selected.";
}
else {
	// if case studies found for team id then
	
	// check if number the user has requested to display is less than the number of case studies available in total, if it isn't then reset the number of case studies to be displayed to the total available.
	 
	if ($number >= $totalAvailable) {
		$number = $totalAvailable;
	}
	
	
	
// loop through each record & display data	
	
	for( $i = 0; $i < $number; ){
		// get all available data and add to individual variables
		
		 $studyId = $json['studies'][$i]['id'];
		 $studyTitle = $json['studies'][$i]['title'];
		 $studyPhotoUrl = $json['studies'][$i]['photoUrl'];
		 $studyTeamName = $json['studies'][$i]['teamName'];
		 $studyVisibilityIconUrl = $json['studies'][$i]['visibilityIconUrl'];
         
         if ($i == 0) {
			 
			 // for first record we always need to open a row 
         $output .= '<div id="caseStudyNinja" class="caseStudyOut">
		 <h2 class="caseStudyHeading">Case Studies</h2>';
			
		 }
		 
	// output individual case study content

		 
	
         $output .= '<div class="caseStudyDL nolinks">
         <div class="caseStudyInnerDL">
         <div class="caseStudyImgDL">
         <a href="https://www.casestudyninja.com/beta/casestudy?id='.$studyId.'" target="_blank">
<img src="https://www.casestudyninja.com'.$studyPhotoUrl.'" alt="'.$studyTitle.'"></a></div>
<div class="caseStudyMetaDL">
 <a href="https://www.casestudyninja.com/beta/casestudy?id='.$studyId.'" target="_blank">
 <h2 class="caseStudyh2">'.$studyTitle.'</h2></a>
 <p class="caseStudyp">'.$studyTeamName.'</p>
 <div class="tilevisDL"><img src="https://www.casestudyninja.com'.$studyVisibilityIconUrl.'" data-pin-nopin="true"></div>
 </a>
 </div>
		</div>
        </div>';
        
   
   


	$i++  ;
}
	
	if ($support == 'yes') {
    $output .='<div id="caseStudyNinjaFooterDL"><img class="caseStudyDLImg" src="'.plugin_dir_url( __FILE__ ) . '/img/Ninja-Icon-greyblue.png" width="1008" height="1008" alt="Case Study Ninja logo."/>
<p>Powered by <a href="http://www.casestudyninja.com" target="_blank">CaseStudyNinja.com</a></p></div>';
	}
	else {
		$output .='<div id="caseStudyNinjaFooterDL"></div>';
	}
	
	$output .='</div>';
}

return $output;	
		
		
	}
	else {
	if ($row_items == 0) {
	$studyWidth = 100;
	}
	else {
	$studyWidth = 100 / $row_items;
	}

	
	
 
   
	
	
	
	$requestUrl = "https://www.casestudyninja.com/beta/api?k=csnwordpress&a=listpublicteamcasestudies&id=".$team_id;


// get the case studies


$requestUrl = str_replace(' ', '', $requestUrl);
$requestUrl = str_replace('<p>', '', $requestUrl);
$requestUrl = str_replace('</p>', '', $requestUrl);
$outputIs = wp_remote_get($requestUrl);
// decode the json
$json = json_decode($outputIs['body'], true);


$totalAvailable = $json['totalAvailable'];


//check if data is returned
if ($totalAvailable <= 0 || $totalAvailable =='') {
	echo "Sorry we can't find any case studies for the team you have selected.";
}
else {
	// if case studies found for team id then
	
	// check if number the user has requested to display is less than the number of case studies available in total, if it isn't then reset the number of case studies to be displayed to the total available.
	 
	if ($number >= $totalAvailable) {
		$number = $totalAvailable;
	}
	
	// now we have the number of records to display, we need to determine the number of case studies to display per row, we need to check the number per row is less than the total number available, if it isn't then we need to reset the number of case studies per row to the total number of case studies available.
	if ($row_items >= $totalAvailable) {
		$row_items = $totalAvailable;
	}
	
// loop through each record & display data	
	
	for( $i = 0; $i < $number; ){
		// get all available data and add to individual variables
		
		 $studyId = $json['studies'][$i]['id'];
		 $studyTitle = $json['studies'][$i]['title'];
		 $studyPhotoUrl = $json['studies'][$i]['photoUrl'];
		 $studyTeamName = $json['studies'][$i]['teamName'];
		 $studyVisibilityIconUrl = $json['studies'][$i]['visibilityIconUrl'];
         
         if ($i == 0) {
			 
			 // for first record we always need to open a row 
         $output .= '<div id="caseStudyNinja">
		 <h2 class="caseStudyHeading">Case Studies</h2>
         <div class="row">';
			
		 }
		 
	// output individual case study content

		 
	
         $output .= '<div class="caseStudy nolinks" style="width:'.$studyWidth.'%;">
         <div class="caseStudyInner">
         <div class="caseStudyImg">
         <a href="https://www.casestudyninja.com/beta/casestudy?id='.$studyId.'" target="_blank">
<img src="https://www.casestudyninja.com'.$studyPhotoUrl.'" alt="'.$studyTitle.'"></a></div>
<div class="caseStudyMeta">
 <a href="https://www.casestudyninja.com/beta/casestudy?id='.$studyId.'" target="_blank">
 <h2>'.$studyTitle.'</h2></a>
 <div class="tilevis"><img src="https://www.casestudyninja.com'.$studyVisibilityIconUrl.'" data-pin-nopin="true"></div>
 <p>'.$studyTeamName.'</p>
 </a>
 </div>
		</div>
        </div>';
        
   
   
		  // check and see if the current record should end a row
		  // we do this by using the simplify function to check if the current row is divisible by the number of items the user wants to display per row
 $divisible = Simplify ($i+1, $row_items );
  
 
if ($divisible == 'yes') {
$output .= '</div>';	
if ($i+1 == $number) {
	// this checks to see if it is the final record being displayed, if it is, then we don't want to open a new row and we want to close the container div - removed to close after the footer
	echo '';	
}
else { 

// if this isn't the final record we do want to open a new row
$output .= '<div class="row">';
}
}
else 
// here we need to do an extra check for where the final row of data is not a complete row, if this is the final case study to displayed then we'll close the divs
{ 
 if ($i+1 == $number) {
	 $output .='</div>';
 }
}
	$i++  ;
}
	
	if ($support == 'yes') {
    $output .='<div id="caseStudyNinjaFooter"><img src="'.plugin_dir_url( __FILE__ ) . '/img/Ninja-Icon-greyblue.png" width="1008" height="1008" alt="Case Study Ninja logo."/>
<p>Powered by <a href="http://www.casestudyninja.com" target="_blank">CaseStudyNinja.com</a></p></div>';
	}
	else {
		$output .='<div id="caseStudyNinjaFooter"></div>';
	}
	
	$output .='</div>';
}

return $output;
	}

   
}
 
function case_study_ninja_register_shortcode() {
    add_shortcode( 'case-study-ninja', 'case_study_ninja_shortcode' );
}
 
add_action( 'init', 'case_study_ninja_register_shortcode' );


function case_study_ninja_options_page() {
	
	if ( ! isset( $_REQUEST['settings-updated'] ) )
          $_REQUEST['settings-updated'] = false; ?>
 
     <div class="wrap">
 
          <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
               <div class="updated fade"><p><strong><?php _e( 'Case Study Ninja Options saved!', 'wporg' ); ?></strong></p></div>
          <?php endif; ?>
        <h1>Case Study Ninja</h1>   
          <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
           <p>You can use this page to customise how your Case Study Ninja case studies are displayed on your site.</p>
           <p>To add Case Study Ninja case studies to your site use the shortcode [case-study-ninja team="<strong>Your team id here</strong>"]</p>
          <div id="poststuff">
               <div id="post-body">
                    <div id="post-body-content">
                         <form method="post" action="options.php">
                              <?php settings_fields( 'csn_cs_options' ); ?>
                              <?php 
							  $csn_cs_directoryListing_val = get_option( 'csn-cs-directoryListing' ); 
							  $csn_cs_support_val = get_option( 'csn-cs-support' ); 
							  $csn_cs_total_val = get_option( 'csn-cs-total' ); 
							  $csn_cs_row_val = get_option( 'csn-cs-row' );
							  $csn_cs_css_val = get_option( 'csn-cs-css' ); ?>
                              <table class="form-table">
                              <tr valign="top"><th scope="row"><?php _e( 'Display as directory listing?', 'csn-cs' ); ?></th>
                                        <td>
                                        
                                         <label>
    <input name="csn-cs-directoryListing" type="radio" id="csn-cs-directoryListing1" value="yes" <?php if ($csn_cs_directoryListing_val =='yes') {
		echo 'checked="checked"';
	}; ?>>
    Yes</label>
  <br>
  <label>
    <input type="radio" name="csn-cs-directoryListing" value="no" id="csn-cs-directoryListing2" <?php if ($csn_cs_directoryListing_val =='no') {
		echo 'checked="checked"';
	}; ?>>
    No</label>
                      
                                     </td>
                                   </tr>
								   <tr valign="top"><th scope="row"><?php _e( 'Help support us by displaying Powered by Case Study Ninja', 'csn-cs' ); ?></th>
                                        <td>
                                        
                                         <label>
    <input name="csn-cs-support" type="radio" id="csn-cs-support1" value="yes" <?php if ($csn_cs_support_val =='yes') {
		echo 'checked="checked"';
	}; ?>>
    Yes</label>
  <br>
  <label>
    <input type="radio" name="csn-cs-support" value="no" id="csn-cs-support2" <?php if ($csn_cs_support_val =='no') {
		echo 'checked="checked"';
	}; ?>>
    No</label>
                      
                                     </td>
                                   </tr>
                                   <tr valign="top"><th scope="row"><?php _e( 'Total number of case study previews to display', 'csn-cs' ); ?></th>
                                        <td>
            <input name="csn-cs-total" type="number" id="csn-cs-total" value="<?php echo $csn_cs_total_val; ?>" maxlength="3" />                                 
                                     </td>
                                   </tr>
                                    <tr valign="top"><th scope="row"><?php _e( 'Number of case study previews to display per row (for non-directory listing style)', 'csn-cs' ); ?></th>
                                        <td>
            <input id="csn-cs-row" type="number" maxlength="3" name="csn-cs-row" value="<?php echo $csn_cs_row_val; ?>" />                                 
                                     </td>
                                   </tr>
                                   <tr valign="top"><th scope="row"><?php _e( 'You can edit the Case Study Ninja css here', 'csn-cs' ); ?></th>
                                        <td>
            <textarea name="csn-cs-css" rows="10" id="csn-cs-css"><?php echo $csn_cs_css_val; ?></textarea>                                 
                                     </td>
                                   </tr>
                              </table>
                              <?php submit_button(); ?>
                         </form>
                    </div> <!-- end post-body-content -->
               </div> <!-- end post-body -->
          </div> <!-- end poststuff -->
     </div>
	
	
	
	
	
    <?php
}
function Simplify($Numerator, $Denominator)
// this function is used to check if the current case study being displayed is divisible by the number of items per row the user has selected
  {
    $div = $Numerator / $Denominator;
    $mod = $Numerator % $Denominator;
  
    if (0 == $mod)
    {
  //	echo $Numerator . ' is exactly divisible by ' . $Denominator . ' - ' . $div . ' times <br />';
	return "yes";
    }
	
    else
    {
 // 	echo $Numerator . ' is not exactly divisible by ' . $Denominator . '<br />';
	return "no";
    }
}
?>