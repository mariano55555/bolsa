<?php
App::uses('AppHelper', 'View/Helper');
class BreadCrumbHelper extends AppHelper {
    public $helpers = array('Html', 'Session');

    public function trail($title = NULL, $trail = array(), $active = NULL)
    {
	   $html = '<div class="page-heading">
	            <h3>'.$title.'</h3>
	            <ul class="breadcrumb">';
	            foreach ($trail as $key => $value) {
	        $html.='<li>
	                   	<a href="'.$key.'">'.$value.'</a>
	                </li>';
	            }
	       $html.='<li class="active">'.$active.'</li>
	            </ul>
	        </div>';

		      return $html;
    }

}
?>


		