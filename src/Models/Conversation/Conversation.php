<?php

namespace Wqqas1\LaravelVideoChat\Models\Conversation;

use Illuminate\Database\Eloquent\Model;

use Mpociot\Firebase\SyncsWithFirebase;

use App\Booking;

use Wqqas1\LaravelVideoChat\Models\Conversation\Relationship\ConversationRelationship;

class Conversation extends Model
{
    use ConversationRelationship;
    use SyncsWithFirebase;

    protected $table;

    protected $fillable = [
        'first_user_id', 'second_user_id', 'booking_id', 'is_accepted',
    ];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('laravel-video-chat.table.conversations_table');
    }

    public function Booking(){
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
