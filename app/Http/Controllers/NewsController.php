<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\In;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('event')->get();
    //    dd($news);
        return view('news.index',compact('news'));

    }
    public function detail($event_id)
    {
        $post = DB::table('event')->where('id',$event_id)->first();
        $comments = $this->getComment($event_id);
        $comment_num = count($comments);
//        dd($comment_num);
        return view('news.detail',compact('post','comments', 'comment_num'));
    }

    public function getComment($event_id)
    {
        $comments = DB::table('komentar_event')->where('fk_event',$event_id)->get();
        return $comments;
    }


    public function do_comment()
    {
        $event_id = Input::get('event_id');
        $comment = Input::get('comment');
        $dat['data'] = array(
            'fk_event' => $event_id,
            'komentar' => $comment
        );
        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    public function uploadImage(Request $request)
    {
        // A list of permitted file extensions
        if(empty($_FILES['file']))
        {
            exit();
        }
        $errorImgFile = public_path()."/uploads/img/img_upload_error.jpg";
        $destinationFilePath = public_path().'/uploads/img-uploads/'.$_FILES['file']['name'];
        if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)){
            echo $errorImgFile;
        }
        else{
            echo url('/').'/public/uploads/img-uploads/'.$_FILES['file']['name'];
        }
    }

    public function getSummernote()
    {
        return view('news.create');
    }

    public function postSummernote(Request $request)
    {
        $this->validate($request, [
            'detail' => 'required',
        ]);
        $title=$request->input('title');
        $location=$request->input('location');
        $tanggal=$request->input('tanggal');
        $waktu=$request->input('waktu');
        $detail=$request->input('detail');
        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        // $images = $dom->getElementsByTagName('img');
        // foreach($images as $k => $img){
        //     $data = $img->getAttribute('src');
        //     list($type, $data) = explode(';', $data);
        //     list(, $data)      = explode(',', $data);
        //     $data = base64_decode($data);
        //     $image_name= "/uploads/" . time().$k.'.png';
        //     $path = public_path() . $image_name;
        //     file_put_contents($path, $data);
        //     $img->removeAttribute('src');
        //     $img->setAttribute('src', $image_name);
        // }
        if ($request->file('foto')){
            $img = time() . "." . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(base_path() . '/public/images/foto/', $img);
            $photopath = "images/foto/" . $img;
        }
        else {
            $photopath = Input::get('fotosession');
        }
        $data['data'] = array(
            'user_nrp' => session('user_id'),
            'event_judul' => $title,
            'event_deskripsi' => $detail,
            'event_tanggal' => $tanggal,
            'event_waktu' => $waktu,
            'event_lokasi' => $location,
            'event_foto' => $photopath,
        );
        DB::table('event')
            ->insert($data['data']);
        // dd($detail);
        // dd($path);
        return redirect()->route('news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::table('event')->where('id',$id)->first();
        return view('news.detail',compact('post'));
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
        //
    }
}
