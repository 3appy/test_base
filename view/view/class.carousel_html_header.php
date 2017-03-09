<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.carousel_html_header.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 19.07.2015, 20:04:07 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-30-49-58--22dd6f2a:14dd1e356a7:-8000:0000000000001361-includes begin
// section 10-30-49-58--22dd6f2a:14dd1e356a7:-8000:0000000000001361-includes end

/* user defined constants */
// section 10-30-49-58--22dd6f2a:14dd1e356a7:-8000:0000000000001361-constants begin
// section 10-30-49-58--22dd6f2a:14dd1e356a7:-8000:0000000000001361-constants end

/**
 * Short description of class carousel_html_header
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class carousel_html_header
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_representation()
    {
     return
     "<!DOCTYPE html>".
     "<html lang=\"en\">".
     "<head>".
     "<meta charset=\"utf-8\"/>".
     "<title>3appy</title>" .
     
     "<!-- the icon on the top left position -->" .
     "<link rel=\"shortcut icon\"" .
     "href=\"http://www.3appy.com/view/view/images/favicon.ico\" />" .
     
     "<!-- Mobile viewport optimisation -->" .
     "<meta name=\"viewport\" content=\"width=device-width," .
     "initial-scale=1.0\"/>" .
     
     "<!-- (en) Add your meta data here -->" .
     "<link href=\"../../css/skolenet.css\" rel=\"stylesheet\"". 
     "type=\"text/css\"/>" .
     
     "<!--[if lte IE 7]>" .
     "<link href=\"../yaml/core/iehacks.css\" rel=\"stylesheet\" ".
     "type=\"text/css\" />" .
     "<![endif]-->" .
     
     "<!--[if lt IE 9]>" .
     "<script src=\"../lib/html5shiv/html5shiv.js\"></script>" .
     "<![endif]-->" .
     
     "<!-- OWL carousel -->" . 
     "<!-- Important Owl stylesheet -->" .
     "<link rel=\"stylesheet\" href=\"../../css/owl/owl.carousel.css\">" .
      
     "<!-- Default Theme -->" .
     "<link rel=\"stylesheet\" href=\"../../css/owl/owl.theme.css\">" .
      
     "<!-- jQuery 1.7+ -->" .
     "<script src=\"../../lib/jquery-1.10.1.min.js\"></script>" .
      
     "<!-- Include js plugin -->" .
     "<script src=\"../../css/owl/owl.carousel.js\"></script>" .
     
     "<script>" .
     "$(document).ready(function()" .
     "{" .
     "$(\"#owl-demo\").owlCarousel(" .
     "{" .
     "navigation : true," .
     "slideSpeed : 200," .
     "paginationSpeed : 300," .
     "autoPlay: true," .
     "singleItem:true " .
     "});" .
     "});" .
     "</script>" .
     "<!-- Ende OWL carousel -->" .
     
     "</head>" .
     
     "<body>";
    }
}?>