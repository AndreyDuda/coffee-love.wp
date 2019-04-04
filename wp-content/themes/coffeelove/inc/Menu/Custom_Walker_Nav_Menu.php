<?php


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
	public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		//$output .= "Link - ".$depth;


		$html = "";
		if($depth == 0) {
			$html .= "\n<li";

			if($args->walker->has_children) {
				$html .= ' class="dropdown"';
			}

			$html .= "><a ";

			if($args->walker->has_children) {
				$html .= ' class="dropdown-toggle" data-toggle="dropdown"';
			}
			$html .= ' href="%s">%s';

			if($args->walker->has_children) {
				$html .= ' <b class="caret"></b>';
			}
			$html .= '</a>';
			$output .= sprintf($html,$item->url,$item->title);

		}
		elseif($depth == 1) {
			$output .= '<div class="col-sm-4"><ul class="multi-column-dropdown"><h6>'.mb_strtoupper($item->title).'</h6>';
		}
		elseif($depth == 2) {
			$output .= '<li><a href="'.$item->url.'">'.$item->title.'</a></li>';
		}
	}

	public function end_el(&$output, $item, $depth = 0, $args = array()) {

		if($depth == 0) {
			$output .= "</li>";
		}
		elseif($depth == 1) {
			$output .= '</ul></div>';
		}
	}

	public function start_lvl(&$output, $depth = 0, $args = array()) {
		if($depth == 0) {
			$output .= '<ul class="dropdown-menu multi-column columns-3"><div class="row">';
		}
	}

	public function end_lvl(&$output, $depth = 0, $args = array()) {
		if($depth == 0) {
			$output .= '</div></ul>';
		}
	}
}