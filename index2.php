<?php
interface Operations
{
    public function calculate($operation1,$operation2);
}
class Sum implements Operations
{
    public function calculate($operation1,$operation2){
        return $operation1+ $operation2;
    }
}
class Minus implements Operations{
    public function calculate($operation1,$operation2){
        return $operation1- $operation2;
    }
    
}
class Multiply implements Operations{
    public function calculate($operation1,$operation2){
        return $operation1* $operation2;
    }

}

class Divide implements Operations{
    public function calculate($operation1,$operation2){
        return $operation1/$operation2;
    }
}
class Factorial implements Operations {
    public function calculate($operation1, $operation2 = null) {
        if ($operation1 == 0) {
            return 1;
        } else {
            return $operation1 * $this->calculate($operation1 - 1);
        }
    }
}

class Fibonacci implements Operations{
    public function calculate($operation1,$operation2=null){
        $f=$operation1;
        $fib=[0,1];
        for( $i= 2; $i<=$f; $i++ ){
            $fib[$i] = $fib[$i-1]+$fib[$i-2];
        }
        return $fib[$f];
    }
}
class Calculator{
    private $operation;
public function setOperation(Operations $operation){
    $this->operation=$operation;
}

public function calculate($operation1, $operation2=null){
    return $this->operation->calculate($operation1,$operation2);
}
}

echo "Калькулятор<br>Введите ваш выбор:<br>1.Сумма<br>2.Разность<br>3.Произведение<br>4.Деление<br>5.Факториал<br>6.Фибоначчи<br>0.Выход<br>";

$a = htmlspecialchars($_GET['a']);
$b=htmlspecialchars($_GET['b']); 
$calc = new Calculator();  


    $choice = htmlspecialchars($_REQUEST['choice']);
    switch ( $choice ) { 
    case 1:
            $calc->setOperation(new Sum());
            $res = $calc->calculate($a,$b);
            echo "Сумма=";
        break;
        
    case 2:
            $calc->setOperation(new Minus());
            $res = $calc->calculate($a,$b);
            echo "Разность=";
        break;
        
    case 3:

            $calc->setOperation(new Multiply());
            $res = $calc->calculate($a,$b);
            echo "Произ.=";
    
        break;

    case 4:

            $calc->setOperation(new Divide());
            $res = $calc->calculate($a,$b);
            echo "Деление=";
        break;
        case 5:
    
                $calc->setOperation(new Factorial());
                $res = $calc->calculate($a);
                echo "Факториал=";
            break;
    case 6:
            $calc->setOperation(new Fibonacci());
            $res = $calc->calculate($a);
            echo "Фиббоначи=";
        break;
        case 0:
            echo "Программа завершена.\n";
            exit; 
            break;
    default:
    echo "Ошибка: Неверный выбор операции\n";
    break;
   
    
    }

    echo $res;

