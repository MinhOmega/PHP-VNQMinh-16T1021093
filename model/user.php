<?php 
class User{
    var $userName;
    var $passWord;
    var $fullName;
    function User($userName,$passWord, $fullName){
        $this->userName= $userName;
        $this->passWord = $passWord;
        $this->fullName = $fullName;
   }
   /**
    * Xác thực người sử dụng
    * @param $userName string Tên đăng nhập
    * @param $passWord string mật khẩu
    * @return User hoặc null nếu không tồn tại
    */
    public static function authentication($userName, $passWord){
       if ($userName == "minhvo050298@gmail.com" && $passWord =="123") {
           # code...
           return new User($userName, $passWord, "Minh Vo");
       }
       else {
           return null;
       }
   }
}
?>