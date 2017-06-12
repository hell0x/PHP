<?php
/**
 * 简单工厂模式
 */
class Operation{

	protected $numa;
    protected $numb;
    public function __construct($a,$b){
        $this->numa = $a;
        $this->numb = $b;
    }

	//静态方法，通过接受不同的参数生成不同的对象实例
	public static function create($operation, $a, $b){
		switch ($operation){
			case '+':
				return new Operationadd($a, $b);
				break;
			case '-':
				return new Operationminus($a, $b);
				break;
			default:
				#code...
		}
	}
}

//加法
class Operationadd extends Operation{
	public function doing(){
		return $this->numa + $this->numb;
	}
}

//减法
class Operationminus extends Operation{
	public function doing(){
		return $this->numa - $this->numb;
	}
}

$test = Operation::create('+',2,56);
echo $test->doing();
?>