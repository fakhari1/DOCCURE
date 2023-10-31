<?php

namespace File\Models;

use File\Services\Uploader\StorageManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Services\Models\Service;
use User\Models\User;

class File extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function isMedia(){
        return $this->type =='video';
    }
    public function absolutePath(){
        return resolve(StorageManager::class)
            ->getAbsolutePathOf($this->name,$this->type,$this->is_private);
    }
    public function user(){
        return $this->belongsTo(User::class,'profile_id');
    }
    public function service(){
        return $this->belongsTo(Service::class,'banner_id');
    }

    public function download(){
        return resolve(StorageManager::class)->getFile($this->name,$this->type,$this->isPrivate);
    }

    public function delete()
    {
     resolve(StorageManager::class)->deleteFile($this->name,$this->type,$this->isPrivate);
     parent::delete();
    }
}
