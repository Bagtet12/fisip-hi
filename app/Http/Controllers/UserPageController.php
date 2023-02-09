<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function home()
    {
        $visit = Visit::all();
        return view('page/users/home', compact('visit'));
    }
    public function profile()
    {
        return view('page/users/profile/profile');
    }
    public function structure_organization()
    {
        return view('page/users/profile/structure-organization');
    }
    public function page_structure_organization()
    {
        return view('page/users/profile/page-structure-organization');
    }
    public function facillitas()
    {
        return view('page/users/profile/facillitas');
    }
    public function lecture()
    {
        return view('page/users/profile/lecture');
    }
    public function page_lecture()
    {
        return view('page/users/profile/page-lecture');
    }
    public function staff()
    {
        return view('page/users/profile/staff');
    }
    public function page_staff()
    {
        return view('page/users/profile/page-staff');
    }
    public function academic()
    {
        return view('page/users/academic/academic');
    }
    public function page_release()
    {
        return view('page/users/academic/page-release');
    }
    public function publication_research()
    {
        return view('page/users/academic/publication-research');
    }
    public function testimony()
    {
        return view('page/users/academic/testimony');
    }
    public function news()
    {
        return view('page/users/news/news');
    }
    public function page_news()
    {
        return view('page/users/news/page-news');
    }
    public function download()
    {
        return view('page/users/download');
    }
}
