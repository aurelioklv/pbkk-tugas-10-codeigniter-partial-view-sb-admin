<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About Page'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Page',
        ];
        return view('pages/contact', $data);
    }

    public function faqs()
    {
        $faqItems = [
            [
                'question' => 'How do I create routes in CodeIgniter?',
                'answer' => 'To create routes in CodeIgniter, you should define them in the app/Config/Routes.php file. You can set the route to point to a specific controller and method.',
            ],
            [
                'question' => 'How do I create a new controller in CodeIgniter?',
                'answer' => 'To create a new controller in CodeIgniter, you can use the make:controller command in the terminal. For example, php spark make:controller MyController will create a new controller named MyController.',
            ],
        ];
        $data = [
            'faqItems' => $faqItems,
            'title' => 'FAQ'
        ];
        return view('pages/faqs', $data);
    }
}
