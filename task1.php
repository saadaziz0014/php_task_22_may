<html>

<body>
    <?php declare(strict_types=1);
    class Calculator
    {
        private int $num1;
        private int $num2;
        private string $operator;

        function __construct()
        {
            $this->num1 = 0;
            $this->num2 = 0;
            $this->operator = "$"; //assign invalid operator first
        }

        function calculate_result(int $n1, int $n2, string $op)
        {
            $this->num1 = $n1;
            $this->num2 = $n2;
            $this->operator = $op;

            switch ($this->operator) {
                case "+":
                    return $this->num1 + $this->num2;
                case "-":
                    return $this->num1 - $this->num2;
                case "*":
                    return $this->num1 * $this->num2;
                case '/':
                    if ($this->num2 == 0) {
                        return -1;
                    }
                    return $this->num1 / $this->num2;
                default:
                    return 0;
            }
        }
    }

    $myObject = new Calculator();
    echo $myObject->calculate_result(5, 3, "*") . '<br>';
    echo $myObject->calculate_result(1, 0, "/") . '<br>';
    ?>
</body>

</html>