<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Multiple Files PHP</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style>
    .header {
  margin: 0px auto;
  width: 100%;
  background-color: black;
}
    .container {
  margin: 50px auto;
  width: 70%;
  border: 3px solid green;
  padding: 10px;
}
    .custom-file-input {
        width:10px;
        border-style: solid;
        border-width: 1px;
    }
    
    button {
        margin-top:10px;
        align: center;
    }
    /* .file{
        border: solid 1px black;
    } */
    #ndvi{
        display:none;
    }
   .active{
      background-color:#d35400;
      color:#fff;
   }
</style>
<script>
function dsm() {
  var x = document.getElementById("dsm");
  var y = document.getElementById("ndvi");
  if (x.style.display == "none") {
    x.style.display = "block";
    y.style.display = "none";
    x.addClass("active");
  } else {
    x.style.display = "none";
    y.style.display = "block";
    x.removeClass("active");
  }
}
</script>
<body>
    
    <div class="container" id="dsm">
        <div class="header">
            <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><button id="tombol" class="nav-link active" onclick="dsm()"><i class="fas fa-sync-alt"> DSM </i></button></li>
                <!-- <li class="nav-item"><button class="nav-link" onclick="dsm()">NDVI</button></li> -->
            </ul>
            </header>
        </div>
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title text-center">MULTIPLE UPLOAD FOTO ORIGINAL DSM</h3>
            </div>
                <form action="<?php echo base_url().'index.php/Manual_Upload/resize_image_dsm'?>" method="post" enctype="multipart/form-data"> 
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <!-- <input required type="text" name="kodeLokasi" class="form-control" placeholder="Lokasi"> -->
                                <input type="hidden" name="kategori" value="DSM">
                            </div>
                            <!-- <div class="col-3">
                                <input required type="text" name="dateMod" class="form-control" placeholder="Date Modified">
                            </div> -->
                            <div class="col-3">
                                <input required type="file" class="file" name="filefoto[]" accept="image/*" multiple>                
                            </div>
                            <!-- <div class="col-3">
                                <input required type="file" class="file" name="filepdf[]" accept="application/pdf" multiple>               
                            </div> -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="ndvi" >
        <div class="header">
            <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><button id="tombol" class="nav-link active" onclick="dsm()"><i class="fas fa-sync-alt"> NDVI </i></button></li>
                <!-- <li class="nav-item"><button class="nav-link" onclick="dsm()">NDVI</button></li> -->
            </ul>
            </header>
        </div>
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title text-center">MULTIPLE RESIZE FOTO ORIGINAL NDVI</h3>
            </div>
                <form action="<?php echo base_url().'index.php/Manual_Upload/resize_image_ndvi'?>" method="post" enctype="multipart/form-data"> 
                    <div class="card-body">
                        <div class="row">
                            <!-- <div class="col-2">
                                <input required type="text" name="kodeLokasi" class="form-control" placeholder="Lokasi">
                                <input type="hidden" name="kategori" value="DSM">
                            </div>
                            <div class="col-3">
                                <input required type="text" name="dateMod" class="form-control" placeholder="Date Modified">
                            </div> -->
                            <div class="col-3">
                                <input required type="file" class="file" name="filefoto[]" accept="image/*" multiple>                
                            </div>
                            <!-- <div class="col-3">
                                <input required type="file" class="file" name="filepdf[]" accept="application/pdf" multiple>               
                            </div> -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</html>