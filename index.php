<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengolahan Citra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col mt-3">
                <table>
                    <tr>
                        <td>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select image to upload: (jpg)<br>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit">
                            <a href="reset.php"> <button type="button" class="btn btn-sm btn-danger">Reset</button></a>
                        </form>
                        </td>
                        
                        <td>
                            
                        </td>  
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="grayscale.php"><button type="button" class="btn btn-sm btn-primary">Grayscale</button></a></td>
                        <td> <a href="negative.php"><button type="button" class="btn btn-sm btn-primary">Negative</button></a></td>
                        <td> <a href="sharpen.php"><button type="button" class="btn btn-sm btn-primary">Sharpen</button></a></td>
                    </tr>
                    <tr>
                        <td>
                            <img clas="gambar" src="uploads/picture.jpg" alt="Original Image" width="250px">
                        </td>           
                        <td>
                            <img clas="gambar" src="uploads/grayscale.jpg" alt="grayscale" width="250px">
                        </td>
                        <td>
                            <img clas="gambar" src="uploads/negative.jpg" alt="negative" width="250px">
                        </td>  
                        <td>
                            <img clas="gambar" src="uploads/sharpened.jpg" alt="sharpen" width="250px">
                        </td> 
                    </tr>
                </table>
                
            </div>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>