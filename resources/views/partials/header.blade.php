  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('dashboard')}}">

        <img src="{{ asset('images/logo.png') }}" alt="" width="50px">
        IMS
      </a>


  
      <div style="display:float;right:0px; margin-right: 10px; margin-top: 0px; margin-bottom: px; ">
  

        {{-- @if(Auth::check()) --}}
      <nav  class="navbar navbar-expand-lg navbar-light bg-light">
        <div style="border: #dc3545 1ex " class="profile" >
          <img src="{{ asset('images/user.png') }}" alt="" width="50px">
          <button href=""  class="btn btn-secondary me-2" type="button">
            <!-- Display user's name -->
            {{ Auth::user()->name }}
          </button>
       
        
          <form action="{{ route('logout') }}" method="POST" class="d-inline-block">
            @csrf
            @method('POST')
            <button type="submit" class="btn btn-danger">Log Out</button>
        </form>

        </div>
      </nav>
    
  


      <button class="navbar-toggler mt-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src="{{ asset('images/logo.png') }}" alt="" width="50px">
            IMS
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a   class="nav-link active" aria-current="page" href="/product">
                    <i class="ri-dashboard-line"></i>
                    <span>Product</span>
                </a>
            </li>
            <li class="nav-item">
                <a   class="nav-link active" aria-current="page" href="/user">
                    <i class="ri-dashboard-line"></i>
                    <span>User</span>
                </a>
            </li>
          </ul>
  
        </div>
      </div>
    </div>
  </div>

  </div>


 
  </nav>


  <style>

body {
      margin: 20px;
    }

    /* Optional: Customize the logout button */
    .logout-btn {
      background-color: #dc3545;
      color: #fff;
    }

    .nav{
      align-items: right;


    }

    //profile im right
    .profile {
      display: flex;
      align-items: right;
      border: 1px solid black;
      justify-content: right;
      flex-direction: row;
      font-family: 'Montserrat', sans-serif;
      height: 100vh;
      background-color: #DFB7E3;
      background: linear-gradient(to right, white, #DFB7E3);
    }



  </style>