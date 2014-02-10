<?php
$alecss_background = ale_get_option('bg');
$alecss_headerfont = ale_get_option('headerfont');
$alecss_menufont = ale_get_option('menufont');
$alecss_mainfont = ale_get_option('mainfont');
$alecss_font = ale_get_option('bodystyle');
$alecss_h1 = ale_get_option('h1sty');
$alecss_h2 = ale_get_option('h2sty');
$alecss_h3 = ale_get_option('h3sty');
$alecss_h4 = ale_get_option('h4sty');
$alecss_h5 = ale_get_option('h5sty');
$alecss_h6 = ale_get_option('h6sty');

if(ale_get_option('customfont')!='Default') {
    $alecss_customfont = ale_get_option('customfont');
} else {
    $alecss_customfont = "wisdom_script_airegular";
}

?>
<?php
if(ale_get_option('headerfontex')){ $hfex = ale_get_option('headerfontex'); } else { $hfex = ''; }
if(ale_get_option('mainfontex')){ $mfex = ale_get_option('mainfontex'); } else { $mfex = ''; }
if(ale_get_option('menufontex')){ $mufex = ale_get_option('menufontex'); } else { $mufex = ''; }
if(ale_get_option('customfontex')){ $cfex = ale_get_option('customfontex'); } else { $cfex = ''; }

echo "<link href='http://fonts.googleapis.com/css?family=".ale_get_option('headerfont').$hfex."|".ale_get_option('mainfont').$mfex."|".ale_get_option('menufont').$mufex."|".ale_get_option('customfont').$cfex."' rel='stylesheet' type='text/css'>"; ?>
<style type='text/css'>
    body {
    <?php
    if($alecss_background['color']){ echo "background-color:".$alecss_background['color'].";"; } else { echo "background-color:#f5f5f5;"; }
    if($alecss_background['image']){ echo "background-image: url(".$alecss_background['image'].");"; };
    if($alecss_background['repeat']){ echo "background-repeat:".$alecss_background['repeat'].";"; };
    if($alecss_background['position']){ echo "background-position:".$alecss_background['position'].";"; };
    if($alecss_background['attachment']){ echo "background-attachment:".$alecss_background['attachment'].";"; };
    if($alecss_font['size']){ echo "font-size:".$alecss_font['size'].";"; };
    if($alecss_font['style']){ echo "font-style:".$alecss_font['style'].";"; };
    if($alecss_font['color']){ echo "color:".$alecss_font['color'].";"; };
    if($alecss_font['face']){ $fontfamily =  str_replace ('+',' ',$alecss_font['face']); echo "font-family:".$fontfamily.";"; };
    ?>
    }
    .customfont {
        <?php if($alecss_customfont) { echo "font-family:".$alecss_customfont;} ?>;
    }
    .mainfont,.aletheme-blog-widget h4,.aletheme-mostcommented-widget h4,.countdown_amount,.ale-testimonial .lefttestimonialpart .testititle,
    .ale-team .testititle,.ale-service .servicetitle, .ale-partner .partnertitle {
        font-family: <?php if($alecss_mainfont) { echo str_replace ('+',' ',$alecss_mainfont);} ?>;
    }
    nav#leftnav,nav#rightnav,#topheader select {
        font-family: <?php if($alecss_menufont == 'Droid+Serif') { echo "Droid Serif; font-style:italic; font-weight:400;"; } else { echo str_replace ('+',' ',$alecss_menufont);} ?>;
    }
    h1 {
    <?php
    if($alecss_h1['size']){ echo "font-size:".$alecss_h1['size'].";"; };
    if($alecss_h1['style']){ echo "font-style:".$alecss_h1['style'].";"; };
    if($alecss_h1['color']){ echo "color:".$alecss_h1['color'].";"; };
    if($alecss_h1['face']){ $h1family =  str_replace ('+',' ',$alecss_h1['face']); echo "font-family:".$h1family.";"; };
    ?>
    }
    h2 {
    <?php
    if($alecss_h2['size']){ echo "font-size:".$alecss_h2['size'].";"; };
    if($alecss_h2['style']){ echo "font-style:".$alecss_h2['style'].";"; };
    if($alecss_h2['color']){ echo "color:".$alecss_h2['color'].";"; };
    if($alecss_h2['face']){ $h2family =  str_replace ('+',' ',$alecss_h2['face']); echo "font-family:".$h2family.";"; };
    ?>
    }
    h3 {
    <?php
    if($alecss_h3['size']){ echo "font-size:".$alecss_h3['size'].";"; };
    if($alecss_h3['style']){ echo "font-style:".$alecss_h3['style'].";"; };
    if($alecss_h3['color']){ echo "color:".$alecss_h3['color'].";"; };
    if($alecss_h3['face']){ $h3family =  str_replace ('+',' ',$alecss_h3['face']); echo "font-family:".$h3family.";"; };
    ?>
    }
    h4 {
    <?php
    if($alecss_h4['size']){ echo "font-size:".$alecss_h4['size'].";"; };
    if($alecss_h4['style']){ echo "font-style:".$alecss_h4['style'].";"; };
    if($alecss_h4['color']){ echo "color:".$alecss_h4['color'].";"; };
    if($alecss_h4['face']){ $h4family =  str_replace ('+',' ',$alecss_h4['face']); echo "font-family:".$h4family.";"; };
    ?>
    }
    h5 {
    <?php
    if($alecss_h5['size']){ echo "font-size:".$alecss_h5['size'].";"; };
    if($alecss_h5['style']){ echo "font-style:".$alecss_h5['style'].";"; };
    if($alecss_h5['color']){ echo "color:".$alecss_h5['color'].";"; };
    if($alecss_h5['face']){ $h5family =  str_replace ('+',' ',$alecss_h5['face']); echo "font-family:".$h5family.";"; };
    ?>
    }
    h6 {
    <?php
    if($alecss_h6['size']){ echo "font-size:".$alecss_h6['size'].";"; };
    if($alecss_h6['style']){ echo "font-style:".$alecss_h6['style'].";"; };
    if($alecss_h6['color']){ echo "color:".$alecss_h6['color'].";"; };
    if($alecss_h6['face']){ $h6family =  str_replace ('+',' ',$alecss_h6['face']); echo "font-family:".$h6family.";"; };
    ?>
    }
    input[type=text],
    input[type=email],
    input[type=url],
    input[type=search],
    input[type=password],
    textarea {
    <?php if($alecss_font['face']){ $fontfamily =  str_replace ('+',' ',$alecss_font['face']); echo "font-family:".$fontfamily.";"; } ?>
    font-size:16px;
    }
    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"] {
        background: none;
        margin: 0;
        font-size:18px;
        text-transform: none;
        <?php if($alecss_customfont) { echo "font-family:".$alecss_customfont;} ?>;
    }

    <?php if(isset($_COOKIE["nuntabg"])){
        echo 'body { background-color: #'.$_COOKIE["nuntabg"].';}';
    }
    if(isset($_COOKIE["nuntapat"])){
        //echo 'body { background-image: url('.get_template_directory_uri().$_COOKIE["nuntapat"].');}';
        add_filter( 'body_class', 'sp_body_class' );
        function sp_body_class( $classes ) {
        $classes[] = $_COOKIE["nuntapat"];
            return $classes;
        }
    } ?>
</style>