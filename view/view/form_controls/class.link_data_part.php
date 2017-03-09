<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.main_data_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 26.06.2014, 22:28:37 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include address_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.address_data_part.php');

/**
 * include date_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.date_data_part.php');

/**
 * include group_link_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.group_link_data_part.php');

/**
 * include private_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.private_data_part.php');

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/**
 * include time_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.time_data_part.php');

/* user defined includes */
// section 10-5-25--42--4259d17e:13f089b1d6e:-8000:0000000000000BB5-includes begin
// section 10-5-25--42--4259d17e:13f089b1d6e:-8000:0000000000000BB5-includes end

/* user defined constants */
// section 10-5-25--42--4259d17e:13f089b1d6e:-8000:0000000000000BB5-constants begin
// section 10-5-25--42--4259d17e:13f089b1d6e:-8000:0000000000000BB5-constants end

/**
 * Short description of class main_data_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class main_data_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute name_value
     *
     * @access private
     * @var String
     */
    private $name_value = null;

    /**
     * Short description of attribute date_data_part
     *
     * @access public
     * @var address_data_part
     */
    public $date_data_part = null;

    /**
     * Short description of attribute address_data_part
     *
     * @access public
     * @var address_data_part
     */
    public $address_data_part = null;

    /**
     * Short description of attribute private_data_part
     *
     * @access public
     * @var private_data_part
     */
    public $private_data_part = null;

    /**
     * Short description of attribute link_data_part
     *
     * @access public
     * @var group_link_data_part
     */
    public $link_data_part = null;

    /**
     * Short description of attribute time_data_part
     *
     * @access public
     * @var time_data_part
     */
    public $time_data_part = null;

    // --- OPERATIONS ---

    /**
     * #$this->name_value = $name_value;
     *
     * @access public
     * @author Bernd Schröder
     * @param  name_value
     * @version 1.0
     */
    public function set_name_value($name_value)
    {
        // section 127-0-0-1--39f6065c:13f14f30f19:-8000:0000000000000EAB begin
        // section 127-0-0-1--39f6065c:13f14f30f19:-8000:0000000000000EAB end
    }

    /**
     * #$name_element = new fbox_text_element();
     * #$name_element->set_label($this->language['C3_name']);
     * #$name_element->set_name("name");
     * #$name_element->set_value($this->name_value);
     * #
     * #return
     * #$name_element->get_element();
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_name_element()
    {
        // section -64--88--78-21--704b3cc0:13f508c26e4:-8000:0000000000000CDA begin
        // section -64--88--78-21--704b3cc0:13f508c26e4:-8000:0000000000000CDA end
    }

    /**
     * #$button = new send_reset_button();
     * #$button->set_send($this->language['C3_send_button']);
     * #$button->set_reset($this->language['C3_reset_button']);
     * #return $button->get_button();
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_button()
    {
        // section -64--88--78-21--704b3cc0:13f508c26e4:-8000:0000000000000CEB begin
        // section -64--88--78-21--704b3cc0:13f508c26e4:-8000:0000000000000CEB end
    }

    /**
     * #$this->date_data_part = $date_data_part;
     *
     * @access public
     * @author Bernd Schröder
     * @param  date_data_part
     * @version 1.0
     */
    public function set_date_data_part($date_data_part)
    {
        // section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002BBA begin
        // section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002BBA end
    }

    /**
     * #$this->address_data_part = $address_data_part;
     *
     * @access public
     * @author Bernd Schröder
     * @param  address_data_part
     * @version 1.0
     */
    public function set_address_data_part($address_data_part)
    {
        // section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002BC6 begin
        // section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002BC6 end
    }

    /**
     * #$this->private_data_part = $private_data_part;
     *
     * @access public
     * @author Bernd Schröder
     * @param  private_data_part
     */
    public function set_private_data_part($private_data_part)
    {
        // section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002BCF begin
        // section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002BCF end
    }

    /**
     * #$this->link_data_part = $link_data_part;
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  link_data_part
     */
    public function set_link_data_part($link_data_part)
    {
        // section -64--88--78-21-3afc44d4:142385ed04f:-8000:000000000000220F begin
        // section -64--88--78-21-3afc44d4:142385ed04f:-8000:000000000000220F end
    }

    /**
     * #$this->time_data_part = $time_data_part;
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  time_data_part
     */
    public function set_time_data_part($time_data_part)
    {
        // section -64--88--78-21--168c71cc:146d9a76158:-8000:000000000000108A begin
        // section -64--88--78-21--168c71cc:146d9a76158:-8000:000000000000108A end
    }

} /* end of class main_data_form */

?>