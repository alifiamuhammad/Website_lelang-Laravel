<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Register Form </title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>
    <style>
body {
  background-image: url('images/retro.jpg');
}
</style>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Register</h3>
                                    </div>
                                    <div class="card-body">
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                
              <label class="small mb-1" for="inputEmailAddress">Username</label>
            <input class="form-control py-3" id="inputEmailAddress" name="username"    type="text"
           placeholder="Masukkan Username"/>
                <br>
               
                @if($errors->has('password'))
                                                <span style="color: red"class="error">{{ $errors->first('password') }}</span>
                                                @endif <label class="small mb-1" for="inputEmailAddress">Passowrd</label>
           <div class="input-group">
               
  <input type="password" class="form-control pwd" id="login_password" placeholder="Password" name="password" required>
     <span class="input-group-btn" id="eyeSlash">
       <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
     </span>
     <span class="input-group-btn" id="eyeShow" style="display: none;">
       <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
     </span>
  </div>
  <br>
  <label class="small mb-1" for="inputEmailAddress">Register as :</label>
                <div>
                    
                   
  <input type="radio" id="huey" name="role" value="member"
         checked>
  <label for="huey">Member</label>
</div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                
            </form>
   	 	</div>
   	 </div>
   </div>

   <script>
      function visibility3() {
  var x = document.getElementById('login_password');
  if (x.type === 'password') {
    x.type = "text";
    $('#eyeShow').show();
    $('#eyeSlash').hide();
  }else {
    x.type = "password";
    $('#eyeShow').hide();
    $('#eyeSlash').show();
  }
}
</script>