

<?php

class fac
{
    public $u = 34;
    public function __construct($u)
    {
        $i;      
        $res =1;
        for($i=$u; $i>1; $i--)
        {
            $res *= $i;
        }
            echo "The Factorial number <em>$u</em> is : "  ."<b>$res</b>";
    }
}
$obj = new fac(14);



?>