<?php

// =>open close Principal
//open for extenstion  //Close for modification .ক্লাস একবার লেখার পর সেই কোড আর চেঞ্জ করা যাবে না...

class FileDisplay
{
    function display(FileInterFace $file)
    {
    }
}

interface FileInterFace
{
    function display();
}

class ImageFile implements FileInterFace
{
    function display()
    {
        //Take necessary steps to display Image
    }
}

class VideoFile implements FileInterFace
{
    function display()
    {
        //Take necessary steps to display Video
    }
}

// যদি অডিও দেখানোর দরকার হয় যাস্ট ইন্টারফেস টাকে ইমপিলিমেণ্টস করবে
class AudioFile implements FileInterFace
{
    function display()
    {
        //Take necessary steps to display Audio 
    }
}

$image = new ImageFile("abc.img");
$video = new VideoFile("abc.mp4");
$audio = new VideoFile("abc.mp4");
$fd = new FileDisplay();
$fd->display($image);
$fd->display($video);
$fd->display($audio);
