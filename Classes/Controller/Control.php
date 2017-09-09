<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Control
 *
 * @author sorkiy
 */
class Control {

    //put your code here

    public function __construct() {

        $this->role();
    }

    public function role() {
        $searchFiles = new SearchFiles();
        $tree = $searchFiles->getDirNamesAndCheck();
        switch (true) {
            case $this->existGet('search') && $_GET['search'] == 'date' && $this->existGet('q'):
                $content = 'Not found';
                if(isset($tree[trim($_GET['q'])])){
                    $page = new ShortPage($tree[trim($_GET['q'])], false);
                $content = $page->getContent();
                }


                echo $content;


                die();
                break;

            default:
                

                $page = new Template($searchFiles->getDirNamesAndCheck(), false);
                $content = $page->getContent();


                echo $content;

                break;
        }
    }

    public function existGet($param) {
        return isset($_GET[$param]) && (trim($_GET[$param]) != '');
    }

}
