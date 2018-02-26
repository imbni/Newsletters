<?php
include 'inc/simple_html_dom.php';
$html		 = file_get_html( 'http://cultureworkstheschool.com/blog/' );
$max_post	 = 1;
$images		 = $hrefs		 = $contents	 = $titles		 = array();
foreach ( $html->find( '.clearfixdubl img' ) as $element ) {
	array_push( $images, $element->src );
	$max_post++;
	if ( $max_post == 5 ) {
		break;
	}
}

$max_post = 1;
foreach ( $html->find( '.entry-title a' ) as $element ) {
	array_push( $titles, $element->innertext );
	array_push( $hrefs, $element->href );
	$post		 = file_get_html( $element->href );
	
	$aa = $post->find( 'p');
	for ($d=0;$d<sizeof($aa);$d++){
		if ( strpos( $aa[$d], 'src=' ) ) {
			//unset($aa[$d]);
			array_splice($aa, $d, 1);
		}
	}
	
	
	//$paragraphs	 = $post->find( 'p', 0 )->innertext;
	$paragraphs	 = $aa[0];
	if(strlen( $paragraphs ) < 300){
		$paragraphs = $aa[0]->innertext . '' . $aa[1]->innertext;
	}
	/*
	if ( strpos( $paragraphs, 'src=' ) ) {
		$paragraphs = $post->find( 'p', 1 )->innertext;
		if ( strlen( $paragraphs ) < 300 ) {
			$paragraphs = $post->find( 'p', 1 )->innertext . ' ' . $post->find( 'p', 2 )->innertext;
		}
	}elseif(strlen( $paragraphs ) < 300){
		$paragraphs = $post->find( 'p', 0 )->innertext . ' ' . $post->find( 'p', 1 )->innertext;
	}
*/
	//$paragraphs	 = $post->find( 'p', 1 )->innertext . ' ' . $post->find( 'p', 2 )->innertext;
	//echo $paragraphs.'<br>';
	//echo strlen($paragraphs).'<hr>';
	array_push( $contents, $paragraphs );
	//echo $paragraphs . '<hr/>';

	$max_post++;
	if ( $max_post == 5 ) {
		break;
	}
}
$dt = date( 'mdy' );
//die();
?>
<!------------------------------- Content 1 ----------------------------------->
<table align="center" border="0" cellspacing="0" summary="" width="100%">
	<tbody>
		<tr>
			<td><!-- Text Section -->
				<div class="text-wrapper" dir="ltr" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:290px;">
					<table>
						<tbody>
							<tr>
								<td class="column" style="padding-left:10px" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" summary="">
										<tbody><!-- Title part -->
											<tr>
												<td class="contentTitle" valign="top"><a href="<?php echo $hrefs[ 0 ] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="font-size:18px" target="_blank"><strong>
															<?php echo $titles[ 0 ] ?></strong></a></td>
											</tr>
											<!-- Text part -->
											<tr>
												<td class="contentBlurb" style="font-size:16px;padding:10px 0" valign="top"><?php echo $contents[ 0 ] ?></td>
											</tr>
											<!-- Button part -->
											<tr>
												<td class="buttonContainer">
													<table border="0" cellpadding="0" cellspacing="0" summary="" width="50%">
														<tbody>
															<tr>
																<td><span class="read-more"><a href="<?php echo $hrefs[ 0 ] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="background-color:#007f7b;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" target="_blank" >READ MORE</a> </span></td>
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
				</div>
				<!-- Image section -->

				<div class="image-wrapper" dir="ltr" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:280px;">
					<table>
						<tbody>
							<tr>
								<td class="column sectionArticleImage" style="padding-left:13px" valign="top"><a href="<?php echo $hrefs[ 0 ] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank"><img alt="" src="<?php echo $images[ 0 ] ?>" style="width: 290px; height: 180px;" /></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<table class="border" style="margin-top: 0;margin-bottom: 20px;margin-right: auto;margin-left: auto;padding-top: 0;padding-bottom: 20px;padding-right: 0;padding-left: 0;border-style: none;border-collapse: collapse;width: 600px;/* height: 30px; */border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: #007f7b;">
	<tbody>
		<tr class="border">
			<td></td>
		</tr>
	</tbody>
</table>
<!------------------------------- Content 2 ----------------------------------->

<table align="center" border="0" cellspacing="0" summary="" width="100%">
	<tbody>
		<tr>
			<td><!-- Text Section -->
				<div class="text-wrapper" dir="ltr" style="display:inline-block; margin: 0 5px; max-width:100%; vertical-align:top; width:300px;">
					<table>
						<tbody>
							<tr>
								<td class="column" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" summary="">
										<tbody><!-- Title part -->
											<tr>
												<td class="contentTitle" valign="top">
													<table>
														<tbody>
															<tr>
																<td class="td1" style="text-align:center;display:inline-block; "><a class="left" href="<?php echo $hrefs[ 1 ]; ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="margin-top:0;margin-bottom:5px;text-decoration:none;" target="_blank"><img src="<?php echo $images[ 1 ]; ?>" style="width: 280px; height: 190px;" /></a></td>
																<td class="td2" style="display:inline-block; "><a href="<?php echo $hrefs[ 1 ]; ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank"><?php echo $titles[ 1 ]; ?></a></td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<!-- Text part -->
											<tr>
												<td class="contentBlurb" style="font-size:16px" valign="top"><?php echo $contents[ 1 ]; ?></td>
											</tr>
											<!-- Button part -->
											<tr>
												<td class="buttonContainer">
													<table border="0" cellpadding="0" cellspacing="0" summary="" width="50%">
														<tbody>
															<tr>
																<td><span class="read-more"><a href="<?php echo $hrefs[ 1 ]; ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="background-color:#007f7b;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" target="_blank" >READ MORE</a></span></td>
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
				</div>
				<!-- Image section -->

				<div class="image-wrapper" dir="ltr" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:280px;">
					<table>
						<tbody>
							<tr>
								<td class="column sectionArticleImage content" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;" valign="top">
									<table class="flyer" style="margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;border-style:none;border-collapse:collapse;height:200px;width:240px;background-color:#231f20;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;font-family:'Roboto Condensed', sans-serif;">
										<tbody>
											<tr>
												<td class="header" style="text-align:center;color:#fff;width:240px;background-color:#007f7b;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;height:70px;font-family:'Roboto Condensed', sans-serif;font-size:16px;text-transform:uppercase;">Student Life</td>
											</tr>
											<tr>
												<td class="content" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;" valign="top">
													<p style="margin-top:0;"><a href="http://cultureworkstheschool.com/housing/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="color:#fff;" target="_blank">Housing</a></p>

													<p style="margin-top:0;"><a href="http://cultureworkstheschool.com/locations/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="color:#fff;" target="_blank">Locations</a></p>

													<p style="margin-top:0;"><a href="http://cultureworkstheschool.com/activities/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="color:#fff;" target="_blank">Activities</a></p>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<table class="border" style="margin-top: 0;margin-bottom: 20px;margin-right: auto;margin-left: auto;padding-top: 0;padding-bottom: 20px;padding-right: 0;padding-left: 0;border-style: none;border-collapse: collapse;width: 600px;/* height: 30px; */border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: #007f7b;">
	<tbody>
		<tr class="border">
			<td></td>
		</tr>
	</tbody>
</table>
<!-- Content 3 -->

<table align="center" border="0" cellspacing="0" summary="" width="100%">
	<tbody>
		<tr>
			<td><!-- Image section -->
				<div class="image-wrapper" dir="ltr" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:280px;">
					<table>
						<tbody>
							<tr>
								<td class="column sectionArticleImage" style="padding-left:5px" valign="top"><a href="<?php echo $hrefs[ 2 ]; ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank"><img alt="" src="<?php echo $images[ 2 ]; ?>" style="width: 280px; height: 190px;" /></a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Text Section -->

				<div class="text-wrapper" dir="ltr" style="display:inline-block; margin: 0 10px; max-width:100%; vertical-align:top; width:290px;">
					<table>
						<tbody>
							<tr>
								<td class="column" style="padding-left:15px" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" summary="">
										<tbody><!-- Title part -->
											<tr>
												<td class="contentTitle" valign="top"><a href="<?php echo $hrefs[ 2 ]; ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="font-size:18px" target="_blank"><?php echo $titles[ 2 ]; ?></a></td>
											</tr>
											<!-- Text part -->
											<tr>
												<td class="contentBlurb" style="font-size:16px" valign="top"><?php echo $contents[ 2 ]; ?></td>
											</tr>
											<!-- Button part -->
											<tr>
												<td class="buttonContainer">
													<table border="0" cellpadding="0" cellspacing="0" summary="" width="50%">
														<tbody>
															<tr>
																<td><span class="read-more"><a href="<?php echo $hrefs[ 2 ]; ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="background-color:#007f7b;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" target="_blank" >READ MORE</a></span></td>
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
				</div>
			</td>
		</tr>
	</tbody>
</table>

<table class="border" style="margin-top: 0;margin-bottom: 20px;margin-right: auto;margin-left: auto;padding-top: 0;padding-bottom: 20px;padding-right: 0;padding-left: 0;border-style: none;border-collapse: collapse;width: 600px;/* height: 30px; */border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: #007f7b;">
	<tbody>
		<tr class="border">
			<td></td>
		</tr>
	</tbody>
</table>
<!-- Content 4 -->

<table align="center" border="0" cellspacing="0" summary="" width="100%">
	<tbody>
		<tr>
			<td><!-- Image section -->
				<div class="image-wrapper" dir="ltr" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:280px;">
					<table>
						<tbody>
							<tr>
								<td class="column sectionArticleImage content" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;" valign="top">
									<table class="flyer" style="margin: 0px auto; padding: 0px; border-style: none; border-collapse: collapse; height: 200px; width: 240px; background-image: none; background-attachment: scroll; background-color: rgb(35, 31, 32); background-position: left top; background-repeat: repeat;">
										<tbody>
											<tr>
												<td class="header" style="text-align: center; width: 240px; height: 70px; background-image: none; background-attachment: scroll; background-color: rgb(0, 127, 123); background-position: left top; background-repeat: repeat;">Student Life</td>
											</tr>
											<tr>
												<td class="content" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;" valign="top">
													<ul>
														<li><a href="http://cultureworkstheschool.com/wp-content/uploads/2015/03/edurep_infoformmar13.doc?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank">Information Form</a></li>
														<li><a href="http://cultureworkstheschool.com/wp-content/uploads/2016/02/CultureWorks_Manual_28Aug15_29.pdf?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank">Manual</a></li>
														<li><a href="http://cultureworkstheschool.com/wp-content/uploads/2016/02/CultureWorks_AppChecklist.pdf?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank">Application Checklist</a></li>
														<li><a href="http://cultureworkstheschool.com/wp-content/uploads/2016/02/Homestay-Application-20162.doc?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank">Homestay Application </a></li>
														<li><a href="http://cultureworkstheschool.com/wp-content/uploads/2016/02/CW-Statement_of_Activities.docx?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank">Statement of Activities </a></li>
														<li><a href="http://cultureworkstheschool.com/wp-content/uploads/2016/02/CultureWorks_ER_PowerPoint-_282016_29.ppt?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank">CultureWorks Presentation </a></li>
														<li><a href="http://cultureworkstheschool.com/wp-content/uploads/2016/02/CW_ViewBook_ENG_Sept2015_LR.pdf?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank">CultureWorks Brochure </a></li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Text Section -->

				<div class="text-wrapper" dir="ltr" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:300px;">
					<table>
						<tbody>
							<tr>
								<td class="column" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" summary="">
										<tbody><!-- Title part -->
											<tr>
												<td class="contentTitle" valign="top">
													<table>
														<tbody>
															<tr>
																<td class="td1" style="text-align:center;display:inline-block; "><a class="left" href="<?php echo $hrefs[ 3 ]; ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="margin-top: 0px; margin-bottom: 5px;" target="_blank"><img src="<?php echo $images[ 3 ]; ?>" style="width: 280px; height: 190px;" /></a></td>
																<td class="td2" style="display:inline-block; "><a href="<?php echo $hrefs[ 3 ]; ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" target="_blank"><?php echo $titles[ 3 ]; ?></a></td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<!-- Text part -->
											<tr>
												<td class="contentBlurb" valign="top"><span style="font-size: 16px; line-height: 18px;"><?php echo $contents[ 3 ]; ?></span></td>
											</tr>
											<!-- Button part -->
											<tr>
												<td class="buttonContainer">
													<table border="0" cellpadding="0" cellspacing="0" summary="" width="50%">
														<tbody>
															<tr>
																<td><span class="read-more"><a href="<?php echo $hrefs[ 3 ]; ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt; ?>" style="padding: 5px; display: inline; background-image: none; background-attachment: scroll; background-color: rgb(0, 127, 123); background-position: left top; background-repeat: repeat;" target="_blank"><span style="color:#FFF0F5;">READ MORE</span></a></span></td>
															</tr>
														</tbody>
													</table>

													<p></p>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</td>
		</tr>
	</tbody>
</table>
