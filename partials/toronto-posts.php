<?php
//$html		 = file_get_html( 'http://www.autotrainingcentre.com/blog/category/locations/montreal/' );
$html		 = file_get_html( 'http://www.autotrainingcentre.com/blog/category/locations/toronto/' );
//$html		 = file_get_html( 'http://www.autotrainingcentre.com/blog/category/locations/cambridge-locations/' );
//$html		 = file_get_html( 'http://www.ecoleauto.com/blog/' );


$max_post	 = 1;
$images		 = $hrefs		 = $contents	 = $titles		 = array();
foreach ( $html->find( '.post-blurb img' ) as $element ) {
	array_push( $images, $element->src );
	$max_post++;
	if ( $max_post == 5 ) {
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
	if ( $max_post == 5 ) {
		break;
	}
}
$dt = date('mdy');
?>
<table class="article">
	<tbody>
		<tr>
			<td colspan="2" valign="top">
				<h2>
					<a href="<?php echo $hrefs[0] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank"><?php echo $titles[0] ?></a></h2>
			</td>
		</tr>
		<tr>
			<td class="thumb-img" valign="top">
				<a href="<?php echo $hrefs[0] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank">
					<img src="<?php echo $images[0] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank" /></a></td>
			<td class="article-excerpt" valign="top">
				<p>
					<?php echo $contents[0] ?>
					<a href="<?php echo $hrefs[0] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank">Read More</a></p>
			</td>
		</tr>
	</tbody>
</table>
<div class="clear">
	&nbsp;</div>
<hr />
<table class="article">
	<tbody>
		<tr>
			<td colspan="2" valign="top">
				<h2>
					<a href="<?php echo $hrefs[1] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank"><?php echo $titles[1] ?></a></h2>
			</td>
		</tr>
		<tr>
			<td class="thumb-img" valign="top">
				<a href="<?php echo $hrefs[1] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank">
					<img src="<?php echo $images[1] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank" /></a></td>
			<td class="article-excerpt" valign="top">
				<p>
					<?php echo $contents[1] ?>
					<a href="<?php echo $hrefs[1] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank">Read More</a></p>
			</td>
		</tr>
	</tbody>
</table>
<div class="clear">
	&nbsp;</div>
<hr />
<table class="article">
	<tbody>
		<tr>
			<td colspan="2" valign="top">
				<h2>
					<a href="<?php echo $hrefs[2] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank"><?php echo $titles[2] ?></a></h2>
			</td>
		</tr>
		<tr>
			<td class="thumb-img" valign="top">
				<a href="<?php echo $hrefs[2] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank">
					<img src="<?php echo $images[2] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank" /></a></td>
			<td class="article-excerpt" valign="top">
				<p>
					<?php echo $contents[2] ?>
					<a href="<?php echo $hrefs[2] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank">Read More</a></p>
			</td>
		</tr>
	</tbody>
</table>
<div class="clear">
	&nbsp;</div>
<hr />
<table class="article">
	<tbody>
		<tr>
			<td colspan="2" valign="top">
				<h2>
					<a href="<?php echo $hrefs[3] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank"><?php echo $titles[3] ?></a></h2>
			</td>
		</tr>
		<tr>
			<td class="thumb-img" valign="top">
				<a href="<?php echo $hrefs[3] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank">
					<img src="<?php echo $images[3] ?>?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank" /></a></td>
			<td class="article-excerpt" valign="top">
				<p>
					<?php echo $contents[3] ?>
					<a href="<?php echo $hrefs[3] ?>/?utm_source=newsletter&amp;utm_medium=email&amp;utm_campaign=<?php echo $dt ?>" target="_blank">Read More</a></p>
			</td>
		</tr>
	</tbody>
</table>
<div class="clear">
	&nbsp;</div>
<hr />