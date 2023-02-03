<?php

/* ders 2 cevap */

abstract class selam
{
    abstract public function selamver($deger);
}

interface onaSelamVer
{
    public function onaSelamVer($deger);
}

interface bunaSelamVer
{
    public function bunaSelamVer($deger);
}

interface sunaSelamVer
{
    public function sunaSelamVer($deger);
}


class test extends selam implements onaSelamVer, bunaSelamVer, sunaSelamVer
{
    public function selamver($deger)
    {
        
    }


    public function onaSelamVer($deger)
    {
        
    }
    public function bunaSelamVer($deger)
    {
        
    }
    public function sunaSelamVer($deger)
    {
        
    }

}



?>