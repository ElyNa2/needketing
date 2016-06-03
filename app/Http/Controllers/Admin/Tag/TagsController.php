<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Requests\Admin\Tag\StoreTagRequest;
use App\Http\Requests\Admin\Tag\UpdateTagRequest;
use App\NeedKeting\Models\Tag;
use App\NeedKeting\Services\Admin\Tag\TagsService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{

    /**
     * @var TagsService
     */
    private $tags;

    /**
     * TagsController constructor.
     * @param TagsService $tags
     */
    public function __construct(TagsService $tags)
    {
        $this->tags = $tags;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = $this->tags->all();

        return view('admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tag $tag)
    {
        return view('admin.tags.form',compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        $this->tags->create($request->all());

        return redirect(route('admin.tags.index'))->with('status','Tag Has beedn creatted successfully');
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
        $tag = $this->tags->getFromId($id);
        
        return view('admin.tags.form',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, $id)
    {
        $tag = $this->tags->getFromId($id);
        
        $this->tags->update($request->all(),$tag);
        
        return redirect(route('admin.tags.index'))->with('status','Tag has beed updated');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function confirm($id)
    {
        $tag = $this->tags->getFromId($id);

        return view('admin.tags.confirm',compact('tag'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = $this->tags->getFromId($id);

        $tag->delete();

        return redirect(route('admin.tags.index'))->with('status','Tag Has been deleted');
    }

}
