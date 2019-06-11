<?php

namespace App\Http\Controllers;

use App\File;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Category;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Contracts\Auth\Guard;
use Youtube;

class FileController extends Controller
{

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function index()
    {
        $file = File::all();
        return view('forms-upload', $data);
    }

    public function show($id)
    {
        $file = File::find($id);
        return $file;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file'   => 'required|file|mimes:pdf,doc,docx,ppt,pptx,mp4|max:9000'
        ]);

        $category               =  Category::find($request->category_id);
        $route                  =  $category->category_name;

        if ($category->category_level != 1) {
            while ($category->category_level != 1) {
                $category         =  Category::find($category->superior_category_id);
                $route            =  $category->category_name . '/' . $route;
            }
        }
        $file                   =  new File($request->all());
        $file->user_id          =  Auth::user()->id;
        $file->file_real_name   =  $request->file('file')->getClientOriginalName();
        $file->storage_type     =  1;
        $file->file_extension   =  $request->file('file')->getClientOriginalExtension();

        $file->file_name        =  $category->category_name . '_' . $request->file_year . '.' . $file->file_extension;

        $file->file_size        =  $request->file('file')->getClientSize();
        $file->user_id          =  $this->auth->user()->id;

        $path = Storage::putFileAs($route, $request->file('file'), $file->file_real_name);


        $globalPath_ = "/var/www/storage/app/";
        $globalPath_Rick = "C:/Proyectos/Pingeso/ProyObste/storage/app/";

        if($file->file_extension == 'mp4'){
            $video = Youtube::upload($globalPath_.$path, [
                'title'       => $file->file_real_name ,
                'description' => 'You can also specify your video description here.',
                'tags'	      => ['foo', 'bar', 'baz'],
                'category_id' => 10
            ]);
            $file->file_path = 'https://www.youtube.com/embed/'.$video->getVideoId();
            $file->storage_type  = 2;
            $file->save();
            Storage::delete($route.'/'.$file->file_real_name);
        }
        else{
            $file->file_path        =  $path;
            $file->state            =  1;
            $file->user_id          =  $this->auth->user()->id;
            $file->save();
        }
        return redirect()->action('CategoryController@show', ['id' => $request->category_id]);
    }

    public function edit($id)
    {
        $file = File::find($id);
        return $file;
    }
    public function vieWord($url)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($url);
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
        try {
            $objWriter->save(storage_path('temp.html'));
        } catch (Exception $e) { }
        return PDF::loadFile(storage_path('temp.html'))->save(storage_path('tempPdf.html'))->stream('temporalview.pdf');
    }

    public function update(Request $request, $id)
    {

        $file = File::find($id);
        $file->update($request->all());
    }

    public function destroy($id)
    {

        //la consideramos?
    }
}
