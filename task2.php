<html>

<body>
    <?php
    function divByThree($arr)
    {
        $counter = 0;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] >= 300) {
                return 0;
            } else if ($arr[$i] % 3 == 0) {
                $counter++;
            }
        }
        return $counter;
    }
    $arr1 = array(3, 4, 5, 7, 8);
    echo divByThree($arr1) . '<br>';
    $arr2 = array(300, 0, 3);
    echo divByThree($arr2) . '<br>';
    ?>
</body>

</html>