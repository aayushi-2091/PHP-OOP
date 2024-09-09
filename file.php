<?php
class file {
    public $name;
    public $size;
    public function __construct($name, $size) {
        $this->name = $name;
        $this->size = $size;
    }
    public static function calculateTotalSize($files) {
        $totalSize = 0;
        foreach ($files as $file) {
            $totalSize += $file->size;
        }
        return $totalSize;
    }
}
$file1 = new file("file1.txt", 500);
$file2 = new file("file2.txt", 300);
$file3 = new file("file3.txt", 1200);
$files = [$file1, $file2, $file3];
$totalSize = file::calculateTotalSize($files);
echo "Total size of files: " . $totalSize . " bytes\n";
?>