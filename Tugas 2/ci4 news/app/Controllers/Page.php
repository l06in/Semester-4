<?php namespace App\Controllers;

class page extends BaseController 
{
   public function About()
    {
    echo "About page";
    }

    public function Contact()
    {
    echo "Contact page";
    }

    public function Faqs()
    {
    echo "Faqs page";
    }
    public function tos()
    {
        echo "Nama          : Mochamad imamudin";
        echo "TTL           : Jombang, 24 Oktober 2003";
        echo "Alamat        : Desa Keras Kecamatan Diwek Kabaupaten Jombang ";
        echo "Jenis Kelamin : laki-laki";
    }
}