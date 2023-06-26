<?php
 class Auth extends ConnectionString{
 

    function SignUp($email, $password, $username){
     // sql statement checking if users exist
     $checkuser = "SELECT * FROM users WHERE email = ?";
    $stmt_user =  $this->Connection()->prepare($checkuser);
    $stmt_user->execute([$email]);
    $user_row =  $stmt_user->fetchAll();
     if(count($user_row) > 0){
        return  array(['message'=> "user already exist"], ['status' => 401]);
        ;
    }else{
        $sql = "INSERT INTO users(email, password, username) VALUES (?, ?, ?)";
        $stmt = $this->Connection()->prepare($sql);
        $stmt->execute([$email, $password, $username]);
        return  array(['message'=> "Account created please login to proceed"], ['status' => 200]);
    }

    }



  function Read(){
    $sql = "SELECT * FROM users";
    $stmt = $this->Connection()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return  array(['message'=> "get user"], ['status' => 200], ['res'=> $result]);
  }
     



    function SignIn($email, $password){
        $sql = "SELECT * FROM users WHERE email =?";
       $stmt =  $this->Connection()->prepare($sql);
       $stmt->execute([$email]);
        $rows =  $stmt->fetchAll();
        if(count($rows) > 0){
            if($rows[0]['password'] == $password){
              return  array(['message'=> "sign in successfull"], ['status' => 200], ['auth'=> "true"], ['result' => $rows]);
            }else{
              return  array(['message'=> "failed to login check username or password"], ['status' => 401], ['auth'=> "false"]);

            }

        }else{
            return  array(['message'=> "account does not exist"], ['status' => 404], ['auth'=> "false"]);
        }
  
      }
      
   

 }


 

?>