<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Template
 *
 * @author sorkiy
 */
class Template extends TemplatePage {

    public $images = '';
   

    public function __construct($tree, $domens) {
        //die('<pre>' . var_dump(array_rand($domens, 5)) . '</pre>');
        $navbar = new Navbar();
        $this->classShowModal = 'Test';
        $this->ariaLabelledby = 'Test logs';
        $this->setMedia($tree);
        $this->printPage($navbar->getNavbar(false));
    }

    public function setMedia($tree) {
        $images = '';
        if ($tree) {
            $this->arrayLoop($tree);
           }
        
    }
public function arrayLoop($array) {
    foreach ($array as $key => $value) {       
                if(is_array($value)){
                    $this->images .= '<ul class="list-group"><li class="list-group-item">'.$key;
                    $this->arrayLoop($value);
                    $this->images .= '</li></ul>';
                }
                else
                     $this->images .= '<ul class="list-group"><li class="list-group-item"><a href="'.$key.'">'.$value.'</a></li></ul>';
                    
                
            }
    
    
}
    public function printPage($nav) {


        $html = <<<HTML
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Test</title>
        

        <!-- Bootstrap core CSS -->

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <!-- On Scroll Animations -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom styles for this template -->
       
         <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    
                  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     
    <![endif]-->

    </head>
    <body class="bg-light-green" data-spy="scroll" data-target="#navbar">

  <!-- Modal -->
        <div class="modal fade" id="hotels_of_USA" tabindex="-1" role="dialog" aria-labelledby="$this->ariaLabelledby">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" id="Hotel_of_USA">Hotels in the USA.</h3><small>Diagram of regions, divisions, US states</small>
                    </div>
                    <div class="modal-body">
                        <div class="thumbnail">
                            <img  class="img-rounded" id="Photos_of_hotel_of_USA" src="" alt="Photos of hotels in the USA" title="Snapshot of hotels in the USA">
                            <div class="caption">
                                <h4>Hotels in the USA</h4>
                                                              
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
                    </div>
                </div>
            </div>
        </div>


      $nav

        <div class="container theme-showcase" role="main">            
            
                <h2>All files and folders</h2>
                <br>
                <div id="alert" class="alert alert-success" role="alert"></div>
                <br>
                $this->images
              
   <br>  
         
        </div> <!-- /container -->

 <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
    var classShowModal = "$this->classShowModal";
</script>
                 <script src="js/script.js"></script>
    </body>
</html>
HTML;
        $this->setContent($html);
    }

}
