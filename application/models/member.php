<?php
class Member extends CI_Model {
   


    public var $check=false; //Create a variable for checking if it is already member or not
    public var $varified=false;// check if created member is varified or not
    public var $deleted=false;// check if member is alredy deleted or not

    public function validate(){
      // this function is used to validate all the input field in create member

       if($f_name == null || $f_name == '')
       {
        echo "first name is missing";
       }

       if($l_name == null || $l_name == '')
       {
        echo "last name is missing";
       }

       if($email == null || $email == '')
       {
        echo "email name is missing";
       }


    }


     public function delete() {// delete certain member
              check_deleted();
              if ($deleted==true) {
                echo "already deleted";

                # code...
              }
              else{
                $this->deleted = true;
              }
        }



    public function send_confirm_mail(){//send confirm mail

    } 
    public function check_confirmed_status(){
      if ($confirm=true) {
        //used for further acess of system
        # code...
      }
      else{
        echo "plese confirm email";
        $this->send_confirm_mail();
      }
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


      public function create_member($array){

         //create member in db
       


        $this->validate($array)

         if (condition is true) {//check validation is sucessful or not if true create member else give eroor message.
            # code...
          
            //
           $member= new member();// add all fields  like f_name,l_name and email into new member
           $this->send_confirm_mail();

         }



      }


      public function check_status($check){


         //retrive info from database to check if username exist or not


        if (condition) { //if found in database set check var  to true 

           # code...
        }
        return $member;
    


      }
      public function check_deleted(){
        //check if status is deleted or not if deleted return false
        //before checking status it should be checked if the username is there in back end or not
        $this->check_status();

         if ($member==null) {
          echo "not in database no need to delete";
           # code...
         }
         elseif ($deleted=true) {
          echo "already deleted no need to delete again";
           # code...
         }
         else{
          $deleted=false;//deleted status is false 
         }

      }
   }



}




