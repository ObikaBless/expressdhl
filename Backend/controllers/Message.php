<?php
class Message extends ConnectionString{
    //crd

    // access modifiers 
    public function Read( $receiverID, $userID){
        $sqlr = "SELECT * FROM messagetable where receiverID=? AND userID=?";
        $stmtr = $this->Connection()->prepare($sqlr);
       $stmtr->execute([$receiverID, $userID]);
        $messages =  $stmtr->fetchAll();
        return  array(['message'=> "message sent"], ['status' => 200], ['messages'=> $messages]);



    }


   public function Send($message, $userID, $receiverID, $bluetick){
    $sql = "INSERT INTO messagetable (message, userID, receiverID, recieved_at ) VALUES(?, ?, ?, ?)";

    if(htmlspecialchars(trim(!empty($message)))){
        $stmt =  $this->Connection()->prepare($sql);
        $stmt->execute([$message, $userID, $receiverID, $bluetick]);
      return  $this->Read($receiverID, $userID);
    }
    
   }

  


}

$msg =  new Message();

