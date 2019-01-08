<?php

namespace App\Http\Controllers;

use App\Category;
use App\GalleryItem;
use App\Mail\TestimonialAdded;
use App\OurContactSocials;
use App\Subcategory;
use App\Testimonial;
use Illuminate\Http\Request;
use Route;
use Mail;

class PagesController extends BaseController
{
    public function __construct()
    {
        $route_name = Route::getCurrentRoute() ? Route::getCurrentRoute()->getName() : null;
        $this->template = 'frontend.pages.' . $route_name;

        $socials = OurContactSocials::orderBy('ordering')->get();
        $this->vars = array_add($this->vars, 'socials', $socials);

        $categories = Category::orderBy('ordering')->with('subcategories')->get();
        $this->vars = array_add($this->vars, 'categories', $categories);
    }


    public function home()
    {
        $testimonials = Testimonial::latest()->where('published', true)->take(3)->get();
        $this->vars = array_add($this->vars, 'testimonials', $testimonials);

        $this->page_title = 'Салон красоты, спа и массажа Lady boss | Главная';

        return $this->renderOutput();
    }


    public function categories()
    {
        $this->page_title = 'Салон красоты, спа и массажа Lady boss | Все услуги';

        return $this->renderOutput();
    }


    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $this->vars = array_add($this->vars, 'category', $category);

        $this->page_title = $category->title;
        $this->meta_description = $category->meta_description;
        $this->meta_keywords = $category->meta_keywords;

        return $this->renderOutput();
    }


    public function programs($subcategory_slug)
    {
        $subcategory = Subcategory::where('slug', $subcategory_slug)->first();
        $this->vars = array_add($this->vars, 'subcategory', $subcategory);

        $this->page_title = $subcategory->name . ' | Салон красоты, спа и массажа Lady boss';

        return $this->renderOutput();
    }


    public function certificates()
    {
        $this->page_title = 'Подарочные сертификаты в салон красоты, спа и массажа';

        return $this->renderOutput();
    }


    public function gallery()
    {
        $gallery = GalleryItem::all();
        $this->vars = array_add($this->vars, 'gallery', $gallery);

        $this->page_title = 'Салон красоты, спа и массажа Lady boss | Галерея';

        return $this->renderOutput();
    }


    public function testimonials()
    {
        $testimonials = Testimonial::latest()->where('published', true)->get();
        $this->vars = array_add($this->vars, 'testimonials', $testimonials);

        $this->page_title = 'Салон красоты, спа и массажа Lady boss | Отзывы';

        return $this->renderOutput();
    }


    public function thanks(Request $request)
    {
        if (!$request->input('anti-spam'))
        {
            switch ($request->input('thanks_for'))
            {
                case 'testimonial':
                    $input = $request->except('thanks_for');
                    $testimonial = Testimonial::create($input);
                    Mail::to(['era-digital@yandex.ru', 'laura_20@mail.ru'])->send(new TestimonialAdded($testimonial));
            }

            $this->template = 'frontend.pages.thanks';

            $this->page_title = 'Салон красоты, спа и массажа Lady boss | Спасибо!';

            return $this->renderOutput();
        }
    }

    public function payment_conditions()
    {
        $this->page_title .= 'Салон красоты, спа и массажа Lady boss | Условия онлайн-оплаты';

        return $this->renderOutput();
    }
}
