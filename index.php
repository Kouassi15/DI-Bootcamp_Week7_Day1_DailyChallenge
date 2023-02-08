<?php
   
   class User
   {
    public $firstname;
    public $lastname;

    public function __construct($firstname,$lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    
    public function Hello()
    {
        echo 'Hello '.$this->firstname.' '.$this->lastname;
    }

    public function test()
    {
        $user = new User('Jonnie','Roe');
        $user->Hello();
    }

   }


   $user1=new User("Jonnie","Roe");

   
   $user1->test()
?>