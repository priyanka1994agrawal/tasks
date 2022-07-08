<?php

/**
 * foobar class
 */
class foobar{
    /**
     * foobar method return number, string
     */
    public function foobar(){
        $str='';
        for($i=1;$i<=100;$i++){
            if($i%3==0 && $i%5==0){
                $str .= 'foobar';
            }elseif($i%3==0){
                $str .= 'foo';
            }elseif($i%5==0){
                $str .= 'bar';
            }else{
                $str .= $i;
            }
            if($i!=100){
                $str .= ', ';
            }
        }
        return $str;
    }
}

// create an object of foobar class
$foobar=new foobar();
// calling foobar method
echo $foobar->foobar();
