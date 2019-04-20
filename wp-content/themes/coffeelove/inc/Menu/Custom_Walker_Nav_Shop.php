<?php


class Custom_Walker_Nav_Shop extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

        $html = "";
        if($depth == 0) {
            $html .= "";

            if($args->walker->has_children) {
                $html .= '';
            }

            $html .= "";

            if($args->walker->has_children) {
                $html .= '';
            }
            $html .= '';

            if($args->walker->has_children) {
                $html .= '';
            }
            $html .= '';
            $output .= sprintf($html,$item->url,$item->title);

        }
        elseif($depth == 1) {
            $output .= '<div class="col-sm-4"><h6>'.mb_strtoupper($item->title).'</h6>';
        }
        elseif($depth == 2) {
            $output .= '<a href="'.$item->url.'">'.$item->title.'</a>';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = array()) {

        if($depth == 0) {
            $output .= "";
        }
        elseif($depth == 1) {
            $output .= '</div>';
        }
    }

    public function start_lvl(&$output, $depth = 0, $args = array()) {
        if($depth == 0) {
            $output .= '<div class="row">';
        }
    }

    public function end_lvl(&$output, $depth = 0, $args = array()) {
        if($depth == 0) {
            $output .= '</div>';
        }
    }
}