<?php

namespace App\NeedKeting\Services\User\Tag;


use App\NeedKeting\Repositories\User\Tag\TagsRepository;
class TagsService
{
    /**
     * @var TagsRepository
     */
    public $tags;

    /**
     * TagsService constructor.
     * @param TagsRepository $tags
     */
    public function __construct(TagsRepository $tags)
    {
        $this->tags = $tags;    
    }

    /**
     * All tags from tags table
     * 
     * @return mixed
     */
    public function all()
    {
        return $this->tags->all();
    }
}