function hs_webp2jpg($source_file)
{
    $image = imagecreatefromwebp($source_file);
    $result = imagejpeg($image, $source_file, 90);
    if (false === $result) return false;
    return true;
}
