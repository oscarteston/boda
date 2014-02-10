<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $color_style = array(
        'color1'  => 'Color Style #1',
        'color2'  => 'Color Style #2',
        'color3'  => 'Color Style #3',
        'color4'  => 'Color Style #4',
        'color5'  => 'Color Style #5',
        'color6' => 'Color Style #6',
        'color7' => 'Color Style #7',
        'color8' => 'Color Style #8',
        'color9' => 'Color Style #9',
        'color10' => 'Color Style #10',
    );


    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '#daf1fb',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link (Default and recomended logo size: 142-143px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Site Color Style",
                        "desc" => "Change the color style.",
                        "id" => "ale_site_color",
                        'std' => 'color1',
                        'options' => $color_style,
                        'type' => 'select');


    $options[] = array( 'name' => "Manage Background",
                        'desc' => "Select the background color, or upload a custom background image. Default background is the #f5f5f5 color",
                        'id' => 'ale_bg',
                        'std' => $background_defaults,
                        'type' => 'background');


    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Ellen Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Copyrights",
						"desc" => "Your copyright message.",
						"id" => "ale_copyrights",
						"std" => "",
						"type" => "editor");


    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the body Font from Google Library",
                        "desc" => "The default Font is - Arapey",
                        "id" => "ale_headerfont",
                        "std" => "Arapey",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Insert the body Font Attribute",
                        "desc" => "The default attribute is - empty",
                        "id" => "ale_headerfontex",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Select the Headers Font from Google Library",
                        "desc" => "The default Font is - Ranchers",
                        "id" => "ale_mainfont",
                        "std" => "Ranchers",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Insert the Headers Font Attribute",
                        "desc" => "The default attribute is - empty",
                        "id" => "ale_mainfontex",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Select the Headers Font from Google Library",
                        "desc" => "The default Font is - Droid Serif",
                        "id" => "ale_menufont",
                        "std" => "Droid+Serif",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Insert the Headers Font Attribute",
                        "desc" => "The default attribute is - :400italic",
                        "id" => "ale_menufontex",
                        "std" => ":400italic",
                        "type" => "text");

    $options[] = array( "name" => "Select the Headers Font from Google Library",
                        "desc" => "The default Font is - Custom font",
                        "id" => "ale_customfont",
                        "std" => "Default",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Insert the Headers Font Attribute",
                        "desc" => "The default attribute is - empty",
                        "id" => "ale_customfontex",
                        "std" => "",
                        "type" => "text");

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '24px','face' => 'Arapey','style' => 'normal','color' => '#333333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '22px','face' => 'Arapey','style' => 'normal','color' => '#333333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '20px','face' => 'Arapey','style' => 'normal','color' => '#333333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '18px','face' => 'Arapey','style' => 'normal','color' => '#333333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '17px','face' => 'Arapey','style' => 'normal','color' => '#333333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '16px','face' => 'Arapey','style' => 'normal','color' => '#333333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '16px','face' => 'Arapey','style' => 'normal','color' => '#333333'),
                        'type' => 'typography');

    $options[] = array( "name" => "Home",
                        "type" => "heading");
    $options[] = array( "name" => "Home about box link",
                        "desc" => "Insert here your page link",
                        "id" => "ale_abouthomelink",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Home Image menu Wishes link",
                        "desc" => "Insert here your page link",
                        "id" => "ale_homeimg1",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Home Image menu Contact link",
                        "desc" => "Insert here your page link",
                        "id" => "ale_homeimg2",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Home Image menu About link",
                        "desc" => "Insert here your page link",
                        "id" => "ale_homeimg3",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Home Image menu Event link",
                        "desc" => "Insert here your page link",
                        "id" => "ale_homeimg4",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Home Image menu Gallery link",
                        "desc" => "Insert here your page link",
                        "id" => "ale_homeimg5",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Home page verse",
                        "desc" => "Insert here your verse",
                        "id" => "ale_verse",
                        "std" => "You give to me hope<br />And help me to cope<br /> When life pulls me down<br /> You bring me around",
                        "type" => "textarea");

    $options[] = array( "name" => "Groom's name",
                        "desc" => "Insert here your name",
                        "id" => "ale_groom",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Bride's name",
                        "desc" => "Insert here your name",
                        "id" => "ale_bride",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Groom's photo",
                        "desc" => "Insert here your photo (size: 220-220px)",
                        "id" => "ale_groomphoto",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Bride's photo",
                        "desc" => "Insert here your photo (size: 220-220px)",
                        "id" => "ale_bridephoto",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Groom's age",
                        "desc" => "Insert here your age",
                        "id" => "ale_groomage",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Bride's age",
                        "desc" => "Insert here your age",
                        "id" => "ale_brideage",
                        "std" => "",
                        "type" => "text");


	$options[] = array( "name" => "Social",
						"type" => "heading");

    $options[] = array( "name" => "Twitter",
                        "desc" => "Your twitter username.",
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");
	$options[] = array( "name" => "Facebook",
						"desc" => "Your facebook profile URL.",
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");
    $options[] = array( "name" => "Google+",
                        "desc" => "Your google+ profile URL.",
                        "id" => "ale_gog",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Pinterest",
                        "desc" => "Your pinterest profile URL.",
                        "id" => "ale_pint",
                        "std" => "",
                        "type" => "text");

	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");


	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");
	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Show Theme Preview box",
                        "desc" => "Check if you want to show theme preview box",
                        "id" => "ale_previewbox",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Enable or Disable custom scrollbarr",
                        "desc" => "Check if you want to show the custom scrollbar",
                        "id" => "ale_sitecustomscrollbar",
                        "std" => "0",
                        "type" => "checkbox");


    $options[] = array( "name" => "Sidebars",
                        "type" => "heading");

    $options[] = array( 'name' => "Sidebar style on Blog pages",
                        'desc' => "Select sidebar style",
                        'id' => 'ale_blogpages',
                        'std' => '1col-fixed',
                        'type' => 'images',
                        'options' => array(
                            '1col-fixed' => $imagepath . '1col.png',
                            '2c-l-fixed' => $imagepath . '2cl.png',
                            '2c-r-fixed' => $imagepath . '2cr.png')
                        );


	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'event_page_metabox',
        'title'      => 'Event Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-event.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First Slider image',
                'desc' => 'Insert first image (Recomended size 844-314px)',
                'id'   => $prefix . 'imageone',
                'type' => 'file',
            ),
            array(
                'name' => 'Second Slider image',
                'desc' => 'Insert second image (Recomended size 844-314px)',
                'id'   => $prefix . 'imagetwo',
                'type' => 'file',
            ),
            array(
                'name' => 'Third Slider image',
                'desc' => 'Insert third image (Recomended size 844-314px)',
                'id'   => $prefix . 'imagefree',
                'type' => 'file',
            ),
            array(
                'name' => 'Fourth Slider image',
                'desc' => 'Insert fourth image (Recomended size 844-314px)',
                'id'   => $prefix . 'imagefour',
                'type' => 'file',
            ),
            array(
                'name' => 'First Slider thumb',
                'desc' => 'Insert first thumb (Recomended size 210-78px)',
                'id'   => $prefix . 'thumbone',
                'type' => 'file',
            ),
            array(
                'name' => 'Second Slider thumb',
                'desc' => 'Insert second thumb (Recomended size 210-78px)',
                'id'   => $prefix . 'thumbtwo',
                'type' => 'file',
            ),
            array(
                'name' => 'Third Slider thumb',
                'desc' => 'Insert third thumb (Recomended size 210-78px)',
                'id'   => $prefix . 'thumbfree',
                'type' => 'file',
            ),
            array(
                'name' => 'Fourth Slider thumb',
                'desc' => 'Insert fourth thumb (Recomended size 210-78px)',
                'id'   => $prefix . 'thumbfour',
                'type' => 'file',
            ),

            array(
                'name' => 'First Slider title',
                'desc' => 'Insert first title',
                'id'   => $prefix . 'titleone',
                'type' => 'text',
            ),
            array(
                'name' => 'Second Slider title',
                'desc' => 'Insert second title',
                'id'   => $prefix . 'titletwo',
                'type' => 'text',
            ),
            array(
                'name' => 'Third Slider title',
                'desc' => 'Insert third title',
                'id'   => $prefix . 'titlefree',
                'type' => 'text',
            ),
            array(
                'name' => 'Fourth Slider title',
                'desc' => 'Insert fourth title',
                'id'   => $prefix . 'titlefour',
                'type' => 'text',
            ),
            array(
                'name' => 'First Slider subtitle',
                'desc' => 'Insert first subtitle',
                'id'   => $prefix . 'subone',
                'type' => 'text',
            ),
            array(
                'name' => 'Second Slider subtitle',
                'desc' => 'Insert second subtitle',
                'id'   => $prefix . 'subtwo',
                'type' => 'text',
            ),
            array(
                'name' => 'Third Slider subtitle',
                'desc' => 'Insert third subtitle',
                'id'   => $prefix . 'subfree',
                'type' => 'text',
            ),
            array(
                'name' => 'Fourth Slider subtitle',
                'desc' => 'Insert fourth subtitle',
                'id'   => $prefix . 'subfour',
                'type' => 'text',
            ),
            array(
                'name' => 'Wedding place',
                'desc' => 'Insert place name',
                'id'   => $prefix . 'place',
                'type' => 'text',
            ),
            array(
                'name' => 'Wedding place adress',
                'desc' => 'Insert place name adress',
                'id'   => $prefix . 'placeadress',
                'type' => 'text',
            ),
            array(
                'name' => 'Wedding date',
                'desc' => 'Insert the date',
                'id'   => $prefix . 'weddingdate',
                'type' => 'text',
            ),
            array(
                'name' => 'Wedding time',
                'desc' => 'Insert the time',
                'id'   => $prefix . 'weddingtime',
                'type' => 'text',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'about_page_metabox',
        'title'      => 'About Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First TimeLine image',
                'desc' => 'Insert image (Recomended size 200-200px)',
                'id'   => $prefix . 'tlimageone',
                'type' => 'file',
            ),
            array(
                'name' => 'Second TimeLine image',
                'desc' => 'Insert image (Recomended size 200-200px)',
                'id'   => $prefix . 'tlimagetwo',
                'type' => 'file',
            ),
            array(
                'name' => 'Third TimeLine image',
                'desc' => 'Insert image (Recomended size 200-200px)',
                'id'   => $prefix . 'tlimagethree',
                'type' => 'file',
            ),
            array(
                'name' => 'Fourth TimeLine image',
                'desc' => 'Insert image (Recomended size 200-200px)',
                'id'   => $prefix . 'tlimagefour',
                'type' => 'file',
            ),
            array(
                'name' => 'Fifth TimeLine image',
                'desc' => 'Insert image (Recomended size 200-200px)',
                'id'   => $prefix . 'tlimagefive',
                'type' => 'file',
            ),
            array(
                'name' => 'First TimeLine title',
                'desc' => 'Insert title',
                'id'   => $prefix . 'tltitleone',
                'type' => 'text',
            ),
            array(
                'name' => 'Second TimeLine title',
                'desc' => 'Insert title',
                'id'   => $prefix . 'tltitletwo',
                'type' => 'text',
            ),
            array(
                'name' => 'Third TimeLine title',
                'desc' => 'Insert title',
                'id'   => $prefix . 'tltitlethree',
                'type' => 'text',
            ),
            array(
                'name' => 'Fourth TimeLine title',
                'desc' => 'Insert title',
                'id'   => $prefix . 'tltitlefour',
                'type' => 'text',
            ),
            array(
                'name' => 'Fifth TimeLine title',
                'desc' => 'Insert title',
                'id'   => $prefix . 'tltitlefive',
                'type' => 'text',
            ),
            array(
                'name' => 'First TimeLine date',
                'desc' => 'Insert date',
                'id'   => $prefix . 'tldateone',
                'type' => 'text',
            ),
            array(
                'name' => 'Second TimeLine date',
                'desc' => 'Insert date',
                'id'   => $prefix . 'tldatetwo',
                'type' => 'text',
            ),
            array(
                'name' => 'Third TimeLine date',
                'desc' => 'Insert date',
                'id'   => $prefix . 'tldatethree',
                'type' => 'text',
            ),
            array(
                'name' => 'Fourth TimeLine date',
                'desc' => 'Insert date',
                'id'   => $prefix . 'tldatefour',
                'type' => 'text',
            ),
            array(
                'name' => 'Fifth TimeLine date',
                'desc' => 'Insert date',
                'id'   => $prefix . 'tldatefive',
                'type' => 'text',
            ),
        )
    );



    $meta_boxes[] = array(
        'id'         => 'gallery_page_metabox',
        'title'      => 'Gallery Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-gallery.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select column',
                'desc' => 'Select column number',
                'id'   => $prefix . 'galgrid',
                'type' => 'select',
                'std' => 'twocol',
                'options' => array(
                    array( 'name' => 'Two columns', 'value' => 'twocol', ),
                    array( 'name' => 'Three columns', 'value' => 'threecol', ),
                    array( 'name' => 'Four columns', 'value' => 'fourcol', ),
                ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'hometwo_page_metabox',
        'title'      => 'Home 2 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Top Slider slug',
                'desc' => 'Insert the slug',
                'id'   => $prefix . 'sliderslugtwo',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'hometimer_page_metabox',
        'title'      => 'CountDown Timer on Home pages',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-one.php','template-home-two.php','page-home.php','template-home-three.php','template-home-four.php','template-home-five.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Enable or Disable CountDown Timer',
                'desc' => 'Select enable or Disable',
                'id'   => $prefix . 'countstatus',
                'type' => 'select',
                'std' => 'no',
                'options' => array(
                    array( 'name' => 'Disable', 'value' => 'no', ),
                    array( 'name' => 'Enable', 'value' => 'yes', ),
                ),
            ),
            array(
                'name' => 'The year count',
                'desc' => 'ex. 2013',
                'id'   => $prefix . 'c_year',
                'type' => 'text',
            ),
            array(
                'name' => 'The month count',
                'desc' => 'ex. 8',
                'id'   => $prefix . 'c_month',
                'type' => 'text',
            ),
            array(
                'name' => 'The day count',
                'desc' => 'ex. 18',
                'id'   => $prefix . 'c_day',
                'type' => 'text',
            ),
            array(
                'name' => 'The hour count',
                'desc' => 'ex. 14',
                'id'   => $prefix . 'c_hour',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'homethree_page_metabox',
        'title'      => 'Home 3 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-three.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Top Slider slug',
                'desc' => 'Insert the slug',
                'id'   => $prefix . 'sliderslugthree',
                'type' => 'text',
            ),
            array(
                'name' => 'About Groom text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'groomdescr',
                'type' => 'textarea',
            ),
            array(
                'name' => 'About Bride text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'bridedescr',
                'type' => 'textarea',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'homefour_page_metabox',
        'title'      => 'Home 4 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-four.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Top Slider slug',
                'desc' => 'Insert the slug',
                'id'   => $prefix . 'sliderslugfour',
                'type' => 'text',
            ),
            array(
                'name' => 'Items count',
                'desc' => 'Insert the number',
                'id'   => $prefix . 'itemsfour',
                'std'  => '9',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'homefive_page_metabox',
        'title'      => 'Home 5 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-five.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Items count',
                'desc' => 'Insert the number',
                'id'   => $prefix . 'itemsfive',
                'std'  => '9',
                'type' => 'text',
            ),
        )
    );



	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-thumba',
                'width'     => 300,
                'height'    => 200,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-big',
                'width'     => 900,
                'height'    => 600,
                'crop'      => true,
            ),
        ),
        'wishes' => array(
            array(
                'name'      => 'wishes-tumb',
                'width'     => 177,
                'height'    => 245,
                'crop'      => true,
            ),
        ),
    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'comments',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
        'wishes' => array(
            'config' => array(
                'public' => true,
                'exclude_from_search' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'excerpt',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Wishes',
            'multiple' => 'Wishes',
            'columns'    => array(
                'first_image',
            )
        ),

    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array(

    );
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('post','gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}