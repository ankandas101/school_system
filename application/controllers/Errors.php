<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : Biddaloy PRO
 * @version : 5.0
 * @developed by : Ankan Das
 * @support : ramomcoder@yahoo.com
 * @author url :  ankandas.me
 * @filename : Errors.php
 * @copyright : Reserved RamomCoder Team
 */

class Errors extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('errors/error_404_message.php');
    }
}
