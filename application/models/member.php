<?php
class Member extends CI_Model {


    var $check=false; //Create a variable for checking is already member or not
    var $varified=false;// check if created member is varified or not
   public /**
   * 
   */
   class Create_member extends Member
   {
      
      function __construct(argument)
      {
         # code...
        $this->check_status();

          if ($check=false) {//check  the condition 
         # code...

         // create member using database
            $this->create_member;
      }
      }


      public function create_member(){
         //create member in db

         if (condition) {//check validation is sucessful or not
            # code...
            //1. username should be of more than 4 character and les than 12
            //2. no field should be blank or empty
            //

         }


      }


      public function check_status($check){

         //retrive info from database to check if username exist or not


        if (condition) { //if found in database set check var  to true 

           # code...
        }
        return $check;
    


      }
   }



}




