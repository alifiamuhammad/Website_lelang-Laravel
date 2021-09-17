<!DOCTYPE html>
<html>
    <style>
       body {
  background-image: url('images/111.jpg');
}
.center {
  text-align: center;
  
}
form {
  display: grid;
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin: 2rem auto 0 auto;
  max-width: 600px;
  padding: 1em;
}
form input {
  background: #fff;
  border: 1px solid #9c9c9c;
}
form button {
  background: lightgrey;
  padding: 0.7em;
  width: 100%;
  border: 0;
}
form button:hover {
  background: gold;
}

label {
  padding: 0.5em 0.5em 0.5em 0;
}

input {
  padding: 0.7em;
  margin-bottom: 0.5rem;
}
input:focus {
  outline: 3px solid gold;
}

@media (min-width: 400px) {
  form {
    grid-template-columns: 200px 1fr;
    grid-gap: 16px;
  }

  label {
    text-align: right;
    grid-column: 1 / 2;
  }

  input,
  button {
    grid-column: 2 / 3;
  }
}
</style>
<body>
<div class="container">
   	 <div class="content">
   	 	<div class="row">
            <h4>Update Data Barang</h4>
           
            <form class="form1" form action="{{url('Barang'.'/'.$Barang->id.'/'.'update/')}}" method="POST">
                @method('patch')
                @csrf
              <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="Nama" value="{{$Barang->Nama}}">
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{$Barang->deskripsi}}" >
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">OB</label>
                    <input type="text" class="form-control" name="OB" value="{{$Barang->OB}}" >
                    <div class="form-text"></div>
                </div>
                <label for="waktu">Close BID:</label>
            <input type="datetime-local" id="meeting-time"
                name="waktu" 
                    min="00.00" max="23.00" value="{{$Barang->waktu}}">
              
                    
             
                  <button type="submit" class="btn btn-primary">Update</button>
              </div>
                
            </form>
   	 	</div>
   	 </div>
   </div>
</body>
</html>