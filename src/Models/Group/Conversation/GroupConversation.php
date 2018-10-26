<?php

namespace Wqqas1\LaravelVideoChat\Models\Group\Conversation;

use Illuminate\Database\Eloquent\Model;

use Mpociot\Firebase\SyncsWithFirebase;

use Wqqas1\LaravelVideoChat\Models\Group\Conversation\Relationship\GroupConversationRelationship;

class GroupConversation extends Model
{
    use GroupConversationRelationship;
    use SyncsWithFirebase;

    protected $table;

    protected $fillable = [
        'name',
    ];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('laravel-video-chat.table.group_conversations_table');
    }
}
