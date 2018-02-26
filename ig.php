<?php
include 'inc/simple_html_dom.php';
$html		 = file_get_html( 'http://www.institut-grasset.qc.ca/actualites' );
$max_post	 = 1;
$images		 = $hrefs		 = $contents	 = $titles		 = array();

//views-field-body
foreach ( $html->find( '.views-field-body' ) as $ul ) {
	foreach ( $ul->find( '.field-content' ) as $li ) {
		//echo ' - ';
		$img = FALSE;
		foreach ( $li->find( 'img' ) as $lis ) {
			$img = TRUE;
			$ww	 = $lis->src;
		}
		if ( $img ) {
			//echo $ww;
			array_push( $images, 'http://www.institut-grasset.qc.ca/' . $ww );
		} else {
			//echo 'no-img';
			array_push( $images, '' );
		}
		//echo '<hr>';
	}
}
//echo '<pre>';
//print_r($images);
//die();


/*
foreach ( $html->find( '.field-content img' ) as $element ) {
	$str = strlen( $element->src );
	echo 'str=' . $str . ' - max= ' . $max_post . ' - ' . $element->src . '<br/>';
	if ( $str > 0 ) {
		array_push( $images, 'http://www.institut-grasset.qc.ca/' . $element->src );
	} else {
		array_push( $images, 'http://www.institut-grasset.qc.ca/' . '' );
	}

	//echo $max_post. ' - '.$element->src.'<br/>';
	$max_post++;
	if ( $max_post == 6 ) {
		break;
	}
}
*/
//echo '<pre>';
//print_r($images);
//die();
$max_post = 1;
foreach ( $html->find( '.field-content a' ) as $element ) {
	$stp = strpos( $element->href, 'http://' );
	if ( strlen( $stp ) != 0 ) {
		array_push( $hrefs, $element->href );
	} else {
		array_push( $hrefs, 'http://www.institut-grasset.qc.ca/' . $element->href );
	}
	$max_post++;
	if ( $max_post == 6 ) {
		break;
	}
}
foreach ( $hrefs as $item ) {
	$post = file_get_html( $item );
	foreach ( $post->find( 'h1' ) as $h1 ) {
		array_push( $titles, $h1->innertext );
		break;
	}

	//array_push( $titles, $post->find( '#page-title', 2 )->innertext );
	$paragraphs = $post->find( 'p', 2 )->innertext;
	//$paragraphs	 = $post->find( 'p', 2 )->innertext . ' ' . $post->find( 'p', 3 )->innertext;
	array_push( $contents, $paragraphs );
}
//for($i=0;$i<sizeof($hrefs);$i++){
//	$hrefs[$i].='/?utm_source=newsletter&utm_medium=email&utm_campaign=113016';
//}
$dt	 = date( 'mdy' );
$ga	 = '?utm_source=newsletter&utm_medium=email&utm_campaign=' . $dt;
?>
<h1>Post #1</h1>
<textarea rows="5" cols="200">
<p><a target="_blank"  href="<?php echo $hrefs[ 0 ] . '/' . $ga; ?>"><img alt="<?php echo $titles[ 0 ]; ?>" src="<?php echo $images[ 0 ]; ?>" style="width: 100%;" /></a></p>
</textarea>
<br/>
<textarea rows="5" cols="200">
<div class="text-wrapper" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:100%;">
<table style="border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;">
	<tbody>
		<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
			<td class="column" style="padding-left:10px" valign="top">
			<h1  auto="" class="title-primary" style="line-height: 30px; color:#39607a ; font-size: 24px; text-transform: uppercase; margin-bottom: 10px; margin-top: 0px;text-decoration:none;"><a style="text-decoration:none;color:#39607a;font-family: 'Roboto Condensed', sans-serif"> </a><span style="color:#39607a;">
					<a target="_blank"  href="<?php echo $hrefs[ 0 ] . '/' . $ga; ?>"><?php echo $titles[ 0 ]; ?></a> </span></h1>

			<table border="0" cellpadding="0" cellspacing="0" style="font-family: 'Roboto Condensed', sans-serif ;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="">
				<tbody><!-- Text part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="contentBlurb" style="font-size:16px;padding:10px 0" valign="top">
							<p style="margin-bottom: 0;"><span style="color:#464646;">
												<?php echo $contents[ 0 ]; ?>
							</span></p>

						</td>
					</tr>
					<!-- Button part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="buttonContainer">
						<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 35px;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="" width="50%">
							<tbody>
								<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
									<td><span class="read-more">
											<a fr-original-style="background-color:#fdb913;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" target="_blank"  href="<?php echo $hrefs[ 0 ] . '/' . $ga; ?>" style="background-color:#bd2b30;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" ><span style="color:#FAEBD7;">En savoir plus</span></a> </span></td>
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
</textarea>

<h1>Post #2</h1>
<textarea rows="5" cols="200">
<p>
<a target="_blank"  href="<?php echo $hrefs[ 1 ] . '/' . $ga; ?>">
<img alt="<?php echo $titles[ 1 ]; ?>" src="<?php echo $images[ 1 ]; ?>" style="width: 100%;" />
</a>
</p>
</textarea>
<br/>
<textarea rows="5" cols="200">
<div class="text-wrapper" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:100%;">
<table style="border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;">
	<tbody>
		<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
			<td class="column" style="padding-left:10px" valign="top">
			<h1  auto="" class="title-primary" style="line-height: 30px; color:#39607a ; font-size: 24px; text-transform: uppercase; margin-bottom: 10px; margin-top: 0px;text-decoration:none;"><a style="text-decoration:none;color:#39607a;font-family: 'Roboto Condensed', sans-serif"> </a><span style="color:#39607a;">
					<a target="_blank"  href="<?php echo $hrefs[ 1 ] . '/' . $ga; ?>">	<?php echo $titles[ 1 ]; ?> </a></span></h1>

			<table border="0" cellpadding="0" cellspacing="0" style="font-family: 'Roboto Condensed', sans-serif ;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="">
				<tbody><!-- Text part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="contentBlurb" style="font-size:16px;padding:10px 0" valign="top">
						<p style="margin-bottom: 0;"><span style="color:#464646;">
												<?php echo $contents[ 1 ]; ?>
							</span></p>

						</td>
					</tr>
					<!-- Button part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="buttonContainer">
						<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 35px;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="" width="50%">
							<tbody>
								<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
									<td><span class="read-more">
											<a fr-original-style="background-color:#fdb913;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" target="_blank"  href="<?php echo $hrefs[ 1 ] . '/' . $ga; ?>" style="background-color:#bd2b30;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" ><span style="color:#FAEBD7;">En savoir plus</span></a> </span></td>
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
</textarea>

<h1>Post #3</h1>
<textarea rows="5" cols="200">
<p><a target="_blank"  href="<?php echo $hrefs[ 2 ] . '/' . $ga; ?>"><img alt="<?php echo $titles[ 2 ]; ?>" src="<?php echo $images[ 2 ]; ?>" style="width: 100%;" /></a></p>
</textarea>
<br/>
<textarea rows="5" cols="200">
<div class="text-wrapper" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:100%;">
<table style="border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;">
	<tbody>
		<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
			<td class="column" style="padding-left:10px" valign="top">
			<h1  auto="" class="title-primary" style="line-height: 30px; color:#39607a ; font-size: 24px; text-transform: uppercase; margin-bottom: 10px; margin-top: 0px;text-decoration:none;"><a style="text-decoration:none;color:#39607a;font-family: 'Roboto Condensed', sans-serif"> </a><span style="color:#39607a;">
					<a target="_blank"  href="<?php echo $hrefs[ 2 ] . '/' . $ga; ?>"><?php echo $titles[ 2 ]; ?></a> </span></h1>

			<table border="0" cellpadding="0" cellspacing="0" style="font-family: 'Roboto Condensed', sans-serif ;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="">
				<tbody><!-- Text part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="contentBlurb" style="font-size:16px;padding:10px 0" valign="top">
						<p style="margin-bottom: 0;"><span style="color:#464646;">
												<?php echo $contents[ 2 ]; ?>
							</span></p>

						</td>
					</tr>
					<!-- Button part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="buttonContainer">
						<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 35px;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="" width="50%">
							<tbody>
								<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
									<td><span class="read-more">
											<a fr-original-style="background-color:#fdb913;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" target="_blank"  href="<?php echo $hrefs[ 2 ] . '/' . $ga; ?>" style="background-color:#bd2b30;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" ><span style="color:#FAEBD7;">En savoir plus</span></a> </span></td>
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
</textarea>


<h1>Post #4</h1>
<textarea rows="5" cols="200">
<p><a target="_blank"  href="<?php echo $hrefs[ 3 ] . '/' . $ga; ?>"><img alt="<?php echo $titles[ 3 ]; ?>" src="<?php echo $images[ 3 ]; ?>" style="width: 100%;" /></a></p>
</textarea>
<br/>
<textarea rows="5" cols="200">
<div class="text-wrapper" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:100%;">
<table style="border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;">
	<tbody>
		<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
			<td class="column" style="padding-left:10px" valign="top">
			<h1  auto="" class="title-primary" style="line-height: 30px; color:#39607a ; font-size: 24px; text-transform: uppercase; margin-bottom: 10px; margin-top: 0px;text-decoration:none;"><a style="text-decoration:none;color:#39607a;font-family: 'Roboto Condensed', sans-serif"> </a><span style="color:#39607a;">
					<a target="_blank"  href="<?php echo $hrefs[ 3 ] . '/' . $ga; ?>"><?php echo $titles[ 3 ]; ?> </a></span></h1>

			<table border="0" cellpadding="0" cellspacing="0" style="font-family: 'Roboto Condensed', sans-serif ;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="">
				<tbody><!-- Text part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="contentBlurb" style="font-size:16px;padding:10px 0" valign="top">
						<p style="margin-bottom: 0;"><span style="color:#464646;">
												<?php echo $contents[ 3 ]; ?>
							</span></p>

						</td>
					</tr>
					<!-- Button part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="buttonContainer">
						<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 35px;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="" width="50%">
							<tbody>
								<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
									<td><span class="read-more">
											<a fr-original-style="background-color:#fdb913;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" target="_blank"  href="<?php echo $hrefs[ 3 ] . '/' . $ga; ?>" style="background-color:#bd2b30;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" ><span style="color:#FAEBD7;">En savoir plus</span></a> </span></td>
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
</textarea>

<h1>Post #5</h1>
<textarea rows="5" cols="200">
<p><a target="_blank"  href="<?php echo $hrefs[ 4 ] . '/' . $ga; ?>"><img alt="<?php echo $titles[ 4 ]; ?>" src="<?php echo $images[ 4 ]; ?>" style="width: 100%;" /></a></p>
</textarea>
<br/>
<textarea rows="5" cols="200">
<div class="text-wrapper" style="display:inline-block; margin: 0 -2px; max-width:100%; vertical-align:top; width:100%;">
<table style="border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;">
	<tbody>
		<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
			<td class="column" style="padding-left:10px" valign="top">
			<h1  auto="" class="title-primary" style="line-height: 30px; color:#39607a ; font-size: 24px; text-transform: uppercase; margin-bottom: 10px; margin-top: 0px;text-decoration:none;"><a style="text-decoration:none;color:#39607a;font-family: 'Roboto Condensed', sans-serif"> </a><span style="color:#39607a;">
					<a target="_blank"  href="<?php echo $hrefs[ 4 ] . '/' . $ga; ?>"><?php echo $titles[ 4 ]; ?> </a></span></h1>

			<table border="0" cellpadding="0" cellspacing="0" style="font-family: 'Roboto Condensed', sans-serif ;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="">
				<tbody><!-- Text part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="contentBlurb" style="font-size:16px;padding:10px 0" valign="top">
						<p style="margin-bottom: 0;"><span style="color:#464646;">
												<?php echo $contents[ 4 ]; ?>
							</span></p>

						</td>
					</tr>
					<!-- Button part -->
					<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
						<td class="buttonContainer">
						<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 35px;border: none; border-collapse: collapse; empty-cells: show; max-width: 100%;" summary="" width="50%">
							<tbody>
								<tr fr-original-style="-webkit-user-select: none;" style="-webkit-user-select: none;">
									<td><span class="read-more">
											<a fr-original-style="background-color:#fdb913;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" target="_blank"  href="<?php echo $hrefs[ 4 ] . '/' . $ga; ?>" style="background-color:#bd2b30;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding:5px;display:inline;color:#fff;text-transform:uppercase;text-decoration:none;font-size:12px;" ><span style="color:#FAEBD7;">En savoir plus</span></a> </span></td>
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
</textarea>