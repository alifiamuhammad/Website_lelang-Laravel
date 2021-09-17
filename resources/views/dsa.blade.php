<!DOCTYPE html>
<html>
<style>
body {
  background-image: url('images/00.jpg');
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

<center>BID</center>
<br>
<br>
<form class="form1"form action="{{url('simpan-bid')}}" method="POST" enctype="multipart/form-data">
@csrf
<div>
<div>

    <label for="Nama">Nama</label>
    <input type="text" id="Nama" name="Nama" placeholder="" value="{{ Auth::user()->username }}"
    readonly>
    <label for="id_gambar">Id gambar</label>
    <input type="text" id="id_gambar" name="id_gambar" placeholder="id Barang"required>
    <label for="Bid">Bid</label>
    <input type="text" id="Bid" name="Bid" placeholder="Your last name.."required>
    <label for="no telphone">no telphone</label>
    <input type="text" id="No_telphone" name="No_telphone" placeholder="No_telphone"required>

    <input type="submit" value="Submit">
  
  </form>
</div>

</body>
</html>
