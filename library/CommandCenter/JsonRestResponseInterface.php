<?php
namespace CommandCenter;

interface JsonRestResponseInterface {    
    public function fromJsonResponse($response);    
}