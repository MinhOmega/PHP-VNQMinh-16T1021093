
    <?php
    include_once("header.php")
    ?>
    <?php 
    include_once("nav.php")?>
    <form action="" method="get">
        <input placeholder="So thu nhat" type="text" name="num1" id="" value="<?php echo $_GET["num1"] ?? "" ?>">
        <input placeholder="So thu 2" type="text" name="num2" id="" value="<?php echo $_GET["num2"] ?? "" ?>">
        <select name="operator" id="">
            <option value="none">Vui long chon phep tinh</option>
            <option <?php echo $_GET["operator"] == "add" ? "selected" : ""; ?> value="add">Cong</option>
            <option <?php echo $_GET["operator"] == "subtract" ? "selected" : ""; ?> value="subtract">Tru</option>
            <option <?php echo $_GET["operator"] == "multiply" ? "selected" : ""; ?> value="multiply">Nhan</option>
            <option <?php echo $_GET["operator"] == "divide" ? "selected" : ""; ?> value="divide">Chia</option>
        </select>
        <button name="btnCalculate" type="submit" value="1">Tinh toan</button>
    </form>
    <?php
    if (isset($_GET["btnCalculate"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operator = $_GET["operator"];
        $sign = "";
        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                $sign = "+";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                $sign = "-";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                $sign = "*";
                break;
            case 'divide':
                $result = $num1 / $num2;
                $sign = ":";
                break;
            default:
                $result = "Vui long chon phep tinh";
        }
        //$result = $num1 + $num2;
        echo "<h3>Ket qua " . $num1 . $sign . $num2 . " la " . $result . "<h3>";
    }
    ?>
<?php
    include_once("footer.php")
    ?>