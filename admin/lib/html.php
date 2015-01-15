<?php 

function button($link,$size,$color,$name){
	echo "
	<a href='".$link."' class='btn btn-".$color." btn-".$size."'>".$name."</a>
	";
}

function button_modal($link,$size,$color,$name,$target){
	echo '
	<button href="'.$link.'" class="btn btn-'.$color.' btn-'.$size.'" data-toggle="modal" data-target="'.$target.'">'.$name.'</button>
	';
}

function button_modal_outline($link,$size,$color,$name,$target){
	echo '
	<button href="'.$link.'" class="btn btn-'.$color.' btn-'.$size.' btn-outline" data-toggle="modal" data-target="'.$target.'">'.$name.'</button>
	';
}
?>