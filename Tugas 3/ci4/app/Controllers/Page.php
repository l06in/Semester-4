<?php namespace App\Controllers;

class page extends BaseController 
{
   public function about()
    {
    echo "about page";
    }

    public function contact()
    {
    echo "contact page";
    }

    public function faqs()
    {
    echo "faqs page";
    }

    public function tos()
    {
        echo "Nama          : Mochamad imamudin";
        echo "TTL           : Jombang, 24 Oktober 2003";
        echo "Alamat        : Desa Keras Kecamatan Diwek Kabaupaten Jombang ";
        echo "Jenis Kelamin : laki-laki";
    }
}