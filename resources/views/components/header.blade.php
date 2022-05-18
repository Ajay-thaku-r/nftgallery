<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic title here</title>
    <!-- Bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- External css -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}" />
    <!-- js bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    @if(session('LoginData'))
    <section class="bg-dark text-light">
        <div class="container ">
            <div class="row">
                <div class="col-4">
                    <a href="/"><img src="{{ url('img/logo-edited.jpg') }}" alt="" class="w-25"></a>
                </div>
                <div class="col-8 align-self-center justify-content-end d-flex">
                   <ul class="d-inline">
                       <li class="d-inline px-2">
                           <a href="" class="text-decoration-none text-light"><button class="btn btn-outline-info">Apply For Listing</button></a>
                        </li>
                       <li class="d-inline px-2">
                           <a href="" class="text-decoration-none text-light"><button class="btn btn-outline-info">Launchpad</button></a>
                        </li>
                       <li class="d-inline px-2">
                            <a href="/logout"><button class="btn btn-outline-info">Logout</button></a>
                        </li>
                   </ul>
                </div>
            </div>
        </div>   
    </section>  
    @endif
    
