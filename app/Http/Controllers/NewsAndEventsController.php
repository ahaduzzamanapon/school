<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsAndEventsController extends Controller
{
    private $content = 'Lorem Ipsum </b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
    function news($news)
    {
        $newsTitle = str_replace('-', ' ', $news);
        return view('website_view.show-news-and-events', [
            'date' => '31-Aug 2023',
            'title' => $newsTitle,
            'image' => '/public/62a0432a90c05993939702-350x250.png',
            'content' => $this->content
        ]);
    }
    function event($event)
    {
        $newsTitle = str_replace('-', ' ', $event);
        switch ($event) {
            case 'school-events':
                return view('website_view.show-news-and-events', [
                    'date' => '2024-07-10',
                    'title' => $newsTitle,
                    'image' => 'public/School-Events-that-Parents-and-Children-1280x720-1.png',
                    'content' => $this->content
                ]);
            case 'international-mother-language-day':
                return view('website_view.show-news-and-events', [
                    'date' => '2024-07-10',
                    'title' => $newsTitle,
                    'image' => 'public/language-day.jpeg',
                    'content' => $this->content
                ]);
            case 'victory-day':
                return view('website_view.show-news-and-events', [
                    'date' => '2024-07-10',
                    'title' => $newsTitle,
                    'image' => 'public/image-100465-1671191862.jpg',
                    'content' => $this->content
                ]);
            case 'independent-day':
                return view('website_view.show-news-and-events', [
                    'date' => '2024-07-10',
                    'title' => $newsTitle,
                    'image' => 'public/image-100465-1671191862.jpg',
                    'content' => $this->content
                ]);
            default:
                return view('website_view.show-news-and-events', [
                    'date' => '2024-07-10',
                    'title' => $newsTitle,
                    'image' => '/public/62a0432a90c05993939702-350x250.png',
                    'content' => $this->content
                ]);
        }
    }
}
