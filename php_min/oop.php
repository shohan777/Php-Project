<?php

class first
{
    
    public $a = "Question: What is your name";
    public $b = "Answer: My name is shohan";
    public function tell()
    {
        echo $this->b;
    }
}
$o = new first;
echo $o->a."<br>";
$o->tell();

?>