<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CSV
 *
 * @author sorkiy
 */
class SearchFiles {

    public $path = 'logs/';
    public $pattern = '/\d{4}-\d{2}-\d{2}/';
    public $patternInclud = '/\d{2}/';
    public $patternFileName = '/\d{2}/';
    public $tree = array();

    function getDirNamesAndCheck($path = false, $pattern = false,$parent = '') {
        $path = $path ? $path : $this->path;
        $pattern = $pattern ? $pattern : $this->pattern;
        $names = scandir($path);
        foreach ($names as $key => $value) {
            if (is_dir($path . $value) && preg_match($pattern, $value) && $value != '.' && $value != '..') {                
                if ($pattern == $this->patternInclud) {                    
                    if ((int) $value <= 24) {
                        $result = $this->goodFile($value,$path.$value.'/');
                        if($this->goodFile($value,$path.$value.'/'))
                           $this->tree[$parent][$value] = $this->goodFile($value,$path.$value.'/');
                        $this->goodFile($value,$path.$value.'/');
                        
                    }
                } else {                   
                    $this->getDirNamesAndCheck($this->path.$value.'/', $this->patternInclud,$value);
                }
            }
        }
        return $this->tree;
    }

    function goodFile($parent, $path) {
        $return = array();
        $names = scandir($path);
        foreach ($names as $key => $value) {
            if (is_file($path . $value) && stripos($value, $parent) !== false && trim(file_get_contents($path. $value))) {                
                 $return[$path . $value] = $value;                    
                    
                }
            }
        
        return $return;
    }

}
