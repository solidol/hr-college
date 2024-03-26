<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class StoredFile extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function __construct($file, Employee $employee, array $attributes = [])
    {
        parent::__construct($attributes);

        $this->save();
        $ext = $file->getClientOriginalExtension();
        $filename = str_pad($this->id, 10, '0', STR_PAD_LEFT). '_' . date('Y-m-d_h-s-i') . '.' . $file->extension();
        $dir = "fs/{$employee->reg_number}";
        $this->dir = $dir;
        $this->filename = $filename;
        $this->ext = $ext;
        $this->save();
        Storage::disk('public')->putFileAs($dir, $file, $filename);
    }

    public function attachable()
    {
        return $this->morphTo('attachable');
    }

}
