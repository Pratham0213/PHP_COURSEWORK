<?php
class Test
{
    public $regid;
    public $name;
    private $gender💀;
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name($name)
    {
        return $this->name;
    }
}
?>
<?php
class Fruit
{
    public $name;
    public $color;
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>