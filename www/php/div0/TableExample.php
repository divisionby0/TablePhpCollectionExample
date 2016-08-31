<?php


class TableExample {
    private $map;
    private $mapIterator;

    private $row1_id = 'row_1';
    private $row2_id = 'row_2';
    private $row3_id = 'row_3';
    private $row4_id = 'row_4';

    public function __construct(){
        $this->map = new Map();
        $this->createRows();
        new BaseTable('myTable', $this->map);
    }

    private function createRows(){
        $row_1 = new Map();
        $row_1->setId($this->row1_id);

        $row_2 = new Map();
        $row_2->setId($this->row2_id);

        $row_3 = new Map();
        $row_3->setId($this->row3_id);

        $row_4 = new Map();
        $row_4->setId($this->row4_id);

        $this->map->add($row_1->getId(), $row_1);
        $this->map->add($row_2->getId(), $row_2);
        $this->map->add($row_3->getId(), $row_3);
        $this->map->add($row_4->getId(), $row_4);

        $this->fillRows();
    }

    private function getMapIterator(){
        $this->mapIterator = $this->map->getIterator();
    }

    private function fillRows(){
        $this->getMapIterator();

        while($this->mapIterator->hasNext()){
            $row = $this->mapIterator->next();
            $rowId = $row->getId();

            for($i=0; $i<4; $i++){
                $key = 'column_'.$i;
                $value = $rowId.'_value_'.$i;
                $row->add($key, $value);
            }
        }
    }
} 