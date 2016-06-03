<?php

namespace App\NeedKeting\Repositories\Admin\Tag;


use App\NeedKeting\Models\Tag;

class TagsRepository
{
    /**
     * @var Tag
     */
    private $tags;

    /**
     * TagsRepository constructor.
     * @param Tag $tags
     */
    public function __construct(Tag $tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->tags->all();
    }

    /**
     * @param $request
     * @return static
     */
    public function create($request)
    {
        return $this->tags->create($request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->tags->findOrFail($id);
    }

    /**
     * @param $request
     * @param $id
     */
    public function update($request, $tag)
    {
        $tag->fill($request)->save();
    }
}