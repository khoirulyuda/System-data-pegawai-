<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Exim</title>

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
                            <h2>Detail Data</h2>
                        </a>
                        {{-- <a href="#">
                           <span class="material-symbols-sharp">
                            
                            </span>
                            <h2>Detail Data</h2>
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
                            <h3>Analytics</h3> --}}
                       {{--  </a>
                        <a href="/production">
                            <span class="material-symbols-sharp"></span>
                            <h2>Production</h2> --}}
                            {{-- <span class="message-count">28</span> --}}
                        {{-- </a> --}}
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
                        {{-- <p>hey, <b>{{ Auth::user()->name }}</b></p> --}}
                        {{-- <small class="text-muted mt-2px">{{ Auth::user()->role }}</small> --}}
                        </div>
                        {{-- <div class="profile-photo">
                        <img src="./images/kartun2.jpg">
                        </div> --}}
                    </div>
                    </div>
                    <h1>Detail Data PIB No: {{ $data->PibNo }}</h1>   
                    <h2>Tanggal PIB : {{ $data->PibTg }}</h2>   
                    <h2>CAR: {{ $data->Car }}</h2>
                    <h2>InvoiceNo : {{ $data->incomings->InvoiceNo }}</h2>
                    <h2>EnterDate : {{ $data->incomings->EnterDate }}</h2>
                    <h2>Nilai CIF : {{ $data->KdVal }} {{ $data->Cif }}</h2>


                    
                    <div class="col">
                        <div class="recent-orders">
                                
                        <div class="row g-3 align-items-top">
                            <div class="col">
                                <h1>Detail Incoming</h1> <br> 
                                        <h2>OwnerCust : {{ $data->incomings->OwnerCust }}</h2>
                                        {{-- <h2>Abbr : {{ $data->incomings->Abbr }}</h2> --}}
                                        <h2>MossiNo : {{ $data->incomings->MossiNo }}</h2>
                                        {{-- <h2>MC : {{ $data->incomings->MC }}</h2> --}}
                                        <h2>SpecGroup : {{ $data->incomings->SpecGroup }}</h2>
                                        <h2>SpecCode : {{ $data->incomings->SpecCode }}</h2>
                                        <h2>SpecName : {{ $data->incomings->SpecName }}</h2>
                                        {{-- <h2>Coating : {{ $data->incomings->Coating }}</h2> --}}
                                        <h2>Thick : {{ $data->incomings->Thick }}</h2>
                                        <h2>Width : {{ $data->incomings->Width }}</h2>
                                        <h2>Lenght1 : {{ $data->incomings->Lenght1 }}</h2>
                                        <h2>Lenght2 : {{ $data->incomings->Lenght2 }}</h2>
                                        <h2>EnterDate : {{ $data->incomings->EnterDate }}</h2>
                                        {{-- <h2>MatEnterDate : {{ $data->incomings->MatEnterDate }}</h2> --}}
                                        <h2>Qty : {{ $data->incomings->Qty }}</h2>
                                        <h2>Weight : {{ $data->incomings->Weight }}</h2>
                                        {{-- <h2>StoreFlag : {{ $data->incomings->StoreFlag }}</h2>
                                        <h2>RDMno : {{ $data->incomings->RDMno }}</h2>
                                        <h2>CaseNo : {{ $data->incomings->CaseNo }}</h2>
                                        <h2>CoilNo : {{ $data->incomings->CoilNo }}</h2> --}}
                                        <h2>ContainerNo : {{ $data->incomings->ContainerNo }}</h2>
                                        <h2>Maker : {{ $data->incomings->Maker }}</h2>
                                        <h2>Shipper : {{ $data->incomings->Shipper }}</h2>
                                        {{-- <h2>InvoiceNo : {{ $data->incomings->InvoiceNo }}</h2>
                                        <h2>DamageFlag : {{ $data->incomings->DamageFlag }}</h2> --}}
                                        <h2>Price : {{ $data->incomings->Price }}</h2>
                                        {{-- <h2>EPTEflag : {{ $data->incomings->EPTEflag }}</h2>
                                        <h2>KanbanNo : {{ $data->incomings->KanbanNo }}</h2>
                                        <h2>Remark : {{ $data->incomings->Remark }}</h2> --}}
                                        <h2>Vessel : {{ $data->incomings->Vessel }}</h2>
                                        <h2>ContractNo : {{ $data->incomings->ContractNo }}</h2>
                                        <h2>UserCust : {{ $data->incomings->UserCust }}</h2>
                                       {{--  <h2>LineSJ : {{ $data->incomings->LineSJ }}</h2> --}}
                                        {{-- <h2>OutDate : {{ $data->incomings->OutDate }}</h2>
                                        <h2>UsedWeight : {{ $data->incomings->UsedWeight }}</h2>
                                        <h2>RewindWeight : {{ $data->incomings->RewindWeight }}</h2>
                                        <h2>MatWidht : {{ $data->incomings->MatWidht }}</h2>
                                        <h2>EPAflag : {{ $data->incomings->EPAflag }}</h2>
                                        <h2>Bookflag : {{ $data->incomings->Bookflag }}</h2>
                                        <h2>GentaiNo : {{ $data->incomings->GentaiNo }}</h2>
                                        <h2>PartNo : {{ $data->incomings->PartNo }}</h2>
                                        <h2>PartName : {{ $data->incomings->PartName }}</h2> --}}
                                    </div>
                                
                                    
                                    <div class="col">
                                        <h1>Detail Production</h1> <br>
                                        <h2>CustomerCode : {{ $data->productions->CustomerCode }}</h2>
                                        <h2>CustomerName : {{ $data->productions->CustomerName }}</h2>
                                        <h2>SpecGroup : {{ $data->productions->SpecGroup }}</h2>
                                        <h2>Group : {{ $data->productions->Group }}</h2>
                                        <h2>CutLine : {{ $data->productions->CutLine }}</h2>
                                        <h2>CutDate : {{ $data->productions->CutDate }}</h2>
                                        {{-- <h2>MC : {{ $data->productions->MC }}</h2> --}}
                                        <h2>MossiNo : {{ $data->productions->MossiNo }}</h2>
                                        {{-- <h2>Rank : {{ $data->productions->Rank }}</h2> --}}
                                        {{-- <h2>EPAflag : {{ $data->productions->EPAflag }}</h2> --}}
                                        <h2>SpecCode : {{ $data->productions->SpecCode }}</h2>
                                        <h2>SpecName : {{ $data->productions->SpecName }}</h2>
                                        <h2>Coating : {{ $data->productions->Coating }}</h2>
                                        <h2>Thick : {{ $data->productions->Thick }}</h2>
                                        <h2>Width : {{ $data->productions->Width }}</h2>
                                        <h2>Lenght1 : {{ $data->productions->Lenght1 }}</h2>
                                        <h2>Lenght2 : {{ $data->productions->Lenght2 }}</h2>
                                        <h2>MaterialWeight : {{ $data->productions->MaterialWeight }}</h2>
                                        <h2>RewindWeight : {{ $data->productions->RewindWeight }}</h2>
                                        <h2>MaterialUsed : {{ $data->productions->MaterialUsed }}</h2>
                                        {{-- <h2>SemiFweight : {{ $data->productions->SemiFweight }}</h2>
                                        <h2>RewindSemiFweight : {{ $data->productions->RewindSemiFweight }}</h2>
                                        <h2>SemiFused : {{ $data->productions->SemiFused }}</h2>
                                        <h2>ProductWeight : {{ $data->productions->ProductWeight }}</h2>
                                        <h2>RewindProductWeight : {{ $data->productions->RewindProductWeight }}</h2> --}}
                                        <h2>ProductUsed : {{ $data->productions->ProductUsed }}</h2>
                                        <h2>TotalUsed : {{ $data->productions->TotalUsed }}</h2>
                                        <h2>Qty1 : {{ $data->productions->Qty1 }}</h2>
                                        <h2>Product : {{ $data->productions->Product }}</h2>
                                        <h2>Qty2 : {{ $data->productions->Qty2 }}</h2>
                                        {{--<h2>SemiF : {{ $data->productions->SemiF }}</h2>
                                        <h2>TotalProdSemi : {{ $data->productions->TotalProdSemi }}</h2>
                                         <h2>Scrap : {{ $data->productions->Scrap }}</h2>
                                        <h2>Yields : {{ $data->productions->Yields }}</h2>
                                        <h2>TonyuPcs : {{ $data->productions->TonyuPcs }}</h2>
                                        <h2>Maker : {{ $data->productions->Maker }}</h2> --}}
                                    </div>

                                    
                                    <div class="col">
                                        <h1>Detail Outgoing</h1> <br>
                                        <h2>SJnumber : {{ $data->outgoings->SJnumber }}</h2>
                                        <h2>SJdate : {{ $data->outgoings->SJdate }}</h2>
                                        <h2>CustomerName : {{ $data->outgoings->CustomerName }}</h2>
                                        {{-- <h2>MainCustomer : {{ $data->outgoings->MainCustomer }}</h2> --}}
                                        {{-- <h2>KanbanNo : {{ $data->outgoings->KanbanNo }}</h2>
                                        <h2>SPC : {{ $data->outgoings->SPC }}</h2>
                                        <h2>MC : {{ $data->outgoings->MC }}</h2> --}}
                                        <h2>MossiNo : {{ $data->outgoings->MossiNo }}</h2>
                                        <h2>GentaiNo : {{ $data->outgoings->GentaiNo }}</h2>
                                        <h2>Thick : {{ $data->outgoings->Thick }}</h2>
                                        <h2>Width : {{ $data->outgoings->Width }}</h2>
                                        <h2>Length1 : {{ $data->outgoings->Length1 }}</h2>
                                        <h2>Length2 : {{ $data->outgoings->Length2 }}</h2>
                                        <h2>PCS : {{ $data->outgoings->PCS }}</h2>
                                        <h2>Case : {{ $data->outgoings->Case }}</h2>
                                        <h2>KgPcs : {{ $data->outgoings->KgPcs }}</h2>
                                        <h2>Weight : {{ $data->outgoings->Weight }}</h2>
                                        <h2>SpecName : {{ $data->outgoings->SpecName }}</h2>
                                        <h2>Coating : {{ $data->outgoings->Coating }}</h2>
                                        {{-- <h2>Usumebiki : {{ $data->outgoings->Usumebiki }}</h2>
                                        <h2>EPTEflag : {{ $data->outgoings->EPTEflag }}</h2>
                                        <h2>Remark : {{ $data->outgoings->Remark }}</h2> --}}
                                        <h2>ContractNo : {{ $data->outgoings->ContractNo }}</h2>
                                        {{-- <h2>Maker : {{ $data->outgoings->Maker }}</h2> --}}
                                        <h2>DeliveryTo : {{ $data->outgoings->DeliveryTo }}</h2>
                                        <h2>PO No : {{ $data->outgoings->PoNo }}</h2>
                                        <h2>RemarkOrderRefNo : {{ $data->outgoings->RemarkOrderRefNo }}</h2>
                                        <h2>Transportir : {{ $data->outgoings->Transportir }}</h2>
                                        <h2>Truck : {{ $data->outgoings->Truck }}</h2>
                                    </div>
                        </div>
                        <div style="overflow-x:auto;">
                            <div class="container">                                
                                <div class="row">
                                    
                                </div>                                
                            </div>
                            
                                        
                                        
                            {{-- {{ $data->links() }} --}}

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

       {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    
    <script src="{{ asset('template/./index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
  </body>

 </html>
