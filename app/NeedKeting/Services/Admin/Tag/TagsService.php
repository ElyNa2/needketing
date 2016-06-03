<?php

namespace App\NeedKeting\Services\Admin\Tag;


use App\NeedKeting\Repositories\Admin\Tag\TagsRepository;

class TagsService
{
    /**
     * @var TagsRepository
     */
    private $tags;

    /**
     * TagsService constructor.
     * @param TagsRepository $tags
     */
    public function __construct(TagsRepository $tags)
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
        return $this->tags->getFromId($id);
    }

    /**
     * @param $request
     * @param $id
     */
    public function update($request, $id)
    {
        return $this->tags->update($request,$id);
    }
}