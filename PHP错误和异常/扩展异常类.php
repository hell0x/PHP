<?php
calss MyException extends Exception{
   public errType = 'default';
   public function __construct($errType=''){
      $this->errType = $errType;
  }

}

try{
   thrown new MyException('an error');
}catch(MyException $err){
   echo $err->errType(); 
}catch(ErrorException $err){ 
   echo 'error !'; 
}catch(Exception $err){
   redirect('/error.php');
 }
?>