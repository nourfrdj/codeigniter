<?php
class page extends CI_Controller {

    public  function  view ($page='home' ) 
    { 
            if  (  !  file_exists ( APPPATH .'views/pages/'. $page .'.php' )) 
            { 
               
                    // Oups, nous n'avons pas de page pour ça! 
                    show_404 (); 
            } 
    
            $data [ 'title' ]  =  ucfirst ( $page );  // Mettre en majuscule la première lettre 
    
            $this -> load -> view ( 'templates/header' ,  $data );
            $this -> load -> view ( 'pages/'. $page ,  $data ); 
            $this -> load -> view ( 'templates/footer' ,  $data ); 
    }
}