<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Traits\SeoTrait;
use App\Traits\GeneralTrait;

class DestinationsController extends Controller{
    public function puntaCana(){
        $this->seo = SeoTrait::seoData('destination-punta-cana');
        return view('destinations.punta-cana', ['seo' => $this->seo]);
    }

    public function bavaro(){
        $this->seo = SeoTrait::seoData('destination-bavaro');
        return view('destinations.bavaro', ['seo' => $this->seo]);
    }

    public function laRomana(){
        $this->seo = SeoTrait::seoData('destination-la-romana');
        return view('destinations.la-romana', ['seo' => $this->seo]);
    }

    public function capCana(){
        $this->seo = SeoTrait::seoData('destination-cap-cana');
        return view('destinations.cap-cana', ['seo' => $this->seo]);
    }
}