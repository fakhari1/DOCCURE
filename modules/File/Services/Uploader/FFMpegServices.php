<?php

namespace File\Services\Uploader;

use FFMpeg\FFProbe;

class FFMpegServices
{
    private $ffprobe;

    public function __construct()
    {
        $this->ffprobe = FFProbe::create([
            'ffprobe.binaries' => config('services.ffmpeg.ffprobe_path')
        ]);
    }

    public function durationOf(string $path)
    {
        return (int)$this->ffprobe->format($path)->get('duration');
    }

}
