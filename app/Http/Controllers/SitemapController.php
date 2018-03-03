<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function sitemapGenerator()
    {
        SitemapGenerator::create('https://blog.alonsorodriguez.com')->writeToFile('sitemap.xml');
    }
}
