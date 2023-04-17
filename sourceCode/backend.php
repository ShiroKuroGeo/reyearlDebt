<?php
require("database.php");
class backend{

    public function doLogin($username,$password,$host){
        return $this->login($username,$password,$host);
    }
    public function doRegister($Fname,$Lname,$username,$email,$password,$role){
        return $this->register($Fname,$Lname,$username,$email,$password,$role);
    }

    //A function to be send to database
    //Login
    private function login($username,$password,$host){
        try {
            if ($this->checkLogin($username,$password)) {
                $db = new database();
                if ($db->getStatus()) {
                    $tmp = md5($password);
                    $stmt = $db->getCon()->prepare($this->loginQuery());
                    $stmt->execute(array($username,$tmp,$host));
                    $result = $stmt->fetch();
                    if ($result) {
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $tmp;
                        $db->closeConnection();
                        return $host;
                        // if($host == 1){
                        //     return 
                        // }
                    }else{
                        $db->closeConnection();
                        return "404";
                    }
                }else{
                    return "403";
                }
            } else {
                return "403";
            }
        } catch (PDOException $th) {
            return "501";
        }
    }
    //Register
    private function register($Fname,$Lname,$username,$email,$password,$role){
        try {
            if ($this->checkRegister($Fname,$Lname,$username,$email,$password,$role)) {
                $db = new database();
                if ($db->getStatus()){
                    $stmt = $db->getCon()->prepare($this->registerQuery());
                    $stmt->execute(array($Fname,$Lname,$username,$email,md5($password),$role,$this->getCurrentDate()));
                    $result = $stmt->fetch();
                    if (!$result) {
                        $db->closeConnection();
                        return "200";
                    }else{
                        $db->closeConnection();
                        return "404";
                    }
                }else{
                    return "403";
                }
            } else {
                return "403";
            }
        } catch (PDOException $th) {
            return "501";
        }
    }

    //Checking if it is valid or not
    //Register
    private function checkRegister($firstname, $lastname, $email, $password, $repassword){
        if($firstname != "" && $lastname != ""  && $email != "" && $password != "" && $repassword != ""){
            return true;
        }else{
            return false;
        }
    }
    private function checkLogin($email, $password){
        if($email != "" && $password != ""){
            return true;
        }else{
            return false;
        }
    }

    //QUERIES
    //Login
    private function loginQuery(){
        return "SELECT * FROM `tbl_userdebt` WHERE `username` = ? and `password` = ? and `role` = ?";
    }
    //Register
    private function registerQuery(){
        return "INSERT INTO `tbl_userdebt`(`firstname`, `lastname`, `username`, `email`, `password`, `role`, `date_create`) VALUES (?,?,?,?,?,?,?)";
    }
    //Other staff
    //Get the current date
    private function getCurrentDate(){
        return date("Y/m/d");
    }
}
?>