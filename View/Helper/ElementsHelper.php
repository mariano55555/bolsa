<?php
App::uses('AppHelper', 'View/Helper');
class ElementsHelper extends AppHelper {
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

    public function Menu($elementos = array(), $activo = NULL)
    {
		$html = '<div id="header">
				  <div class="inner"> 
		    			<div id="logo"> 
		    				<a href="index.html">
		    					<img src="'.$this->webroot.'img/esen_header.png"  alt="ESEN"/>
		    				</a>
		    				<a class="menu-hider"></a>
		    			</div>		    
		    <ul id="navigation">';
		    foreach ($elementos as $item => $url) {
		    	if ($item == $activo) {
		    	$html.= '<li class="current"><a href="#">'.$item.'</a></li>';
		    	}else{
				$html.= '<li><a href="'.$this->webroot.$url.'">'.$item.'</a></li>';	    		
		    	}
		    }
		  $html.='</ul>
		  		</div>
			</div>';

			return $html;
    }

}
?>