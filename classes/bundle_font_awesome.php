<?php

namespace font_awesome{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_font_awesome extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('font_awesome', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                
                $this->dom->head->add(new html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => "/adapt/font_awesome/font_awesome-{$this->version}/static/css/font-awesome.min.css")));
                
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>