<?php
class Students{
    public $name;
    public $city;
    // function __construct($name, $city){
    //     $this->name = $name;
    //     $this->city = $city;
    // }
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}
$stud1=new Students();
$stud2=new Students();
$stud1->set_name("Pratham");
$stud2->set_name("Pablo");

echo$stud1->get_name();
echo$stud2->get_name();

?>