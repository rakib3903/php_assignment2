<?php
   class Book{  
    private $isbn, $title, $author, $available;
        public function __construct(int $isbn, string $title, string $author, int $available){
            $this->isbn = $isbn;
            $this->title = $title;
            $this->author = $author;
            $this->available = $available;
        }
        public function getCopy(): bool{
            if ($this->available < 1){
                return false;
            }else{
                $this->available--;
                return true;
            }
        }

        public function getIsbn():int{
            return $this->isbn;
        }
        public function getTitle():string{
            return $this->title;
        }
        public function getAuthor():string{
            return $this->author;
        }
        public function getAvailable():int{
            return $this->available;
        }

        public function addIsbn(int $isbn){
            $this->isbn = $isbn;
        }
        public function addTitle(string $title){
            $this->title = $title;
        }
        public function addAuthor(string $author){
            $this->isbn = $author;
        }
        public function addAvailable(int $available){
            $this->available = $available;
        }
        public function __toString() {
            $q = 1; 
            $result = '
            <h1 style="text-align:center">__toString function</h1>
            ';
            return $result;
        }
   }
?>
