<?php
$html = file_get_html( 'http://www.intlbeautyinstitute.com/blog/' );


$max_post	 = 1;
$images		 = $hrefs		 = $contents	 = $titles		 = array();
foreach ( $html->find( '.newsItem img' ) as $element ) {
	array_push( $images, $element->src );
	$max_post++;
	if ( $max_post == 5 ) {
		break;
	}
}
$max_post = 1;
foreach ( $html->find( '.pull-right a' ) as $element ) {
	array_push( $hrefs, $element->href );
	$max_post++;
	$post		 = file_get_html( $element->href );
	$paragraphs	 = $post->find( 'p', 1 )->innertext . ' ' . $post->find( 'p', 2 )->innertext;
	array_push( $contents, $paragraphs );

	if ( $max_post == 5 ) {
		break;
	}
}

$max_post = 1;
foreach ( $html->find( '.newsItem h2' ) as $element ) {
	array_push( $titles, $element->innertext );
	$max_post++;
	if ( $max_post == 5 ) {
		break;
	}
}
//echo $contents[0];
//die();

//$dt = date( 'mdy' );
?>

<!-- Content 1 -->
<table align="center" border="0" cellspacing="0" summary="" width="100%">
	<tbody>
		<tr>
			<td class="column sectionArticleImage" valign="top">
				<a href="<?php echo $hrefs[ 0 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank">
					<img alt="" src="<?php echo $images[ 0 ] ?>" style="width: 150px; height: 150px;" width="150" /></a></td>
			<td class="column" valign="top">
				<table border="0" cellpadding="0" cellspacing="0" summary="">
					<tbody>
						<tr>
							<td class="sectionContentTitle" valign="top">
								<a href="<?php echo $hrefs[ 0 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank">
									<?php echo $titles[ 0 ] ?></a></td>
						</tr>
						<tr>
							<td class="sectionContent" valign="top">
								<?php echo $contents[ 0 ] ?></td>
						</tr>
						<tr>
							<td class="buttonContainer">
								<table border="0" cellpadding="0" cellspacing="0" summary="" width="50%">
									<tbody>
										<tr>
											<td class="button">
												<a href="<?php echo $hrefs[ 0 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank">CONTINUE READING</a></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td class="whitespace" height="20">
				&nbsp;</td>
		</tr>
	</tbody>
</table>
<!-- Content 2 -->
<table align="center" border="0" cellspacing="0" summary="" width="100%">
	<tbody>
		<tr>
			<td class="column sectionArticleImage" valign="top">
				<a href="<?php echo $hrefs[ 1 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank">
					<img alt="" src="<?php echo $images[ 1 ] ?>" style="width: 150px; height: 150px;" width="150" /></a></td>
			<td class="column" valign="top">
				<table border="0" cellpadding="0" cellspacing="0" summary="">
					<tbody>
						<tr>
							<td class="sectionContentTitle" valign="top">
								<a href="<?php echo $hrefs[ 1 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank"><?php echo $titles[ 1 ] ?></a></td>
						</tr>
						<tr>
							<td class="sectionContent" valign="top">
								<?php echo $contents[ 1 ] ?></td>
						</tr>
						<tr>
							<td class="buttonContainer">
								<table border="0" cellpadding="0" cellspacing="0" summary="" width="50%">
									<tbody>
										<tr>
											<td class="button">
												<a href="<?php echo $hrefs[ 1 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank">CONTINUE READING</a></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td class="whitespace" height="20">
				&nbsp;</td>
		</tr>
	</tbody>
</table>
<!-- Content 3 -->
<table align="center" border="0" cellspacing="0" summary="" width="100%">
	<tbody>
		<tr>
			<td class="column sectionArticleImage" valign="top">
				<a href="<?php echo $hrefs[ 2 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank">
					<img alt="" src="<?php echo $images[ 2 ] ?>"  width="150" /></a></td>
			<td class="column" valign="top">
				<table border="0" cellpadding="0" cellspacing="0" summary="">
					<tbody>
						<tr>
							<td class="sectionContentTitle" valign="top">
								<a href="<?php echo $hrefs[ 2 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank"><?php echo $titles[ 2 ] ?></a></td>
						</tr>
						<tr>
							<td class="sectionContent" valign="top">
								<?php echo $contents[ 2 ] ?></td>
						</tr>
						<tr>
							<td class="buttonContainer">
								<table border="0" cellpadding="0" cellspacing="0" summary="" width="50%">
									<tbody>
										<tr>
											<td class="button">
												<a href="<?php echo $hrefs[ 2 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank">CONTINUE READING</a></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td class="whitespace" height="20">
				&nbsp;</td>
		</tr>
	</tbody>
</table>
<!-- Content 4 -->
<table align="center" border="0" cellspacing="0" summary="" width="100%">
	<tbody>
		<tr>
			<td class="column sectionArticleImage" valign="top">
				<a href="<?php echo $hrefs[ 3 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank">
					<img alt="" src="<?php echo $images[ 3 ] ?>" width="150" /></a></td>
			<td class="column" valign="top">
				<table border="0" cellpadding="0" cellspacing="0" summary="">
					<tbody>
						<tr>
							<td class="sectionContentTitle" valign="top">
								<a href="<?php echo $hrefs[ 3 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank"><?php echo $titles[ 3 ] ?></a></td>
						</tr>
						<tr>
							<td class="sectionContent" valign="top">
								<?php echo $contents[ 3 ] ?></td>
						</tr>
						<tr>
							<td class="buttonContainer">
								<table border="0" cellpadding="0" cellspacing="0" summary="" width="50%">
									<tbody>
										<tr>
											<td class="button">
												<a href="<?php echo $hrefs[ 3 ] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt;  ?>" target="_blank">CONTINUE READING</a></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td class="whitespace" height="20">
				&nbsp;</td>
		</tr>
	</tbody>
</table>