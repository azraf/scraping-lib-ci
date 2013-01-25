<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scraper extends CI_Controller {
    
    public function __construct()
    {        
        parent::__construct();
    }

    public function index()
    {
        $data = array();

        if(isset($_GET['url']))
        {
            $data['url'] = trim($_GET['url']);
            if(!empty( $data['url']))
            {
                $this->load->library('scraping');

        //       $data['page'] = $this->scraping->page($url); // to scrape simple webpages
                $data['page'] = $this->scraping->shDom($data['url']); // to scrape complex webpages
            }else{
                $data['notice'] = 'URL is empty!!!';
            }
        }
        $this->load->view('dashboard', $data);
    }
}
