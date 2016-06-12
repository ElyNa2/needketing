<?php

namespace App\Http\Controllers\User\Comment;

use App\Http\Requests\User\Comment\StoreCommentRequest;
use App\NeedKeting\Services\User\Comment\CommentsService;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    /**
     * @var CommentsService
     */
    public $comments;

    /**
     * CommentsController constructor.
     * @param CommentsService $comments
     */
    public function __construct(CommentsService $comments)
    {
        $this->comments = $comments;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        $this->comments->create($request->all());

       // return redirect(route('home'))->with('status','Comment posted successfully');
        
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

    /**
     * Getting all the comments
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->comments->all();
    }
    
    
}
