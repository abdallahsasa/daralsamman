<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'messages_subject';
    protected $fillable = array('subject');

    public function products()
    {
        return $this->hasMany(Message::class, 'subject_id');

    }
}
