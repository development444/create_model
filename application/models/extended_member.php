<?php
   class Create_member extends Member
   {
      
      function __construct(argument)
      {
         # code...
       
      }
function set_first_name($params){
if($params == '') {
                   throw new Exception('A first  name is required to create a showroom.');
            }


}
function set_last_name($params){
if($params == '') {
                   throw new Exception('A first  name is required to create a showroom.');
            }


}
function set_email($params){
if($params == '') {
                   throw new Exception('A first  name is required to create a showroom.');
            }


}

      public function create_member($array){

         //create member in db
       
 $this->check_status();

         
           
    

        $this->validate($array)

         if (condition is true) {//check validation is sucessful or not if true create member else give eroor message.

            # code...
          
            //
           if ($check=false) {//check  the condition 
         # code...

         // create member using database
           $member= new member();// add all fields  like f_name,l_name and email into new member
           $this->$first_name->array_key_exists('first_name', $params) ? $params['email'] : "";
            $this->$last_name->array_key_exists('last_name', $params) ? $params['last_name'] : "";
             $this->$email->array_key_exists('email', $params) ? $params['email'] : "";
           $this->send_confirm_mail();

         }
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