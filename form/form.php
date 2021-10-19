<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/ppu.png" alt="" width="40" height="45" class="d-inline-block align-text-top">
            palestine polytechnic university
          </a>
        </div>
      </nav>
      <img class="wave" src="img/wave.png">
      
      <div class="container">
          <div class="img">
              <img src="img/img.png">
          </div>
          <div class="form">
             
                  <img  class="avatar" src="img/avatar.png">
                  <form class="row g-3" action="result.php" method="post">
                    <div class="col-md-6">
                      <label for="inputname" class="form-label">student name</label>
                      <input type="text" class="form-control" name="sname">
                    </div>
                    <div class="col-md-6">
                      <label for="inputsudentnumber" class="form-label">sudent number</label>
                      <input type="text" class="form-control"  name="snumber">
                    </div>
                    <div class="col-12">
                      <label for="inputNumber" class="form-label">phone number</label>
                      <input type="text" class="form-control" name="phonenumber" placeholder="05990000">
                    </div>
                    
                    <select>
    
    <option value="graphic"<?php if ( $row["major"] == 'graphic') echo ' selected="selected"'; ?>>graphic</option>
    <option value="accounting"<?php if ($row["major"] == 'accounting') echo ' selected="selected"'; ?>>accounting</option>

    <option value="informathion_system"<?php if ($row["major"] == '_information system') echo ' selected="information_system"'; ?>>informathion_system</option>
   
                    <!-- <select  class="form-select" aria-label="Default select example" name="major">
                        <option selected  >select your major</option>
                        <option value="1">information system</option>
                        <option value="2">graphic</option>
                        <option value="3">accounting</option>
                      </select>
                       -->
                      
                    <div class="col-md-6">
                      <label for="inputAdress" class="form-label">adress</label>
                      <input type="text" class="form-control" name="adress">
                    </div>
                    <div class="col-md-6">
                      <label for="date" class="form-label">Date of birth</label>
                      <input type="date"  name="date" class="form-control"
                      value="<?php echo date('Y-m-d'); ?>"
                    input>
                    </div>
                   
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                  </form>
              
                </div>
                
            </div>


          
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>