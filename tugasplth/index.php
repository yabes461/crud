<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Drive-like</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .file-container {
            column-count: 4; /* Sesuaikan jumlah kolom sesuai kebutuhan */
            column-gap: 20px;
        }
        .file {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>My Drive</h1>
    
    <div class="file-container">
        <?php
            // Simulasi daftar file
            $files = array("Document1.txt", "Image.jpg", "Presentation.pptx", "Video.mp4");

            // Tampilkan setiap file dalam container
            foreach ($files as $file) {
                echo '<div class="file">' . $file . '</div>';
            }
        ?>
    </div>
</body>
</html>