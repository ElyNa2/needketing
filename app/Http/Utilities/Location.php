<?php

namespace App\Http\Utilities;

class Location{

    /**
     * @var array
     */
    protected static $locations = [
        "Taplejung, Nepal" => "Taplejung",
        "Panchthar, Nepal" => "Panchthar",
        "Ilam, Nepal" => "Ilam",
        "Jhapa, Nepal" => "Jhapa",
        "Morang, Nepal" => "Morang",
        "Sunsari, Nepal" => "Sunsari",
        "Dhankutta, Nepal" => "Dhankutta",
        "Sankhuwasabha, Nepal" => "Sankhuwasabha",
        "Bhojpur, Nepal" => "Bhojpur",
        "Terhathum, Nepal" => "Terhathum",
        "Okhaldunga, Nepal" => "Okhaldunga",
        "Khotang, Nepal" => "Khotang",
        "Solukhumbu, Nepal" => "Solukhumbu",
        "Udaypur, Nepal" => "Udaypur",
        "Saptari, Nepal" => "Saptari",
        "Siraha, Nepal" => "Siraha",
        "Janakpur, Nepal" => "Janakpur",
        "Mahottari, Nepal" => "Mahottari",
        "Sarlahi, Nepal" => "Sarlahi",
        "Sindhuli, Nepal" => "Sindhuli",
        "Ramechhap, Nepal" => "Ramechhap",
        "Dolkha, Nepal" => "Dolkha",
        "Sindhupalchauk, Nepal" => "Sindhupalchauk",
        "Kavreplanchauk, Nepal" => "Kavreplanchauk",
        "Lalitpur, Nepal" => "Lalitpur",
        "Bhaktapur, Nepal" => "Bhaktapur",
        "Kathmandu, Nepal" => "Kathmandu",
        "Nuwakot, Nepal" => "Nuwakot",
        "Rasuwa, Nepal" => "Rasuwa",
        "Dhading, Nepal" => "Dhading",
        "Makwanpur, Nepal" => "Makwanpur",
        "Rauthat, Nepal" => "Rauthat",
        "Bara, Nepal" => "Bara",
        "Parsa, Nepal" => "Parsa",
        "Chitwan, Nepal" => "Chitwan",
        "Gorkha, Nepal" => "Gorkha",
        "Lamjung, Nepal" => "Lamjung",
        "Tanahun, Nepal" => "Tanahun",
        "Syangja, Nepal" => "Syangja",
        "Kaski, Nepal" => "Kaski",
        "Manag, Nepal" => "Manag",
        "Mustang, Nepal" => "Mustang",
        "Parwat, Nepal" => "Parwat",
        "Myagdi, Nepal" => "Myagdi",
        "Baglung, Nepal" => "Baglung",
        "Gulmi, Nepal" => "Gulmi",
        "Palpa, Nepal" => "Palpa",
        "Nawalparasi, Nepal" => "Nawalparasi",
        "Rupandehi, Nepal" => "Rupandehi",
        "Arghakhanchi, Nepal" => "Arghakhanchi",
        "Kapilvastu. Nepal" => "KapilvastuKapilvastu",
        "Pyuthan, Nepal" => "Pyuthan",
        "Rolpa, Nepal" => "Rolpa",
        "Rukum, Nepal" => "Rukum",
        "Salyan, Nepal" => "Salyan",
        "Dang, Nepal" => "Dang",
        "Bardiya, Nepal" => "Bardiya",
        "Surkhet, Nepal" => "Surkhet",
        "Dailekh, Nepal" => "Dailekh",
        "Banke, Nepal" => "Banke",
        "Jajarkot, Nepal" => "Jajarkot",
        "Dolpa, Nepal" => "Dolpa",
        "Humla, Nepal" => "Humla",
        "Kalikot, Nepal" => "Kalikot",
        "Mugu, Nepal" => "Mugu",
        "Jumla, Nepal" => "Jumla",
        "Bajura, Nepal" => "Bajura",
        "Bajhang, Nepal" => "Bajhang",
        "Achham, Nepal" => "Achham",
        "Doti, Nepal" => "Doti",
        "Kailali, Nepal" => "Kailali",
        "Kanchanpur, Nepal" => "Kanchanpur",
        "Dadeldhura, Nepal" => "Dadeldhura",
        "Baitadi, Nepal" => "Baitadi",
        "Darchula, Nepal" => "Darchula"
     ];

    /**
     * @return mixed
     */
    public static function all()
    {
        return array_keys(static::$locations);
    }
}