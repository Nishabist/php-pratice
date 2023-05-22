<?php
class Book {
  public $Authorname;
  public $subject;
  public function __construct($Authorname, $subject) {
    $this->Authorname = $Authorname;
    $this->subject = $subject;
  }
  public function intro() {
    echo "The author is {$this->Authorname} and the book is {$this->subject}.";
  }
}

// Physics is inherited from Book
class Physics extends Book {

}
$physics = new Physics("Physics", "Dr.John");

$physics->intro();
?>