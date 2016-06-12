<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PostWasCreated extends Event
{
    use SerializesModels;

    /**
     * @var Post
     */
    private $posts;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
