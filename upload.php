<?<php
$fileName=$_FILES["data.pdf"]["name"];
$tempFile=$_files["data.pdf"]["temp_name"];
$uploadPath = "uplaods/" .$fileName;

move_uploaded_file($tempFile, $uploadPath);

echo "File uploaded successfully <br>";
echo "<a href='download.php?file=data.pdf'><button>Download file </button> </a>" ;
?>