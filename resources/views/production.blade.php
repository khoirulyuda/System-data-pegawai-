<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PRODUCTION</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Material CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{asset('template/style.css')}}" />
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <aside>
                    <div class="top">
                        <div class="logo">
                            {{-- <img src="" alt="" /> --}}
                            <h1>Mossi<span class="primary"> App</span></h1>
                        </div>
                        <div class="close" id="close-btn">
                            <span class="material-symbols-sharp"> close </span>
                        </div>
                        </div>
                        <div class="sidebar">
                        <a href="#" class="active">
                            <span class="material-symbols-sharp"></span>
                            <h2>Production</h2>
                        </a>
                        {{-- <a href="pibheader">
                           <span class="material-symbols-sharp">
                            
                            </span>
                            <h2>Data Import</h2>
                        </a> --}}
                        {{-- <a href="/datang">
                            <span class="material-symbols-sharp">
                            
                            </span>
                            <h2>Incoming</h2>
                        </a> --}}
                        {{-- <a href="/">
                            <span class="material-symbols-sharp">
                            insights
                            </span>
                            <h3>Analytics</h3> 
                        </a>--}}
                        {{-- <a href="/production">
                            <span class="material-symbols-sharp"></span>
                            <h2>Production</h2> --}}
                            {{-- <span class="message-count">28</span> 
                        </a>--}}
                        {{-- <a href="/outgoing">
                            <span class="material-symbols-sharp"></span>
                            <h2>Outgoing</h2>
                        </a> --}}
                        {{-- <a href="/ceisa">
                            <span class="material-symbols-sharp"></span>
                            <h2>PPJK</h2>
                        </a> --}}
                        {{-- <a href="/user">
                            <span class="material-symbols-sharp"></span>
                            <h2>User</h2>
                        </a> --}}
                        {{-- <a href="#">
                            <span class="material-symbols-sharp"> report </span>
                            <h3>Reports</h3>
                        <a href="#">
                            <span class="material-symbols-sharp"> settings </span>
                            <h3>Settings</h3>
                        </a>
                        <a href="#">
                            <span class="material-symbols-sharp"> add </span>
                            <h3>Add Product</h3>
                        </a> --}}
                        <a href="/logout">
                            <span class="material-symbols-sharp"> logout </span>
                            <h2>Logout</h2>
                        </a>
                    
                    </div>
                </aside>
            </div>
            <div class="col-10">
                <main>
                    
                    <div class="top">
                    <button id="menu-btn">
                        <span class="material-symbols-sharp">
                        menu
                        </span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-symbols-sharp active">
                        light_mode
                        </span>
                        <span class="material-symbols-sharp">
                        dark_mode
                        </span>
                    </div>
                    <div class="profile">
                        <div class="info">
                        <p>hey, {{-- <b>{{ Auth::user()->name }}</b> --}}</p>
                        {{-- <small class="text-muted mt-2px">{{ Auth::user()->role }}</small> --}}
                        </div>
                        {{-- <div class="profile-photo">
                        <img src="./images/kartun2.jpg">
                        </div> --}}
                    </div>
                    </div>
                    <h1>Dashboard Production</h1>
                    <div class="insights">

                    <div class="sales">
                        <span class="material-symbols-sharp">
                        analytics
                        </span>
                        <div class="middle">
                        <div class="lef">
                            <h1>Customer INDOMOBIL</h1>
                        </div>
                        <div class="progress">
                            <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                            <h2>{{-- {{ $jumlahcust1 }} --}}</h2>
                            </div>
                        </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <!-- END OF SALES -->

                    <div class="expenses">
                        <span class="material-symbols-sharp">
                        bar_chart
                        </span>
                        <div class="middle">
                        <div class="lef">
                            <h1>Customer MMKI</h1>
                        </div>
                        <div class="progress">
                            <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                            <h2>{{-- {{ $jumlahcustomer }} --}}</h2>
                            </div>
                        </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <!-- END OF EXPENSES -->

                    <div class="income">
                        <span class="material-symbols-sharp">
                        stacked_line_chart
                        </span>
                        <div class="middle">
                        <div class="lef">
                            <h1>Total Data</h1>
                        </div>
                        <div class="progress">
                            <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                            <h2>{{-- {{ $jumlahdata }} --}}</h2>
                            </div>
                        </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <!-- END OF INCOME -->
                    </div>
                    <!-- END OF INSIGHTS -->

                    
                    <div class="col">
                        <div class="recent-orders">
                        <h2>Data Production</h2>         
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <form action="/production" method="GET">
                                <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                                </form>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-success">Tambah +</a>
                                {{-- {{ Session::get('halaman_url') }} --}}
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Import Data
                                </button>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-info">Export PDF</a>
                            </div>
                            <div class="col-auto">
                                <a href="/productionexcel" class="btn btn-success">Export Excel</a>
                            </div>
                            <!-- Button trigger modal -->
                            

                            


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <form action="/productionimport" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <input type="file" name="file" required>
                                            </div>
                                            
                                    </div>
                                        
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Import</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div style="overflow-x:auto;">
                        <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Aksi</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Customer Code</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Spec Group</th>
                                    <th scope="col">Group</th>
                                    <th scope="col">Cut Line</th>
                                    <th scope="col">Cut Date</th>
                                    <th scope="col">MC</th>
                                    <th scope="col">Mossi No</th>
                                    <th scope="col">Rank</th>
                                    <th scope="col">EPA Flag</th>
                                    <th scope="col">Spec Code</th>
                                    <th scope="col">Spec Name</th>
                                    <th scope="col">Coating</th>
                                    <th scope="col">Thick</th>
                                    <th scope="col">Width</th>
                                    <th scope="col">Lenght1</th>
                                    <th scope="col">Lenght2</th>
                                    <th scope="col">Material Weight</th>
                                    <th scope="col">Rewind Weight</th>
                                    <th scope="col">Material Used</th>
                                    <th scope="col">Semi F Weight</th>
                                    <th scope="col">Rewind Semi F Weight</th>
                                    <th scope="col">Semi F Used</th>
                                    <th scope="col">Product Weight</th>
                                    <th scope="col">Rewind Product Weight</th>
                                    <th scope="col">Product Used</th>
                                    <th scope="col">Total Used</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Semi F</th>
                                    <th scope="col">Total Prod Semi</th>
                                    <th scope="col">Scrap</th>
                                    <th scope="col">Yields</th>
                                    <th scope="col">Tonyu PCS</th>
                                    <th scope="col">Maker</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp @foreach ($data as $index => $row )
                                    <tr>
                                        <th scope="row">{{ $index + $data -> firstItem() }}</th>
                                        <td>
                                            <a
                                                href="/editproduction/{{ $row->id }}"
                                                class="btn btn-info"
                                            >
                                                Edit
                                            </a>
                                            <a
                                                href="#"
                                                class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}"
                                            >
                                                Delete
                                            </a>
                                        </td>
                                        <td>{{ $row->created_at}}</td>
                                        <td>{{ $row->CustomerCode}}</td>
                                        <td>{{ $row->CustomerName }}</td>
                                        <td>{{ $row->SpecGroup }}</td>
                                        <td>{{ $row->Group }}</td>
                                        <td>{{ $row->CutLine }}</td>
                                        <td>{{ $row->CutDate }}</td>
                                        <td>{{ $row->MC }}</td>
                                        <td>{{ $row->MossiNo }}</td>
                                        <td>{{ $row->Rank }}</td>
                                        <td>{{ $row->EPAflag }}</td>
                                        <td>{{ $row->SpecCode }}</td>
                                        <td>{{ $row->SpecName }}</td>
                                        <td>{{ $row->Coating }}</td>
                                        <td>{{ $row->Thick }}</td>
                                        <td>{{ $row->Width }}</td>
                                        <td>{{ $row->Lenght1 }}</td>
                                        <td>{{ $row->Lenght2 }}</td>
                                        <td>{{ $row->MaterialWeight}}</td>
                                        <td>{{ $row->RewindWeight }}</td>
                                        <td>{{ $row->MaterialUsed }}</td>
                                        <td>{{ $row->SemiFweight }}</td>
                                        <td>{{ $row->RewindSemiFweight }}</td>
                                        <td>{{ $row->SemiFused }}</td>
                                        <td>{{ $row->ProductWeight }}</td>
                                        <td>{{ $row->RewindProductWeight }}</td>
                                        <td>{{ $row->ProductUsed }}</td>
                                        <td>{{ $row->TotalUsed }}</td>
                                        <td>{{ $row->Qty1 }}</td>
                                        <td>{{ $row->Product }}</td>
                                        <td>{{ $row->Qty2 }}</td>
                                        <td>{{ $row->SemiF }}</td>
                                        <td>{{ $row->TotalProdSemi }}</td>
                                        <td>{{ $row->Scrap }}</td>
                                        <td>{{ $row->Yields }}</td>
                                        <td>{{ $row->TonyuPcs }}</td>
                                        <td>{{ $row->Maker }}</td>
                                        {{-- <td>
                                            <a
                                                href="/tampilkandata/{{ $row->id }}"
                                                class="btn btn-info"
                                            >
                                                Edit
                                            </a>
                                            <a
                                                href="#"
                                                class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}"
                                            >
                                                Delete
                                            </a>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}

                    </div>
                    </div>
                    </div>
                
            
                </main>
            </div>

        </div>


        </div>
      
      <!-- -----END OF ASIDE----- -->

        
      <!-- END OF MAIN -->

      {{-- <div class="right">
        <div class="top">
          <button id="menu-btn">
            <span class="material-symbols-sharp">
            menu
            </span>
          </button>
          <div class="theme-toggler">
            <span class="material-symbols-sharp active">
            light_mode
            </span>
            <span class="material-symbols-sharp">
            dark_mode
            </span>
          </div>
          <div class="profile">
            <div class="info">
              <p>hey, <b>Maposai</b></p>
              <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
              <img src="./images/kartun2.jpg">
            </div>
          </div>
        </div> --}}
        <!--END OF TOP  -->

        <!-- END OF SALES ANALYTICS -->

       <!-- END OF MAIN -->
    </div>

    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="{{ asset('template/./index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
  </body>

  <script>
    $('.delete').click(function(){
        var pegawaiid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        swal({
                    title: "Yakin ?",
                    text: "Kamu akan menghapus data dengan nama "+nama+" ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/productiondelete/"+pegawaiid+" "
                        swal("Data berhasil dihapus!", {
                        icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
    });
        
</script>

<!--toastr-->
<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
    
</script>

</html>
