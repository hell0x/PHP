<?php
class Exception{

	protected string $message;
	protected int $code;
	protected string $file;
	protected int $line;

	public __construct($message = "", int $code = 0, $previous = NULL){}
	final public string getMessage(void){}			//获取异常消息
	final public Throwable getPrevious(void){}		//返回异常链中的前一个异常
	final public int getCode(void){}				//获取异常代码
	final public string getFile(void){}				//创建异常时的程序文件名称
	final public int getLine(void){}				//获取创建异常所在文件的行号
	final public array getTrace(void){}				//获取异常追踪信息
	final public string getTraceAsString(void){}	//获取字符串类型的异常追踪信息
	public string __toString(void){}				//将异常对象转换为字符串
	final private void __clone(void){}				//异常克隆
}
?>