
    <?php
    
    
    session_start();
    include_once("model/user.php") ;
        // if(!unset($_SESSION["user"])){
        //     header("location:login.php");
        // }
        if(!isset($_SESSION["user"]))
            header("location:login.php");
        include_once("header.php")
    ?>
    
    <?php 
        include_once("nav.php")
        
    ?>
    <?php 
    /**
     * 
     */
    // mã php trang chủ
    $user = unserialize($_SESSION["user"]);
    echo "Hello " . $user->fullName;
    
    ?>
   
    <?php 
        include_once("footer.php")
    ?>
