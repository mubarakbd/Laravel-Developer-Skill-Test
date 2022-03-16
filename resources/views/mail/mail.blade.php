<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
  </head>
  <body>
    
  <div class="py-5">
  
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
        <div class="card">
          <div class="card-body">
             <div class="card-header">Registration Success Email</div>
               <div class="card-body-text-center">
                  <p class="font-weight-bold text-dark"> Dear {{$data['name']}}</p> 
                   Thank you for your registration.your registered email address is
                    
                    <p class="font-weight-bold text-dark">{{$data['email']}}</p>
                    and your phone number <p class="font-weight-bold">{{$data['phone']}}</p>
               </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 






 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>