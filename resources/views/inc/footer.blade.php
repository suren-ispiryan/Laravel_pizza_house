@section('footer')

<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <div class="container p-4">    
    <div class="row">

      {{--  empty --}}
      <div class="col-md-1">

      </div>

      {{-- Subscribe --}}

      <div class="col-md-4">    
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: center">Subscribe for more</p>
          </div>
        </div>

        <p style="color: green">{{ session('msg1') }}</p>

        <form action="signup_success" method="POST" style="text-align: center">
          <div class="row d-flex justify-content-center"> 
            @csrf
            <div class="col-md-12">
              <div class="form-outline form-white mb-4"z>
                <input name="name" type="text" class="form-control" placeholder="Your name"/>
              </div>
            </div>  
            
            <div class="col-md-12">
              <div class="form-outline form-white mb-4"z>
                <input name="password" type="password" class="form-control" placeholder="Password"/>
              </div>
            </div>  

            <div class="col-md-12">
              <div class="form-outline form-white mb-4">
                <input name="email" type="email" class="form-control" placeholder="Email"/>
              </div>
            </div>     

            <div class="col-md-12">
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
          
          </div>
        </form>
      </div>


{{--  empty --}}
<div class="col-md-2">

</div>


      {{-- Login --}}

      <div class="col-md-4">    
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: center">Login for more</p>
          </div>
        </div>

        <form action="" method="POST" style="text-align: center">
          <div class="row d-flex justify-content-center">          
            @csrf
            <div class="col-md-12">
              <div class="form-outline form-white mb-4"z>
                <input name="logPassword" type="password" id="form5Example2" class="form-control" placeholder="Password"/>
              </div>
            </div>  

            <div class="col-md-12">
              <div class="form-outline form-white mb-4">
                <input name="logEmail" type="email" id="form5Example2" class="form-control" placeholder="Email"/>
              </div>
            </div>     

            <div class="col-md-12">
              <button type="submit" class="btn btn-outline-light mb-4">
                Login
              </button>
            </div>
          </div>
        </form>

      </div>

      {{--  empty --}}
      <div class="col-md-1">

      </div>
      
    </div>
  </div>

  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);"> © 2021 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">PizzaHouse.com</a>
  </div>

</footer>

