<?php


namespace Controller;

use Model\ArticleandtagModel;
use Model\ArticleModel;
use Model\MailsendModel;
use Model\MessageModel;
use Model\VotedModel;

class NewsController extends BaseController
{
    protected $name = 'News';

    public function display($id)
    {

        $articleModel = new ArticleModel();
        $article = $articleModel->getart($id);

        if (!$article) {
            return $this->render404();
            //return $this->render('noProduct');
        }
        $this->data['article'] = $article;


        if ($_COOKIE['views'] !== $id) {
            $articleModel->count($id);
            setcookie("views", $id, time() + 60);

        }
        $messageModel = new MessageModel();
        $this->data['messages'] = $messageModel->getMessage($id);
        foreach ($this->data['messages'] as $key => &$value) {
            $value['answers'] = $messageModel->getAnswer($id, $value['message_id']);
        }
        $tagmodel = new ArticleandtagModel();
        $this->data['tags'] = $tagmodel->getTags($id);




        $this->render('news');

    }

    public function comment($id)
    {
        if ($_POST) {
            $message = new MessageModel();
            if ($message->save($_POST, $id, $_SESSION['userId'])) {
                return header("Location: http://" . SITE_HOST . "/news/display/" . $id);
            }
        }

        $this->render("comment");
    }

    public function answer($id)
    {
        echo $_GET['commentId'];
        if ($_POST) {
            $message = new MessageModel();
            if ($message->saveAnswer($_POST, $id, $_SESSION['userId'], $_GET['commentId'])) {
                return header("Location: http://" . SITE_HOST . "/news/display/" . $id);
            }
        }

        $this->render("answer");
    }

    public function tags($id)
    {
        $articleModel = new ArticleModel();
        if ($id) {
            $this->data['articles'] = $articleModel->getArticleByTag($id);
        } elseif (isset($_GET['tag'])) {
            $this->data['articles'] = $articleModel->getArticleByName($_GET['tag']);
        };
        $this->render("tags");
    }

    public function edit($id)
    {
        $message = new MessageModel();
        $this->data['message'] = $message->getMessageEdit($id);
        if ($_POST) {
            if ($message->edit($id, $_POST['message'])) {
                return header("Location: http://" . SITE_HOST . "/news/display/" . $this->data['message'][0]['news_id']);
            }
        }

        $this->render("edit");
    }

    public function pagination($id)
    {
        $articleModel = new ArticleModel();
        $countArticle = $articleModel->countArticle($id);
        $per_page = 5;

        $from = $_GET['page'] * $per_page;
        $num_pages = ceil($countArticle[0]['COUNT(*)'] / $per_page);
        $this->data['pages'] = $articleModel->getPageArticles($from, $per_page, $id);
        $this->data['currentPage'] = 0;
        $this->data['pagesP'] = $num_pages - 1;


        $this->render("pagination");
    }

    public function usermessages($id)
    {
        $articleModel = new MessageModel();
        $countArticle = $articleModel->countMessages($id);
        $per_page = 5;

        $from = $_GET['page'] * $per_page;
        $num_pages = ceil($countArticle[0]['COUNT(*)'] / $per_page);
        $this->data['messages'] = $articleModel->getPageArticles($from, $per_page, $id);
        $this->data['currentPage'] = 0;
        $this->data['pagesP'] = $num_pages - 1;


        $this->render("usermessages");
    }

    public function save()
    {
        if ($_POST) {
            $mailsendModel = new MailsendModel();
            $mailsendModel->save($_POST['name'], $_POST['surname'], $_POST['email']);
            header("Location: http://" . SITE_HOST . "/");
        }

    }

    public function rating($id)
    {
        $votedModel = new VotedModel();
        $votes = $votedModel->findVote($_SESSION['userId'], $id);
        if (isset($votes[0])){
            header("Location: http://" . SITE_HOST . "/news/display/" . $_GET['article']);
        } else{
            if ($votedModel->saveVote($_SESSION['userId'], $id)) {

                $messageModel = new MessageModel();
                $messageModel->rating($_GET['value'], $id);

            }
        }
        header("Location: http://" . SITE_HOST . "/news/display/" . $_GET['article']);


    }

}