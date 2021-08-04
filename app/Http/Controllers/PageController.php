<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function AddPage(Request $request)
    {
        $page = Page::where('page_title', 'home')->get();
        $numrow = count($page);
        if ($numrow > 0) {
            return view('admin.home.addpage', ['page' => $page]);
        } else {
            $page = new Page();
            return view('admin.home.addpage', ['page' => $page]);
        }
    }

    public function about(Request $request)
    {
        $page  = Page::where('page_title', 'about')->get();
        return view('admin.about.about', ['page' => $page, 'total_row' => count($page)]);
    }
    public function courses(Request $request)
    {
        $page  = Page::where('page_title', 'courses')->get();
        return view('admin.courses.courses', ['page' => $page, 'total_row' => count($page)]);
    }
    public function trainers(Request $request)
    {
        $page  = Page::where('page_title', 'trainers')->get();
        return view('admin.trainers.trainers', ['page' => $page, 'total_row' => count($page)]);
    }
    public function events(Request $request)
    {
        $page  = Page::where('page_title', 'events')->get();
        return view('admin.events.events', ['page' => $page, 'total_row' => count($page)]);
    }
    public function pricing(Request $request)
    {
        $page  = Page::where('page_title', 'pricing')->get();
        return view('admin.pricing.pricing', ['page' => $page, 'total_row' => count($page)]);
    }
    public function contact(Request $request)
    {
        $page  = Page::where('page_title', 'contact')->get();
        return view('admin.contact.contact', ['page' => $page, 'total_row' => count($page)]);
    }


    public function CreatePage(Request $request)
    {
        $pagevalues['title'] = $request->title;
        $datavalues = array();
        if ($request->txt_name) {
            $field = $request->txt_name;
            if ($field) {
                for ($j = 0; $j < count($field); $j++) {
                    $text = $field[$j];
                    $tx = $request->$text;
                    $field_name = Page::where(['section_title' => $text, 'page_title' => $pagevalues['title']])->get();
                    if (count($field_name) > 0) {
                        $datavalues[$text] = $tx;
                    } else {
                        $newvalues[$text] = $tx; 
                    }
                }
            }
        }

        if ($request->image) {
            $field = $request->image;
            if ($field) {
                for ($j = 0; $j < count($field); $j++) {
                    $image_name = $field[$j];
                    if ($request->$image_name) {
                        $filename = $this->fileUpload($request, $image_name, '');

                        $field_name = Page::where(['section_title' => $image_name, 'page_title' => $pagevalues['title']])->get();
                        if (count($field_name) > 0) {
                            $datavalues[$image_name] = $filename;
                        } else {
                            $newvalues[$image_name] = $filename;
                        }
                    }
                }
            }
        }

        if (!empty($datavalues)) {
            foreach ($datavalues as $key => $value) {
                $where = array('section_title' => $key, 'page_title' => $pagevalues['title']);
                $res = Page::where($where)->update(array('data' => $value));
                if ($res) {
                    $success = 1;
                }
            }
        }
        if (!empty($newvalues)) {
            foreach ($newvalues as $key => $value) {
                $data = array(
                    'page_title' => $pagevalues['title'],
                    'section_title' => $key,
                    'data' => $newvalues[$key]
                );
                $res = Page::create($data);
            }
        }
        if ($pagevalues['title'] == 'home')
            return redirect('/add-home');
        elseif ($pagevalues['title'] == 'about')
            return redirect('/about-page-add');

        elseif ($pagevalues['title'] == 'courses')
            return redirect('/courses-page-add');

        elseif ($pagevalues['title'] == 'trainers')
            return redirect('/trainers-page-add');

        elseif ($pagevalues['title'] == 'events')
            return redirect('/events-page-add');

        elseif ($pagevalues['title'] == 'pricing')
            return redirect('/pricing-page-add');

        elseif ($pagevalues['title'] == 'contact')
            return redirect('/contact-page-add');
    }
}
