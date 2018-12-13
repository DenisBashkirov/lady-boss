<?php

namespace App\Http\Controllers;

use App\Category;
use App\GalleryItem;
use App\OurContactSocials;
use App\Subcategory;
use App\Testimonial;
use Illuminate\Http\Request;
use Route;

class PagesController extends BaseController
{
    public function __construct()
    {
        $route_name = Route::getCurrentRoute()->getName();
        $this->template = 'frontend.pages.' . $route_name;

        $socials = OurContactSocials::orderBy('ordering')->get();
        $this->vars = array_add($this->vars, 'socials', $socials);

        $categories = Category::orderBy('ordering')->with('subcategories')->get();
        $this->vars = array_add($this->vars, 'categories', $categories);
    }


    public function home()
    {
        $testimonials = Testimonial::latest()->take(3)->get();
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

        $this->page_title = $category->name . '| Салон красоты, спа и массажа Lady boss';

        return $this->renderOutput();
    }


    public function programs($subcategory_slug)
    {
        $subcategory = Subcategory::where('slug', $subcategory_slug)->first();
        $this->vars = array_add($this->vars, 'subcategory', $subcategory);

        $this->page_title = $subcategory->name . '| Салон красоты, спа и массажа Lady boss';

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
        $testimonials = Testimonial::latest()->get();
        $this->vars = array_add($this->vars, 'testimonials', $testimonials);

        $this->page_title = 'Салон красоты, спа и массажа Lady boss | Отзывы';

        return $this->renderOutput();
    }
}
