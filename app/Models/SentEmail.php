<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SentEmail
 * @package App\Models
 * @property int id
 * @property string sender_ip
 * @property string content
 * @property \DateTime created_id
 * @property \DateTime updated_at
 */
class SentEmail extends Model
{
    protected $table = 'sent_emails';

    protected $fillable = [
        'sender_ip',
        'content',
        'created_at',
        'updated_at'
    ];
}
