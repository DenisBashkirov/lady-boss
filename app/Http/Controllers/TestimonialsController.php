<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends BaseController
{
    public function publish($id)
    {
        $this->template = 'frontend.office.testimonial_published';

        $testimonial = Testimonial::where('id', $id)->first();
        $this->vars = array_add($this->vars, 'testimonial', $testimonial);

        $testimonial->update(['published'=>1]);

        $this->page_title = 'Отзыв размещён';

        return $this->renderOutput();
    }
}
