<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function publish($id)
    {
        $testimonial = Testimonial::where('id', $id);

        $testimonial->update(['published'=>1]);

        return 'published';
    }
}
