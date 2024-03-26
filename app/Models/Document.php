<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Document extends Model
{
    use HasFactory;
    protected $casts = [
        'date_start' => 'datetime:d.m.Y',
        'date_end' => 'datetime:d.m.Y',
    ];
    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
    public function files()
    {
        return $this->morphMany(StoredFile::class, 'attachable');
    }
}
