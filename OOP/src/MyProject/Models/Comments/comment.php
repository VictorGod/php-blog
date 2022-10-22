
<?php
    namespace MyProject\Models\Comments;
    use MyProject\Models\Users\User;
    use MyProject\Models\ActiveRecordEntity;


    class Article extends ActiveRecordEntity{
        protected $name;
        protected $text_comment;
        protected $user_id;
        protected $createdAt;
        protected $data;
 
        public function getData(){
          return $this->data;
      }
        public function getText(){
            return $this->text_comment;
        }
        public function getName(){
            return $this->name;
        }
        public function getAuthor():User{
            return User::getById($this->user_id);
        }
        public function setName(string $name){
            $this->name = $name;
        }
        public function setText(string $text_comment){
            $this->text_comment = $text_comment;
        }
        public function setAuthor(User $user_id){
            $this->user_id = $user_id->id;
        }

        public static function getTableName():string{
            return 'comments';
        }

    }
?>