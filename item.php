<?php
//item.php
class item {
    public $ItemName;
    public $ItemDescription;
    public $ItemPrice;

//constructor function
    function __construct($ItemName = '', $ItemDescription = '', $ItemPrice = 15.00) {
        $this->ItemName = $ItemName;
        $this->ItemDescription = $ItemDescription;
        $this->ItemPrice = $ItemPrice;
    }
}
?>
