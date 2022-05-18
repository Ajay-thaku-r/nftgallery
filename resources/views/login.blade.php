<x-header />
    <section class="bg-dark text-light">
        <div class="container">
           <div class="row row-header align-items-center">
               <div class="col">
                   <div class="row justify-content-center">
                      
                       <div class="col-6  text-center">
                            
                           <div class="w-75 border rounded border-light p-3 m-auto">
                                @if(session('status'))
                                    <h4 class="alert alert-light">{{session('status')}}</h4>
                                @endif
                                <form action="/login" method="post" class="" autocomplete="off">
                                    @csrf 
                                    <input type="text" name="email" placeholder="Email address or phone number" class="form-control p-2">
                                    <input type="password" name="password" placeholder="Password" class="form-control mt-3 p-2">
                                    <input type="submit" name="login" value="Log In" class="btn btn-outline-light form-control fw-bold mt-3 fs-5">
                                </form>
                                <p class="mt-3"><a href="#"class="text-light text-decoration-none ">Forgotten Password?</a></p>
                                    <hr class="text-info">
                                    <button class="fw-bold btn btn-outline-light px-4 py-2 fs-5" data-bs-toggle="modal" data-bs-target="#signup_modal">Create New Account</button>
                            </div>
                            <div class="modal fade" id="signup_modal" tabindex="-1" aria-labelledby="Sign Up" aria-hidden="true">
                           
                                <div class="modal-dialog ">
                                    <div class="modal-content bg-dark border border-light" >
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Sign Up</h5>
                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/register"method="post" autocomplete="off">
                                                @csrf 
                                                <input type="text" name="f_name" placeholder="First name" class="form-control p-2">
                                                <span class="text-danger">@error('f_name'){{$message}}@enderror</span>
                                                <input type="text" name="l_name" placeholder="Last name" class="form-control mt-3 p-2">
                                                <span class="text-danger">@error('l_name'){{$message}}@enderror</span>
                                                <input type="text" name="email" placeholder="Mobile number or email address" class="form-control mt-3 p-2">
                                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                <input type="password" name="password" placeholder="New password" class="form-control mt-3 p-2">
                                                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                                <input type="date" name="dob" class="form-control mt-3 p-2">
                                                <span class="mt-3">Male</span>
                                                <input type="radio" name="gender" value="Male" class="mt-3 p-2" checked="checked">
                                                <span class="mt-3">Female</span>
                                                <input type="radio" name="gender" value="Female" class="mt-3 p-2">
                                                <br>
                                                <input type="submit" name="_submit" value="Sign Up" class="btn btn-outline-light mt-3"/>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
               </div>
           </div> 
        </div>
    </section>

<x-footer />