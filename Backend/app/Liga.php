<?php
    
namespace App;

class Liga{
    
    public $data = array();         
    public $result = "";
    public $category  = array();
    public $game ;
    

    public function LoadValue( $string_data ){
        $string_data = trim( $string_data );        
        $this->data   = explode("\n", $string_data );                        
    }

     public function isCategory( $value ){
         return preg_match_all("/\d/", $value);
     }
    

    public function Champion( $data ) {
            $length = count( $data );            

           $team = array();

          for ($i=0; $i < $length; $i++) { 
               $data[$i] = trim($data[$i]);                
               $post = $i; 
               $cant = 0;                

              if( $this->isCategory( $data[$i] ) === 0  ){
                   $this->category[] = trim($data[$i]);
                   $post ++;
                   $team = [];     
              
  
                      while( preg_match( "/FIN/" , $data[$post]) === 0 ){				                            
                              $game = explode(" ", $data[$post]);

                         if (!array_key_exists($game[0], $team)) {
                             $team[$game[0]] = 0;				   
                          }
                          if (!array_key_exists($game[2], $team)) {
                              $team[$game[2]] = 0;				   
                          }
                            if($game[1] > $game[3]){
                                $team[$game[0]] = $team[$game[0]] + 2 ;
                                $team[$game[2]] = $team[$game[2]] + 1 ;
                            }else{
                                $team[$game[0]] = $team[$game[0]] + 1 ;
                                $team[$game[2]] = $team[$game[2]] + 2 ;
                            }
                               $post ++;
                               $cant++;			
                         }
                        

                         if(preg_match( "/FIN/" , $data[$post]) === 1){		
                             
                                arsort( $team);		
                                $key1 = key(array_slice($team, 0, 1, true));  
                                $key2 = key(array_slice($team, 1, 1, true));
                                if( $team[$key1] === $team[$key2])
                                     $resp='empate';
                                     else
                                     $resp = $key1;
                                $resp4 = (count($team) * (count($team)-1)-$cant);
                                $this->result .=  $resp." ".$resp4."   ";
                              
                              

                            }
                            
                         
                      $i = $post;
                
    
            }
       
         }

     return $this->result;
    }  

}