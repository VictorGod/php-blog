<?php
    namespace MyProject\Models\Articles;
    use MyProject\Models\Users\User;
    use MyProject\Models\ActiveRecordEntity;


    class Article extends ActiveRecordEntity{
        protected $name;
        protected $text;
        protected $authorId;
        protected $createdAt;
 
        public function getText(){
            return $this->text;
        }
        public function getName(){
            return $this->name;
        }
        public function getAuthor():User{
            return User::getById($this->authorId);
        }
        public function setName(string $name){
            $this->name = $name;
        }
        public function setText(string $text){
            $this->text = $text;
        }
        public function setAuthor(User $author){
            $this->authorId = $author->id;
        }

        public static function getTableName():string{
            return 'articles';
        }

    }
?>