<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SearchEngine;

/**
 * Description of DocxParser
 *
 * @author adriwonkenobe
 */
class DocxParser extends Parser {

    use TextParserTrait;
    
    private $parser;
    protected static $type = 'docx';

    protected function getParser() {
        if (!isset($this->parser)) {
            return $this->parser  = \PhpOffice\PhpWord\IOFactory::createReader('Word2007');
        }
        return $this->parser;
    }        

}
