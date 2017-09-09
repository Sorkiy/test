<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hat
 *
 * @author sorkiy
 */
class Navbar {

    //put your code here    
    public $cache = '';
    public $navbar = '';
    public $first = array(
        'a' => array('<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">', ' <span class="caret"></span></a>'),
        'li' => array('<li class="dropdown"><a href="#" onclick="getNavbar(this);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">', ' <span class="caret"></span></a>', '</li>'),
        'sub' => array('<li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">', ' <span class="caret"></span></a>', '</li>')        
    );
    public $cacheFileName = 'navbar';
    public $navbarSE = array('
        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Test</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" title="Test" >Test</a>
                </div>                
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">',        
        '
            </ul>
            <!-- Search -->            
                    <form action="index.php" id="cse-search-box"  class="navbar-form navbar-right" role="search">
                        <div class="form-group"> 
                            <input name="search" value="date" type="hidden">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">XXXX-XX-XX</span>  
  <input type="text" name="q" size="31" class="form-control" placeholder="XXXX-XX-XX" pattern="\d{4}-\d{2}-\d{2}" aria-describedby="basic-addon3" /> 
</div>                            

                                          
                        </div>
                        <button type="submit" class="btn btn-default"  name="sa">Search</button>
                    </form>
                    
                </div><!--/.nav-collapse -->
            </div>
        </nav>'
        
    );

    public function __construct() {
        
    }

    public function getNavbar() {           
        return $this->createNavbar();
    }

    public function createNavbar() {
        return $this->navbarSE[0] .  $this->navbarSE[1];
    }

    

   

    

}
