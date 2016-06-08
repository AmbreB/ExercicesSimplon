<?php

namespace Newsletters\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewslettersController extends Controller
{
    public function getIndex() 
    {
    	return view('newsletters::newsletterform');
    }
    public function postIndex()
    {
        
    }
    public function getTartenpion()
    {
    	return "coucou";
    }
}
