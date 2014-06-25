<?php
App::uses('AppHelper', 'View/Helper');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
class ImageHelper extends AppHelper {
    public $helpers = array('Html', 'Session');

    public function ImageCompany($name = NULL, $url = NULL)
    {
			$dir   = new Folder(WWW_ROOT . 'img/companies/');
            $files = $dir->find($this->reemplazar($name).'.png', false);
            //debug($files);
           // debug($this->reemplazar($name));
            if (isset($files[0])) {
                return $this->Html->link(
                                $this->Html->image('companies/'.$this->reemplazar($name).".png", array("alt" => $name)). '<br/> ' . __($name),
                                $url,
                                array('escape' => false)
                            );
            }else{
                 return $this->Html->link(
                                $this->Html->image('companies/no-pre.png', array("alt" => $name)). '<br/> ' . __($name),
                                $url,
                                array('escape' => false)
                            );
            }
    }

    public function reemplazar($cadena = NULL)
    {
        $cadena = str_replace("á", "a", $cadena); /*Reemplazar "á" por "&aacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("Á", "A", $cadena); /*Reemplazar "Á" por "&Aacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("¦", "¦", $cadena); /*Reemplazar "Á" por "&Aacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("é", "e", $cadena); /*Reemplazar "é" por "&eacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("É", "E", $cadena); /*Reemplazar "É" por "&Eacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("í", "i", $cadena); /*Reemplazar "í" por "&iacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("Í", "I", $cadena); /*Reemplazar "Í" por "&Iacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("ó", "o", $cadena); /*Reemplazar "ó" por "&oacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("Ó", "&Oacute;", $cadena); /*Reemplazar "Ó" por "&Oacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("ú", "&uacute;", $cadena); /*Reemplazar "ú" por "&uacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("Ú", "&Uacute;", $cadena); /*Reemplazar "Ú" por "&Uacute;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("ñ", "&ntilde;", $cadena); /*Reemplazar "ñ" por "&ntilde;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("Ñ", "&Ntilde;", $cadena); /*Reemplazar "Ñ" por "&Ntilde;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("ª", "&ordf;", $cadena); /*Reemplazar "ª"(indicador de ordinal femenino) por "&ordf;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("º", "&ordm;", $cadena); /*Reemplazar "º"(indicador de ordinal masculino) por "&ordm;" para que la tilde sea mostrada correctamente en el documento HTML (la página web).*/
        $cadena = str_replace("°", "&deg;", $cadena); /*Reemplazar "-"(signo menos o guion medio) por "&#45;" para que el guión medio sea mostrada correctamente en el documento HTML (la página web).*/
        return $cadena;
    }

}
?>