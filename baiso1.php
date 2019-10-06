    <?php
    include_once("header.php")
    ?>
    <div style="text-align:center"><span>Helllo PHP</span></div>
    <?php
    define('PI', '3.14');
    /**
     * Tinh dien tich hinh tron
     * @param $banKinh Ban kinh hinh tron
     * @return Dientichhinhtrong tich hinh tron co ban kinh la $banKinh
     */
    function dienTichHinhTron($banKinh)
    {
        $s = pi() * pow($banKinh, 2);
        return $s;
    }
    function sum($n)
    {
        $s = 0;
        for ($i = 0; $i < $n; $i++) {
            $s += $i;
        }

        return $s;
    }
    function displayToday()
    {
        $dayOfWeek = [
            "Sun",
            "Mon",
            "Tue",
            "Wed",
            "Thu",
            "Fri",
            "sat",
        ];
        $day = date("w");
        return $dayOfWeek[$day];
        //var_dump($day);
    }
    echo "hello";
    $a = 5;
    $b = 6;
    $c = $a + $b;
    echo "<h3>ket qua cua phep tinh la " . $c . "</h3>";
    $c = "hello";
    echo "<br>";
    echo "$c";
    echo '$c';
    echo "<br>";

    $r = 5;
    $s = dienTichHinhTron($r);
    echo "ket qua la $s";
    $n = 6;
    $tong = sum($n);
    echo "tong cua n so dau tien la $tong";
    echo "hom nay la" . displayToday();

    ?>
    <?php
    include_once("footer.php")
    ?>