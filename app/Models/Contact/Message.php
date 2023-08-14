<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $fillable = array('name','email','number','subject_id','message');

    public function subject()
    {
        return $this->belongsTo(Subject::class,  'subject_id');
    }
}
