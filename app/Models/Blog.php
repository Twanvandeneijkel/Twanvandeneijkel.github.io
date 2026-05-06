<?php

namespace App\Models;

class Blog
{
    public int $id;
    public string $title;
    public string $content;
    public ?string $image;
    public ?string $summary;

    public function __construct()
    {
        $this->id = 0;
        $this->title = "";
        $this->content = "";
        $this->image = "";
        $this->summary = "";
    }
}
