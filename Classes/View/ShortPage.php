<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShortPage
 *
 * @author sorkiy
 */
class ShortPage extends Template {
    
    public function printPage($nav) {

        $html = $this->images;
        $this->setContent($html);
    }
}
