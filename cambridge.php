<?php
include 'inc/simple_html_dom.php';
$html		 = file_get_html( 'http://www.autotrainingcentre.com/blog/category/locations/cambridge-locations/' );
$max_post	 = 1;
$images		 = $hrefs		 = $contents	 = $titles		 = array();
foreach ( $html->find( '.post-blurb img' ) as $element ) {
	array_push( $images, $element->src );
	$max_post++;
	if ( $max_post == 6 ) {
		break;
	}
}
$max_post = 1;
foreach ( $html->find( '.post-blurb h5 a' ) as $element ) {
	array_push( $hrefs, $element->href );
	array_push( $titles, $element->innertext );
	$post = file_get_html( $element->href );
	$paragraphs = $post->find( 'p', 1 )->innertext . ' ' . $post->find( 'p', 2 )->innertext; 
	array_push( $contents, $paragraphs );
	$max_post++;
	if ( $max_post == 6 ) {
		break;
	}
}
$dt = date('mdy');


$html		 = file_get_html( 'http://www.autotrainingcentre.com/blog/category/locations/cambridge-locations/page/2/' );
$max_post	 = 3;
$images_p2		 = $hrefs_p2		 = $contents_p2	 = $titles_p2		 = array();
foreach ( $html->find( '.post-blurb img' ) as $element ) {
	array_push( $images_p2, $element->src );
	$max_post++;
	if ( $max_post == 3 ) {
		break;
	}
}
$max_post = 3;
foreach ( $html->find( '.post-blurb h5 a' ) as $element ) {
	array_push( $hrefs_p2, $element->href );
	array_push( $titles_p2, $element->innertext );
	$post = file_get_html( $element->href );
	$paragraphs = $post->find( 'p', 1 )->innertext . ' ' . $post->find( 'p', 2 )->innertext; 
	array_push( $contents_p2, $paragraphs );
	$max_post++;
	if ( $max_post == 3 ) {
		break;
	}
}
$dt = date('mdy');
?>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport" />
<meta content="IE=9" http-equiv="X-UA-Compatible" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<!--[if mso]>
<style type=”text/css”>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300');
.fallback-text {
mso-style-priority:99;
font-family: Tahoma !important;
}
</style>
<![endif]--><!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Open Sans', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Entice the open with some amazing preheader text. Use a little mystery and get those subscribers to read through...</div>
<!-- HEADER -->
<p align="center" style="color:#000;font-size: 12px;text-align: center;font-family: 'Open Sans', sans-serif;">
    Cannot see this email? <a href="http://{mailServiceHost}/vm.aspx" style="color:#000;font-size: 11px;font-family: 'Open Sans', sans-serif;" target="_blank" title="Web Version">Click here</a> to view the web version.</p>
<table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border-collapse: collapse !important;mso-table-lspace: 0pt;mso-table-rspace: 0pt;" width="100%">
    <tbody>
        <tr>
        </tr>
        <tr style="background-color: #2F6A97;">
            <td align="center" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                <!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" class="wrapper" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; max-width: 500px; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                    <tbody>
                        <tr>
                            <td align="center" class="logo" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 15px 0;" valign="top">
                                <a href="http://www.autotrainingcentre.com/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" target="_blank"><img alt="Logo" border="0" src="http://www.autotrainingcentre.com/wp-content/uploads/2013/01/logo_transparent.png" style="-ms-interpolation-mode: bicubic; border: 0; color: #ffffff; display: block; font-family: 'Open Sans', sans-serif; font-size: 16px; height: auto; line-height: 100%; outline: none; text-decoration: none;" /> </a></td>
                        </tr>
                    </tbody>
                </table>
                <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]--></td>
        </tr>
        <tr>
            <td align="center" bgcolor="#ffffff" class="section-padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 15px 5px 15px;">
                <!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" class="responsive-table" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border-collapse: collapse !important;max-width: 500px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;margin-top: 20px;" width="100%">
                    <tbody>
                        <tr>
                            <td style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <!-- HERO IMAGE -->
                                <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                        <tr>
                                            <td align="center" class="padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                <a href="<?php echo $hrefs[0] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" target="_blank"><img alt="Insert alt text here" border="0" class="img-max" height="400" src="<?php echo $images[0] ?>" style="-ms-interpolation-mode: bicubic; border: 0; color: #666666; display: block; font-family: Helvetica, arial, sans-serif; font-size: 16px; height: auto; line-height: 100%; outline: none; text-decoration: none;" width="500" /> </a></td>
                                        </tr>
                                        <tr>
                                            <td style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                <!-- COPY -->
                                                <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td align="" class="padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #333333; font-family: 'Open Sans', sans-serif; font-size: 25px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding-top: 20px;">
                                                                <a href="<?php echo $hrefs[0] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="color:#264276;text-decoration: none;font-size: 24px;font-weight: bold;" target="_blank"><?php echo $titles[0] ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="" class="padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #000; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 1.3; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 15px 0 0 0;">
                                                                <?php echo $contents[0] ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                <!-- BULLETPROOF BUTTON -->
                                                <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td align="right" class="padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding-bottom: 20px; padding-top: 5px; text-align: right;">
                                                                <table style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; display: inline-block; float: right !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; text-align: center;">
                                                                    <tbody>
                                                                        <tr style="text-align: center;">
                                                                            <td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #264276;color: #FFFFFF;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-bottom: 10px;padding-left: 30px;padding-right: 30px;padding-top: 10px;text-decoration: none;">
                                                                                <a class="fallback-text" href="<?php echo $hrefs[0] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #FFFFFF; display: inline-block; float: right; font-family: 'Open Sans Condensed', sans-serif; text-decoration: none;" target="_blank">READ MORE</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]--></td>
        </tr>
        <tr>
            <td align="center" bgcolor="#ffffff" class="section-padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 15px 5px 15px;">
                <!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" class="responsive-table" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; max-width: 500px; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                    <tbody>
                        <tr>
                            <td style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <!-- HERO IMAGE -->
                                <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                        <tr>
                                            <td align="center" class="padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                <a href="<?php echo $hrefs[1] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" target="_blank"><img alt="Insert alt text here" border="0" class="img-max" height="400" src="<?php echo $images[1] ?>" style="-ms-interpolation-mode: bicubic; border: 0; color: #666666; display: block; font-family: Helvetica, arial, sans-serif; font-size: 16px; height: auto; line-height: 100%; outline: none; text-decoration: none;" width="500" /> </a></td>
                                        </tr>
                                        <tr>
                                            <td style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                <!-- COPY -->
                                                <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td align="" class="padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #333333; font-family: 'Open Sans', sans-serif; font-size: 25px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding-top: 20px;">
                                                                <a href="<?php echo $hrefs[1] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="color:#264276;text-decoration: none;font-size: 24px;font-weight: bold;" target="_blank"><?php echo $titles[1] ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="" class="padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #000; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 1.3; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 15px 0 0 0;">
                                                                <?php echo $contents[1] ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                <!-- BULLETPROOF BUTTON -->
                                                <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td align="right" class="padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding-bottom: 20px; padding-top: 5px; text-align: right;">
                                                                <table style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; display: inline-block; float: right !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; text-align: center;">
                                                                    <tbody>
                                                                        <tr style="text-align: center;">
                                                                            <td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #264276;color: #FFFFFF;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-bottom: 10px;padding-left: 30px;padding-right: 30px;padding-top: 10px;text-decoration: none;">
                                                                                <a class="fallback-text" href="<?php echo $hrefs[1] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #FFFFFF; display: inline-block; float: right; font-family: 'Open Sans Condensed', sans-serif !important; text-decoration: none;" target="_blank">READ MORE </a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]--></td>
        </tr>
        <tr>
            <td align="center" bgcolor="#eee" class="section-padding" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0 15px 0 15px;">
                <!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" class="responsive-table" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; max-width: 500px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding-bottom: 20px;" width="100%">
                    <!-- TITLE -->
                    <tbody>
                        <tr>
                            <td class="links" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; font-family: 'Open Sans', Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0 0 10px;">
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 1.3; border: 0; color: #264276; font-size: 24px; font-weight: bold; outline: none; text-decoration: none;">
                                    More Stories</p>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 1.3;">
                                    <a href="<?php echo $hrefs[2] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border: 0; color: #264276; outline: none; text-decoration: none;" target="_blank"><?php echo $titles[2] ?></a></p>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 1.3;">
                                    <a href="<?php echo $hrefs[3] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border: 0; color: #264276; outline: none; text-decoration: none;" target="_blank"><?php echo $titles[3] ?></a></p>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 1.3;">
                                    <a href="<?php echo $hrefs[4] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border: 0; color: #264276; outline: none; text-decoration: none;" target="_blank"><?php echo $titles[4] ?></a></p>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 1.3;">
                                    <a href="<?php echo $hrefs_p2[0] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border: 0; color: #264276; outline: none; text-decoration: none;" target="_blank"><?php echo $titles_p2[0] ?></a></p>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 1.3;">
                                    <a href="<?php echo $hrefs_p2[1] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border: 0; color: #264276; outline: none; text-decoration: none;" target="_blank"><?php echo $titles_p2[1] ?></a></p>
                           </td>
                        </tr>
                    </tbody>
                </table>
                <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]--></td>
        </tr>
        <tr>
            <td align="center" bgcolor="#1e2c35" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0px;">
                <!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]--><!-- UNSUBSCRIBE COPY -->
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="responsive-table" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border-collapse: collapse !important; max-width: 500px; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                    <tbody>
                        <tr>
                            <td style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #fff; font-family: 'Open Sans', Arial, sans-serif; font-size: 13px; margin: 0 auto; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0; text-align: center;" width="100%">
                                <strong><a href="http://www.autotrainingcentre.com/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=101516" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border: 0; color: #fff; outline: none; text-decoration: none;" target="_blank">Automotive Training Centre</a> </strong><br />
                                25 Fleming Drive<br />
                                Cambridge, Ontario N1T 2A9<br />
                                Tel: <a href="tel:15192201650" style="color: #fff;text-decoration: none;">1-519-220-1650</a> | Toll Free: <a href="tel:18669942284" style="color: #fff;text-decoration: none;">1-866-994-2284</a><br />
                                <a href="http://www.autotrainingcentre.com/cambridge/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=101516" style="color: #fff;text-decoration: none;" target="_blank">www.autotrainingcentre.com</a><br />
                                <a href="https://www.facebook.com/Automotive.Training.Center.Cambridge" style="color: #fff;text-decoration: none;" target="_blank">Facebook</a> | <a href="https://plus.google.com/u/0/114059516731484544703/posts" style="color: #fff;text-decoration: none;" target="_blank">Google+</a> | <a href="http://www.autotrainingcentre.com/blog/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=101516" style="color: #fff;text-decoration: none;" target="_blank">Blog</a> | <a href="https://twitter.com/ATC_Ontario" style="color: #fff;text-decoration: none;" target="_blank">Twitter</a> | <a href="http://www.linkedin.com/company/5010827?trk=tyah&amp;trkInfo=tarId%3A1403270673424%2Ctas%3Aautomotive%20training%20centre%2Cidx%3A1-2-2" style="color: #fff;text-decoration: none;" target="_blank">LinkedIn</a></td>
                        </tr>
                    </tbody>
                </table>
                <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]--></td>
        </tr>
        <tr>
            <td>
                <p style="font-family: 'Open Sans', Arial, sans-serif;font-size: 13px;text-align: center;">
                    This email was sent to $Email$. You can instantly unsubscribe from these emails by <a href="http://email.leadcentre.ca/MailService/Modules/Email/optout.aspx" style="color:#000;text-decoration: underline;" title="Optout">clicking here</a>.</p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    &nbsp;</p>
