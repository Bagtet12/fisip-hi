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
    public function student_corner()
    {
        return view('page/users/profile/student-corner');
    }
    public function page_structure_organization()
    {
        return view('page/users/profile/page-structure-organization');
    }
    public function facillitas()
    {
        return view('page/users/profile/facillitas');
    }
    public function introduction()
    {
        return view('page/users/profile/introduction');
    }
    public function himahi()
    {
        return view('page/users/profile/himahi');
    }
    public function page_lecture()
    {
        return view('page/users/profile/page-lecture');
    }
    public function lecture_staff()
    {
        return view('page/users/profile/lecture-staff');
    }
    public function page_staff()
    {
        return view('page/users/profile/page-staff');
    }
    public function academic()
    {
        return view('page/users/academic');
    }
    public function press_release()
    {
        return view('page/users/news/press-release');
    }
    public function student()
    {
        return view('page/users/news/student');
    }
    public function lecturer()
    {
        return view('page/users/news/lecturer');
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
