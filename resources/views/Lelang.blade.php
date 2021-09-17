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
        <title>Dashboard </title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="{{url('assets/css/styles.css')}}" rel="stylesheet"/>
        <link
            href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
            rel="stylesheet"
            crossorigin="anonymous"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="home2">HOME</a>
            
            <!-- Navbar Search-->
            <form
                class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        id="userDropdown"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <br>
        <style>
            
  .pushable {
    background: hsl(340deg 100% 32%);
    border-radius: 12px;
    border: none;
    padding: 0;
    cursor: pointer;
    outline-offset: 4px;
    display: block;
  margin-left: auto;
  margin-right: auto;
  }
  .front {
    display: block;
    padding: 12px 42px;
    border-radius: 12px;
    font-size: 1.25rem;
    background: hsl(345deg 100% 47%);
    color: white;
    transform: translateY(-6px);
  }

  .pushable:active .front {
    transform: translateY(-2px);
  }
  table {
            border-spacing: 0px;
            table-layout: fixed;
            margin-left: auto;
            margin-right: auto;
        }
  
        th {
           
            border: 1px solid black;
        }
  
        td {
            border: 1px solid black;
            word-wrap: break-word;
        }
</style>

<button class="pushable">
  <span class="front">
    <a href="Bid"style="color:white;">Bid Barang</a> 
  </span>
</button>
        <div class="card-body">
            <table class="table table-bordered">
              <thead>
                  <th>No</th>
                  <th>id Barang</th>
                  <th>Nama</th>
                  <th>Gambar</th>
                  <th colspan="2">Deskripsi</th>
                 
                   <th>Open Bid</th>
                  <th>Close Bid</th>
                 
              </thead>
              <?php $no=1;?>
                  @foreach($data_barang as $Barang)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$Barang->id}}</td>
                      <td>{{$Barang->Nama}}</td>
                      <td  width="30%">
                          <img src="{{asset('img/'.$Barang->gambar)}}"height="20%" width="100%" alt="" srcset=""
                      </td>
                      <td colspan="2">{{$Barang->deskripsi}}</td>
                      
                      <td>{{$Barang->OB}}</td>
                      <td>{{$Barang->waktu}}</td>
                      
                      
                  </tr>
                      </tr>
                  @endforeach
                  <div class="card-body">
              <table class="table table-boredered">
              <thead>
                  <th>No</th>
                  <th>nama</th>
                  <th>id_barang</th>
                    <th> Bid</th>
                  <th>Time</th>
                  <th>No telphone</th>
                  
                  </thead>
              <?php $no=1;?>
                  @foreach($data_bid as $Bid)
                  <tr>
               
                    <td>{{$no++}}</td>
                   
                      <td>{{$Bid->Nama}}</td>
                      <td>{{$Bid->id_gambar}}</td>
                      <td>{{$Bid->Bid}}</td>
                      
                      <td>{{$Bid->created_at}}</td>
                      <td>{{$Bid->No_telphone}}</td>
                      
                      
                  </tr>
                      </tr>
                  @endforeach
              <tbody>