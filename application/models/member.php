<?php
class Member extends CI_Model {


    var $check=false; //Create a variable for checking if it is already member or not
    var $varified=false;// check if created member is varified or not

    public function validate(){
      // this function is used to validate all the input field in create member


    }
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
            $this->create_member();
      }
      }


      public function create_member(){

         //create member in db

        $this->validate()

         if (condition) {//check validation is sucessful or not if true create member else give eroor message.
            # code...
          
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




