<?php
namespace App\model;
use App\database\connection;
require __DIR__.'/../../vendor/autoload.php';



class User
{

    private $username;
    private $fullname;
    private $email;
    private $password;
    private $phone;
    private $conn;

    public function __construct($username,$fullname,$email,$password,$phone){
      
         
         $this->username=$username; 
         $this->fullname=$fullname; 
         $this->email=$email; 
         $this->password=$password;
         $this->phone=$phone;

         $this->conn = Connection::connect();
    }

    private function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
     }
     
     public function getPassword() {
         return $this->password;
    }
     // Getter 
     public function getUsername() {
        return $this->username;
    }

    public function getFullname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }
    public function getPhone() {
        return $this->phone;
    }
// Setter 

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setFullname($lastname) {
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

     public function create() {
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO `users`(`username`, `fullname`, `email`, `password`, `phone`) VALUES (:username, :fullname, :email, :password, :phone)";
    
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':fullname', $this->fullname);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':phone', $this->phone);


        
        $resultUser = $stmt->execute();

        if ($resultUser) {

            $lastUserId = $this->conn->lastInsertId();
    
            // Role insertion
            $queryRole = "INSERT INTO `users_role`(`users_id`, `role_id`) VALUES (:users_id, 5)";
             
            $stmtRole = $this->conn->prepare($queryRole);
            $stmtRole->bindParam(':users_id',$lastUserId);
    
            $resultRole = $stmtRole->execute();
    
            if ($resultRole) {
                
                return true;
            } else {
                echo "Error adding user role";
            }
        } else {
            echo "Error adding user";
        }
    
        return false;
    }
    
    
    
    

    public function findUserByEmail() {
        $sql = "SELECT * FROM users WHERE email = :email";
    
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $row;
    }
    

    
   
}



