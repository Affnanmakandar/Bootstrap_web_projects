<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="keto meal plan" author="Affnan">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css" integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">  
</head>
<body>
  <form action="request.php"  method="POST" class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">Contact Us</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <input type="text" class="form-control" name="firstname" placeholder="Enter your Name"  required >
        </div>
        <div class="col-lg-12 mt-4">
            <input type="text" class="form-control" name="surname" placeholder="Enter your Surname" required>
        </div>
        <div class="col-lg-12 mt-4">
            <input type="email" class="form-control" name="mail" placeholder="Enter Mail Id *"  required>
        </div>
        <div class="col-lg-12 mt-4">
            <textarea name="message" class="form-control" placeholder="Message" rows="5" required></textarea>
        </div>
    </div>
    <!-- <div class="row mt-4">
        <div class="col-lg-12">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check" name="check">
                <label class="form-check-label" for="check">I agree with terms and conditions</label>
            </div>
        </div>
    </div> -->
    <div class="row mt-4">
        <div class="col-lg-12 mb-2">
            <button type="submit" class="btn btn-danger btn-block" name="submit">Submit</button>
        </div>
    </div>
    </hr>
  </form>
</body>
</html>
<?php include 'footer.php'; ?>
