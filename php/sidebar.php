<div class="sidebar-content">

<div class="logo">
<img class="logo" src="<?php echo HTML_PATH_ADMIN_THEME ?>img/logo.svg" />
<h1 class="title"><?php echo $Site->title() ?></h1>
</div>

<?php

$html  = '<div class="plugin plugin-pages">';
$html .= '<div class="plugin-content">';
$html .= '<ul class="parent">';

foreach ($pagesByParent[PARENT] as $parent) {
	$html .= '<li class="parent">';
	$html .= '<span class="parent">'.$parent->title().'</span>';

	if (!empty($pagesByParent[$parent->key()])) {
		$html .= '<ul class="child">';
		foreach ($pagesByParent[$parent->key()] as $child) {
			if ($child->key()==$page->key()) {
				$html .= '<li class="child selected">';
			} else {
				$html .= '<li class="child">';
			}
			$html .= '<a class="child" href="'.$child->permalink().'">';
			$html .= $child->title();
			$html .= '</a>';
			$html .= '</li>';
		}
		$html .= '</ul>';
	}
	$html .= '</li>';
}

$html .= '</ul>';
$html .= '</div>';
$html .= '</div>';

echo $html;

?>

</div>