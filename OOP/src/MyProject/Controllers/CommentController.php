<?php
    namespace MyProject\Controllers;
    use MyProject\View\View;
    use MyProject\Models\Comments\Comment;
    use MyProject\Models\Articles\Article;
    use MyProject\Models\Users\User;

    class ArticleController{
        private $view;
        public function __construct(){
            $this->view = new View(__DIR__.'/../../../templates');
        }
        public function view(int $art_id){
            $comment = Comment::getById($art_id);
            $this->view->renderHtml('Comments/Comment.php', ['comment' => $comment]);
        }
        public function edit(int $art_Id):void{
            $comment = Comment::getById($art_Id);
            $comment->setName('new comment');
            $comment->setText('new text one');
            $comment->save();
        
       
        }
        public function add():void{
            $user_id = User::getById(1);
            $comment = new Comment();
            $comment->setName('create comment');
            $comment->setText('create text');
            $comment->setAuthor($user_id);
            $comment->date();
            $comment->save();

        }
    }
?>