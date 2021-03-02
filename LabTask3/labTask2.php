<?php
class MyCircle{
    private $radious;
   
   
    public function __construct($radious)
    {
        $this->radious = 2;
        $this->radious =$radious;
    }
    
    public function __destruct()
    {
        echo "destructor";
    }
    public function setRadious($radious)
    {
        $this->radious = 2;
        $this->radious = $radious;
    }
    public function getRadious($radious)
    {
       return $this->radious;
    }
    public function getArea()
    {
        return pi()*$this->radious*$this->radious;
    }
    public function toString()
    {
        echo "<br>";
        return "your area: " . (pi()*$this->radious*$this->radious);
    }

}
$cicle1=new MyCircle(3);

echo $cicle1->getArea();

echo $cicle1->toString();
?>