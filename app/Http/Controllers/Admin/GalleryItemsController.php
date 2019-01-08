<?php

namespace App\Http\Controllers\Admin;

use App\GalleryItem;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Storage;
use Route;

class GalleryItemsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_items = GalleryItem::all();
        $this->vars = array_add($this->vars, 'gallery_items', $gallery_items);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg',
        ]);

        $file = $request->file('image');
        $quality = 95;
        $destinationPath = 'img/gallery';

        $new_img_max_width = 1920;
        $preview_width = 330;
        
        $image_size = getimagesize($file);
        $image_width = $image_size[0];
        $image_height = $image_size[1];
        $image_ratio = $image_width / $image_height;

        // Формирование имени файла для превью
        $array = explode('.', $file->getClientOriginalName());
        $array[count($array) - 1] = '_small.jpg';
        $preview_name = implode($array);

        // Создание ресурсов для оригинала и копии
        $src = imagecreatefromjpeg($file);
        $preview = imagecreatetruecolor($preview_width, $preview_width / $image_ratio);

        // Копирование в уменьшенном размере и сохранение
        imagecopyresampled($preview, $src, 0, 0, 0, 0, $preview_width, $preview_width / $image_ratio, $image_width, $image_height);
        imagejpeg($preview, $destinationPath . '/' . $preview_name, $quality);

        // Сохранение оригинала c размеро до 1920px по ширине
        $image = imagecreatetruecolor($new_img_max_width, $new_img_max_width / $image_ratio);
        imagecopyresampled($image, $src, 0, 0, 0, 0, $new_img_max_width, $new_img_max_width / $image_ratio, $image_width, $image_height);
        imagejpeg($image, $destinationPath . '/' . $file->getClientOriginalName(), $quality);

        // Добавление записи в БД
        $filename = str_replace('.jpg', '', $file->getClientOriginalName());
        GalleryItem::create([
            'filename'=>$filename,
        ]);

        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = GalleryItem::find($id);
        $filename = $item->filename;

        $disk = Storage::disk('gallery');
        $disk->delete($filename . '.jpg');
        $disk->delete($filename . '_small.jpg');

        GalleryItem::destroy($id);

        return redirect()->back();
    }
}
