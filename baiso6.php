<?php


session_start();
include_once("model/user.php");
// if(!unset($_SESSION["user"])){
//     header("location:login.php");
// }
if (!isset($_SESSION["user"]))
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


?>
<button class="btn btn-danger" onclick="testAjax();" type="button">Test Javascrip</button>
<!-- <button class="btn btn-danger" onclick="lsbook();" type="button">List Book</button> -->
<div id="contentAjax">


</div>
<?php
include_once("footer.php")
?>
<script>
    function testAjax() {
        // var a = "xin chao";
        // //alert(a);
        // var contentElement = document.getElementById("contentAjax");
        // console.log(contentElement);
        // contentElement.innerHTML = a;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contentAjax").innerHTML = this.responseText;
                // document.getElementById("contentAjax").innerHTML = str;
            }
        };
        xhttp.open("GET", "testajax.php?username=abc", true);
        xhttp.send();
    }
</script>
<script>
    function lsbook() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
                document.getElementById("contentAjax").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "testajax.php", true);
        xhttp.send();
    }
</script>