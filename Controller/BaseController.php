<?php

namespace Controller;


use Model\AdModel;
use Model\TagsModel;

class BaseController
{
    protected $name = 'Index';

    protected $layout = 'default';

    /* data for views */
    protected $data;

    protected $message;
    public function __construct()
    {
        $tagsModel=new TagsModel();
        $tags=$tagsModel->getAll();
        $tagNames=array();
        foreach ($tags as $tag){
            $tagNames[]=$tag['tag_name'];
        }
        $this->data['tags']=$tagNames;
        $jtags=json_encode($tagNames, JSON_UNESCAPED_UNICODE);
        $adModel=new AdModel();
        $this->data['ad']=$adModel->getAll();
 ;

    }


    protected function render($templateName) {

        $data = $this->data;
        $message = $this->message;

        ob_start();
        include SITE_DIR . DS. "View" .DS . $this->name . DS. $templateName . '.php';
        $content = ob_get_clean();

        include SITE_DIR . DS. "View" .DS . "Layout" .DS . $this->layout .'.php';
    }

    protected function render404() {

        $data = $this->data;
        $message = $this->message;

        ob_start();
        include SITE_DIR . DS. "View" .DS .'404.php';
        $content = ob_get_clean();

        include SITE_DIR . DS. "View" .DS . "Layout" .DS . $this->layout .'.php';
    }
}