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
            <di v class="col-md-6">
              <div class="card shadow">
                <div class="card-header text-center font-weight-bold">
                  <h4 style="text-transform:uppercase">Registration From</h4>
             
                </div>
                <div class="card-body">
           
            
           
           
      @if(session('success'))

      <p class="alert alert-success" role="alert">
        <strong>{{session('success')}}</strong>
      </p>
       @endif

                  <form action="{{ route('register.store')}}" method="POST">
                    @csrf
                    <div class="form-gorup mb-3">
                   
                    <div class="form-gorup mb-3">
                      <label for="name">Name</label>
                      <input type="text" name="name"  class="form-control"  class="@error('name') is-invalid @enderror" >
                    </div>
                 
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    <div class="form-gorup mb-3">
                      <label for="emial">Email</label>
                      <input type="email" name="email"  class="form-control" class="@error('email') is-invalid @enderror" >
                    </div>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    <div class="form-gorup mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone"  class="form-control"  class="@error('phone') is-invalid @enderror" >
                      </div>
      
                      @error('phone')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
    
                    <div class="fome-group mb-3 text-center">
                <button type="submit" class="btn btn-info">Register</button>
                    </div>
                  </form>
                
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    


















 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>