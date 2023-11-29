<?php
//
//namespace File\Services\Uploader;
//
//use App\Exceptions\FileHasExistsExceotion;
//use FFMpeg\FFMpeg;
//use File\Models\File;
//use Illuminate\Http\Request;
//
//class Uploader
//{
//    private Request $request;
//    private StorageManager $storageManager;
//    private FFMpegServices $ffmpeg;
//    private $file;
//
//    public function __construct(Request $request, StorageManager $storageManager, FFMpegServices $ffmpeg, $file)
//    {
//        $this->request = $request;
//        $this->storageManager = $storageManager;
//        $this->ffmpeg = $ffmpeg;
//        $this->file = $file;
//    }
//
//    public function upload()
//    {
//        if ($this->isFileExists()) throw new FileHasExistsExceotion('file has already uploded');
//        $this->putFileIntoStorage();
//        return $this->saveFileIntoDatabase();
//    }
//
//    private function saveFileIntoDatabase()
//    {
//        $file = new File([
//            'name' => $this->file->getClientOriginalName(),
//            'size' => $this->file->getSize(),
//            'type' => $this->getType(),
//            'is_private' => $this->isPrivate(),
//        ]);
//        $file->time = $this->getTime($file);
//        $file->save();
//    }
//
//    private function getTime(File $file)
//    {
//        if (!$file->isMedia()) return null;
//        return $this->ffmpeg->durationOf($file->absolutePath());
//    }
//
//    private function putFileIntoStorage()
//    {
//        $method = $this->isPrivate() ? 'putFileAsPrivate' : 'putFileAsPublic';
//        $this->storageManager->$method($this->file->getClientOriginalName(), $this->file, $this->getType());
//    }
//
//    private function isPrivate()
//    {
//        return $this->request->has('is-private');
//    }
//
//    private function getType()
//    {
//        return [
//            'image/jpeg' => 'image',
//            'video/mp4' => 'video',
//            'application/zip' => 'archive'
//        ][$this->file->getClientMimeType()];
//    }
//
//    private function isFileExists()
//    {
//        return $this->storageManager
//            ->isFileExists($this->file->getClientOriginalName, $this->getType(), $this->isPrivate());
//
//    }
//}
