<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        $data = [
            'name' => 'Aurelio Killian',
            'nrp' => '5025211126',
        ];
        return view('contact', $data);
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
        $data['faqItems'] = $faqItems;

        return view('faqs', $data);
    }

    public function tos()
    {
        echo "Terms of service page";
    }
}
