<?php

    class CesdeCatalogoPage{
        public $postType;
        public $fields;
        /**
         * Class constructor.
         */
        public function __construct($postType,$fields)
        {
            $this->fields = $fields;
            $this->postType =$postType;

        }
        public function init(){
            return  [$this->fields, $this->postType];
        }
        
    }
