<?php

namespace App\Needketing\Repositories\User\Tag;


use App\NeedKeting\Models\Tag;

class TagsRepository
{

    /**
     * @var Tag
     */
    public $tags;

    /**
     * TagsRepository constructor.
     * @param Tag $tags
     */
    public function __construct(Tag $tags)
    {
        $this->tags = $tags;
    }

    /**
     * Return all the tags
     *
     * @return mixed
     */
    public function all()
    {
        return $this->tags->take(10)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFromId($id)
    {
        return $this->tags->findOrFail($id);
    }
    
}