<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
        /*
            析构函数(destructor)是用来释放对象所占用的系统资源的函数,在解放对象是会自动执行,
            不需要调用.常见释放动作有清除设置值,关闭文件,结束数据库连接,终端网络连接等.析构函数名为
            __destruct,没有参数,没有返回值
        */
        // class Employee{
        //     public $Name;
        //     //构造函数
        //     function __construct($Str){
        //         $this->Name = $Str;
        //         echo '已经创建名字为'.$this->Name.'的对象! ';
        //     }
        //     //析构函数
        //     function __destruct(){
        //         $this->Name = NULL;
        //         echo '这个对象已经被释放!';
        //     }
        // }
        // $Obj = new Employee('小红豆');//创建对象,自动执行构造函数
        // $Obj = NULL; //释放对象,自动执行析构函数



        /*
            ==:当两个对象隶属于相同类且有相同属性和值时会返回TRUE
            ==就是两个相同类中的实例的内容相同
            ===:当两个对象指向相同类的相同实例时会返回TRUE
            ===不仅内容相同并且是同一个实例    
        */
        // class Employee{
        //     public $Name;
        //     function __construct($Str){
        //         $this->Name = $Str;
        //     }
        // }
        // $Obj1 = new Employee('小红豆');
        // $Obj2 = new Employee('小红豆');
        // $Obj3 = $Obj1;
        // echo $Obj1 == $Obj2;//true
        // echo $Obj1 === $Obj2;//false
        // echo $Obj1 === $Obj3;//true


        /*
            PHP7中新增了匿名类(anonymous class).
            匿名类允许在没有指定类名的情况下创建对象.
        */
        // $Obj = new class('小红豆'){
        //     public $Name;
        //     function __construct($Str){
        //         $this->Name = $Str;
        //         echo '已经创建名字为'.$this->Name.'的对象!';
        //     }
        // }

        /*
            继承(inheritance):从现有的类创建新的类.
            子类可以继承父类的非私有成员,还可以加入新的成员重写(override)父类的方法.
        */

        /*
            设置成员的访问级别:
            在定义成员(class)时省略访问修饰关键词或使用var关键词,表示public
            public:能被任何程序代码访问,包括被继承
            private:只能被包含其定义的类访问,不能被继承
            protected:只能被包含其定义的类或其子类访问(用于重写),包括被继承
        */
        // class ParentClass{//定义父类
        //     public $Field1;
        //     private $Field2;
        //     protected $Field3;
        //     public function Method1(){} 
        //     private function Method2(){} 
        //     protected function Method3(){} 
        // }
        // class ChildClass extends ParentClass{
        //     public $Field4;
        //     private $Field5;
        //     protected $Field6;
        //     public function Method4(){} 
        //     private function Method5(){} 
        //     protected function Method6(){} 
        // }



        // 重写(override)是指子类将继承父类的方法重新定义,由此可以实现多态
        // class Patroll{
        //     public $Name;
        //     public function Payment($Hours,$PayRate){
        //         return $Hours * $PayRate;
        //     }
        // }
        // class BonusPayroll extends Patroll{
        //     public function Payment($Hours,$PayRate){
        //         //重写方法
        //         //return $Hours * $PayRate + 5000;
        //         //调用父类内被覆盖的方法
        //         //return parent::Payment($Hours,$PayRate) + 5000;
        //         //return Patroll::Payment($Hours,$PayRate) + 5000;
        //     }
        // }
        // $Obj1 = new Patroll();
        // $Obj2 = new BonusPayroll();
        // echo '尚未加上奖金的薪资为'.$Obj1->Payment(100,80).'<br>';
        // echo '加上奖金的薪资为'.$Obj2->Payment(100,80).'<br>';


        /*
            抽象方法(abstract Method),必须放在"抽象类"中,只有定义的部分,没有实现的部分必须由子类提供
            抽象类(abstract class),只有类的定义和部分实现,必须通过子类来实现或扩充其功能.
            抽象类只能被继承,不能被实例化.
        */
        // abstract class Payroll{//定义抽象类,因为抽象方法必须放在抽象类中
        //     public $Name;
        //     abstract public function Payment($Hours,$PayRate);//定义抽象方法
        // }
        // class BonusPayroll extends Payroll{
        //     public function Payment($Hours,$PayRate){
        //         return $Hours * $PayRate + 5000;
        //     }
        // }
        // $Obj = new BonusPayroll();
        // echo '加上奖金之后的薪资为'.$Obj->Payment(100,80).'<br>';


        /*
            如果子类没有自己的构造函数与析构函数,会继承父类的.
        */
        // class ParentClass{
        //     protected $Field1;
        //     function __construct($value){
        //         $this->Field1 = $value;
        //         echo '创建对象是成功将Field1的值设置为'.$this->Field1.'<br>';
        //     }
        //     function __destruct(){
        //         $this->Field1 = 0;
        //         echo '释放对象时成功将Field1的值设置为'.$this->Field1.'<br>';
        //     }
        // }
        // class ChildClass extends ParentClass{
        //     protected $Field2;
        // }
        // $MyObject = new ChildClass(100);
        // $MyObject = NULL;

        // class ParentClass{
        //     protected $Field1;
        //     function __construct($value){
        //         $this->Field1 = $value;
        //         echo '创建对象是成功将Field1的值设置为'.$this->Field1.'<br>';
        //     }
        //     function __destruct(){
        //         $this->Field1 = 0;
        //         echo '释放对象时成功将Field1的值设置为'.$this->Field1.'<br>';
        //     }
        // }
        // class ChildClass extends ParentClass{
        //     protected $Field2;
        //     function __construct($value){
        //         $this->Field2 = $value;
        //         echo '创建对象是成功将Field2的值设置为'.$this->Field2.'<br>';
        //     }
        //     function __destruct(){
        //         $this->Field2 = 0;
        //         echo '释放对象时成功将Field2的值设置为'.$this->Field2.'<br>';
        //     }
        // }
        // $MyObject = new ChildClass(100);
        // $MyObject = NULL;



        /*
            命名空间(namespace):一种命名方式,用来组织各个类,函数,常数等.它和这些元素的关系就像目录和文件的关系一样.
            作用:
            1.解决名称冲突的问题:当自己编写的php程序或内置或其他人编写的类,函数,常数发生名称冲突时,可以用命名空间解决
            2.提供设置别名的功能:当PHP程序中的类,函数,常数的名称太长或不易理解时,可以利用命名空间来设置简短易读的类名.
        */
 
    ?>

</body>
</html>