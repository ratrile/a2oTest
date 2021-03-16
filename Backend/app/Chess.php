<?php
    
namespace App;

class Chess{
    
  public function obstacle($x, $y, $posQueen,$data){
    $length = count($data);
    $res=0;
    $n=$data[0][0];
    for ($i4 = 2; $i4 < $length; $i4++) {
      $obsta =  explode(" ", $data[$i4]);
      if($obsta[0]==$x && $obsta[1]==$y){
        if($x<$posQueen[0])
           $res = -$x;
        if($x>$posQueen[0])
          $res = $x-$n;
        if($y<$posQueen[1])
          $res = -$y;
        if($y>$posQueen[1])
          $res = $y-$n;
      }
    }
    return $res;
  }
      public function queenMoves( $data ){
        $data = trim( $data );        
        $data   = explode("\n", $data );  
        $n = $data[0][0];  
        $queen = $data[1]; 
        $posQueen =  explode(" ",$queen);
        $x = $posQueen[0]-1;
        $y = $posQueen[1]-1;
        $mov = 0;
        $count =1;
        while (($n-1) > $count ) {
          $a=0;
          while ($a<8) {
            if(($n >= $x && $x > 0) && ($n >= $y && $y > 0)){
              $res = $this->obstacle($x,$y,$posQueen,$data);
              $mov=$mov+1+$res;
            }
            if($a>=0 && $a<2)
              $y = $y+$count;
            if($a>=2 && $a<4)
              $x = $x+$count;            
            if($a>=4 && $a<6)
              $y = $y-$count;
            if($a>=6 && $a<8)
              $x = $x-$count;
            $a++;
          }
          $x--;
          $y--;  
          $count++;
        }
        return $mov;  
    }
  }