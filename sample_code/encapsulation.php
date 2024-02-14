<?php
class EncapsulationExample {
    private $data;

    public function setData($value) {
        $this->data = $value;
    }

    public function getData() {
        return $this->data;
    }
}

?>