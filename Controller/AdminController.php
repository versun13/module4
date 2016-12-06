<?php

namespace Controller;


use Model\AdModel;
use Model\ArticleandtagModel;
use Model\CategoryModel;
use Model\ArticleModel;
use Model\TagsModel;
use Model\MessageModel;
use Model\HeadModel;
use Model\BackModel;


class AdminController extends BaseController
{

    protected $name = 'Admin';


    public function main()
    {
        $categoryModel = new CategoryModel();
        if (isset($_POST['newCategory']) && $categoryModel->saveCategory($_POST['newCategory'])) {
            $categoryModel = new CategoryModel();
            $this->message = 'Категория загрузилась';
        } elseif (isset($_POST['newCategory'])) {
            $this->message = 'Категория уже существует';
        }
        $this->data['categories'] = $categoryModel->getAll();
        if (isset($_POST['articleName'])) {
            $articleModel = new ArticleModel();
            if ($articleModel->saveArticle($_POST)) {
                $tags = explode(",", $_POST['tags']);
                unset ($categoryModel);
                $tagsModel = new TagsModel();
                if (isset($_POST['tags'])) {
                    $tagsModel->saveTags($tags);
                }
                $lastArticle = $articleModel->getLastOne();
                $tagsId = $tagsModel->getTagsId($tags);
                $articleandtagModel = new ArticleandtagModel();
                $articleandtagModel->saveArticleTags($tagsId, $lastArticle);
                $this->message = 'Новость добавлена';
            }

        }

        $this->render("main");
    }

    public function agree()
    {
        $messageModel=new MessageModel();
        $this->data['messages'] = $messageModel->getMessageToAgree();


        $this->render('agree');
    }

    public function allow($id)
    {
        $messageModel=new MessageModel();
        $messageModel->saveAgree($id);
        header("Location: http://".SITE_HOST."/admin/agree/");
    }
    public function deletead($id)
    {
        $adModel=new AdModel();
        $adModel->deleteAd($id);
        header("Location: http://".SITE_HOST."/");
    }
    public function addad()
    {
        $adModel=new AdModel();
        if($_POST){
            $adModel->saveAd($_POST['name'],$_POST['price'],$_POST['site'],$_POST['side']);
        }

        $this->render('addad');
    }
    public function style()
    {
        $headModel=new HeadModel();
        $backModel=new BackModel();
        if(isset($_POST['head'])){
            $headModel->saveSelected($_POST['head']);
        } elseif(isset($_POST['back'])){
            $backModel->saveSelected($_POST['back']);
        }


        $this->render('style');
    }

}