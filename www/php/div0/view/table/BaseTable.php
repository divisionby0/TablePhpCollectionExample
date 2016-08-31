<?php

class BaseTable {

    private $data;
    private $htmlContent = '';
    private $prefix;
    private $postfix;

    public function __construct($data){

        if($data && $data->size()>0){
            $this->data = $data;
            $this->createPrefixAndPostfix();
            $this->createContent();
            $this->draw();
        }
        else{
            Logger::logError('Empty table data');
        }
    }

    private function createPrefixAndPostfix(){
        $this->prefix = '<table id="myTable">';
        $this->postfix = '</table>';
    }
    private function createContent(){
        $this->createColumnLabels();

        $this->createContentFromData();
    }

    protected function createContentFromData(){
        $dataIterator = $this->data->getIterator();
        while($dataIterator->hasNext()){
            $row = $dataIterator->next();
            $this->createRow($row);
        }
    }

    protected function createRow($row){
        $this->htmlContent = $this->htmlContent.'<tr>';
        $rowIterator = $row->getIterator();
        $columnIndex = -1;
        while($rowIterator->hasNext()){
            $columnIndex+=1;
            $value = $rowIterator->next();
            $itemRenderer = new TextInputItemRenderer('id', $value, $row->getId(), $columnIndex);

            $rendererHtml = $itemRenderer->getHTML();
            $this->htmlContent = $this->htmlContent.$rendererHtml;
        }

        $this->htmlContent = $this->htmlContent.'</tr>';
    }


    protected function createColumnLabels(){
        $this->htmlContent = $this->htmlContent.'<tr>';
        $this->htmlContent = $this->htmlContent.'<th>Column 1</th>';
        $this->htmlContent = $this->htmlContent.'<th>Column 2</th>';
        $this->htmlContent = $this->htmlContent.'<th>Column 3</th>';
        $this->htmlContent = $this->htmlContent.'<th>Column 4</th>';
        $this->htmlContent = $this->htmlContent.'</tr>';
    }

    private function draw(){
        echo $this->prefix.$this->htmlContent.$this->postfix;
    }
} 