<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="main.js"></script>
</head>
<body>
    <div id="container">
        <div class="top">
            <img src="{{ asset('images/logo.png') }}" alt="" width="50px">
            IMS
        </div>
        <form  method="POST" action="{{ route('login') }}">
            @csrf
            <input name="email" type="email" placeholder="Email" class="input">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red;">{{ $message }}</strong>
                </span>
            @enderror

            <input name="password" type="password" placeholder="Password" class="input">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red;">{{ $message }}</strong>
                </span>
            @enderror
            
        
            <button type="submit">Submit</button>
            <a href=# class="signup" onclick="switchAccount()">
                Do not have an account yet ?
            </a>
        </form>
    </div>



    {{-- <div id="container2">
        <div class="top">
            <h1>Sign Up Page</h1>
        </div>
        <form>
            <input type="email" placeholder="Email" class="input">
            <input type="password" placeholder="Password" class="input">
            <div class="login_option">
                <a href="#" class="account"><i class="fa-brands fa-google" style="color: #000000;"></i></a>
                <a href="#" class="account"><i class="fa-brands fa-github" style="color: #000000;"></i></i></a>
                <a href="#" class="account"><i class="fa-brands fa-twitter" style="color: #000000;"></i></a>
            </div>
            <button name="signup" type="button">Sign Up</button>
            <a href=# class="signup" onclick="switchAccount2()">
                Already have an account ?
            </a>
        </form>
    </div> --}}
</body>
</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Pixelify+Sans&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  font-family: 'Montserrat', sans-serif;
  height: 100vh;
  background-color: #DFB7E3;
  background: linear-gradient(to right, white, #DFB7E3);
}

#container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    border-radius: 15px;
    min-height: 280px;
    min-width: 300px;
    background-color: white;
    overflow: hidden;
}

#container2 {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    border-radius: 15px;
    min-height: 280px;
    min-width: 300px;
    background-color: white;
    overflow: hidden;
    display: none;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    height: 100%;
}

.input {
    background-color: #eee;
    border: none;
    border-left: #DFB7E3 solid 1px;
    padding: 10px;
    border-bottom: #DFB7E3 solid 1px;
}

.top {
    background-color: #c4d3ec;
    background: linear-gradient(to left, #DFB7E3, #B5C7E7);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 150px;
    border-radius: 0 0 75px 75px;
}

.top:hover {
    transition: .4s;
    border-radius: 0;
    width: 100%;
}

.top:not(:hover) {
    transition: .4s;
    border-radius: 0 0 75px 75px;
    width: 97%;
}

.top h1 {
    color: white;
    font-size: 30px;
}

.login_option {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.account {
    border: solid 1px #ccc;
    padding: 10px;
    border-radius: 5px;
    overflow: hidden;
}

.account:hover {
    border: solid 1px #DFB7E3;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    transition: .4s;
}

.account:not(:hover) {
    transition: .4s;
    border: solid 1px #ccc;
    box-shadow: none;
}

button {
    padding: 10px 30px 10px 30px; 
    background-color: #eee;
    border: solid 1px #ccc;
    border-radius: 5px;
}

button:hover {
    background-color: #ccc;
    transition: .4s;
    border: solid 1px #DFB7E3;
}

button:not(:hover) {
    transition: .4s;
    background-color: #eee;
}

.signup {
    color: black;
    text-decoration: none;
    font-size: 12px;
}

@media screen and (max-width: 338px) {
    #container {
        min-width: 250px;
    }
    .top:hover {
        border-radius: 0;
        border-radius: 0 0 75px 75px;
        width: 97%;
    }
    #container2 {
        min-width: 250px;
    }
    button:hover {
        background-color: #eee;
        transition: none;
    }
    .account:hover {
        box-shadow: none;
        transition: none;
        border: solid 1px #ccc;
    }
}
</style>