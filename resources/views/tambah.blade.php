<!DOCTYPE html>
<html>
<style>
       body {
  background-image: url('images/10.jpg');
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
<div class="center">


<h1 style="color:white;">TAMBAH BARANG </h1>
</div>
<br>
<br>
<form class="form1" form action="{{url('simpan-data')}}" method="POST" enctype="multipart/form-data">
@csrf
<div>
 
      
 
    <label for="Nama">Nama Barang</label>
    <input type="text" id="Nama" name="Nama" placeholder="Nama Brang">
    <label for="deskripsi">Deskripsi</label>
    <input type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
    <label for="OB">OB</label>
    <input type="text" id="OB" name="OB" placeholder="Open Bid">
    

  
    <label for="waktu">Close BID:</label>

<input type="datetime-local" id="meeting-time"
       name="waktu" 
       min="00.00" max="23.00">

       <label for="gambar">pilih gambar</label>
<br>
<br>
<input type="file"
       id="gambar" name="gambar"
       accept="image/png, image/jpeg">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
