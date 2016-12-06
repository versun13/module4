<?php

namespace Controller;

use Model\CategoryModel;
use Model\ArticleModel;
use Model\MessageModel;

class IndexController extends BaseController {

    protected $name = 'Index';

    public function index() {
        $categoryModel = new CategoryModel();
        $articleModel = new ArticleModel();
        $this->data['articles'] = $articleModel->getLast();
        $this->data['category'] = $categoryModel->getAll();
        $this->data['threearticle'] = $categoryModel->getAll();

        foreach ($this->data['category'] as $key=>&$value){
            $value['articles']=$articleModel->getArticle($value['category_id']);
        }
        $messageModel=new MessageModel();
        $this->data['users']=$messageModel->getTopUsers();
        $this->data['threearticle'] = $messageModel->getTopThree();





        $this->render("main");
    }


}
