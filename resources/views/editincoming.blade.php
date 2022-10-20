<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100" style="background-color: #508bfc; height=100%;">
  <div class="container py-5 h-100%">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Edit Data</h3>

            <form action="/updateincoming/{{ $data->id }}" method="post">
              @csrf
                {{-- <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Pib No</label>
                  <input type="text" name="PibNo" value="{{ $data->PibNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div> --}}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Owner Cust</label>
                  <input type="text" name="OwnerCust" value="{{ $data->OwnerCust }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Abbr</label>
                  <input type="text" name="Abbr" value="{{ $data->Abbr }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mossi No</label>
                  <input type="text" name="MossiNo" value="{{ $data->MossiNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">MC</label>
                  <input type="text" name="MC" value="{{ $data->MC }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Spec Group</label>
                  <input type="text" name="SpecGroup" value="{{ $data->SpecGroup }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Spec Code</label>
                  <input type="text" name="SpecCode" value="{{ $data->SpecCode }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Spec Name</label>
                  <input type="text" name="SpecName" value="{{ $data->SpecName }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Coating</label>
                  <input type="text" name="Coating" value="{{ $data->Coating }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Thick</label>
                  <input type="text" name="Thick" value="{{ $data->Thick }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Width</label>
                  <input type="text" name="Width" value="{{ $data->Width }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Lenght1</label>
                  <input type="text" name="Lenght1" value="{{ $data->Lenght1 }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Lenght2</label>
                  <input type="text" name="Lenght2" value="{{ $data->Lenght2 }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Enter Date</label>
                  <input type="text" name="EnterDate" value="{{ $data->EnterDate }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mat Enter Date</label>
                  <input type="text" name="MatEnterDate" value="{{ $data->MatEnterDate }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Qty</label>
                  <input type="text" name="Qty" value="{{ $data->Qty }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Weight</label>
                  <input type="text" name="Weight" value="{{ $data->Weight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Store / Flag</label>
                  <input type="text" name="StoreFlag" value="{{ $data->StoreFlag }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">RDM No</label>
                  <input type="text" name="RDMNo" value="{{ $data->RDMNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Case No</label>
                  <input type="text" name="CaseNo" value="{{ $data->CaseNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Coil No</label>
                  <input type="text" name="CoilNo" value="{{ $data->CoilNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Container No</label>
                  <input type="text" name="ContainerNo" value="{{ $data->ContainerNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Maker</label>
                  <input type="text" name="Maker" value="{{ $data->Maker }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Shipper</label>
                  <input type="text" name="Shipper" value="{{ $data->Shipper }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Invoice No</label>
                  <input type="text" name="InvoiceNo" value="{{ $data->InvoiceNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Damage Flag</label>
                  <input type="text" name="DamageFlag" value="{{ $data->DamageFlag }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Price</label>
                  <input type="text" name="Price" value="{{ $data->Price }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">EPTE Flag</label>
                  <input type="text" name="EPTEflag" value="{{ $data->EPTEflag }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kanban No</label>
                  <input type="text" name="KanbanNo" value="{{ $data->KanbanNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Remark</label>
                  <input type="text" name="Remark" value="{{ $data->Remark }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Vessel</label>
                  <input type="text" name="Vessel" value="{{ $data->Vessel }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Contract No</label>
                  <input type="text" name="ContractNo" value="{{ $data->ContractNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Cust</label>
                  <input type="text" name="UserCust" value="{{ $data->UserCust }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Line / SJ</label>
                  <input type="text" name="LineSJ" value="{{ $data->LineSJ }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Out Date</label>
                  <input type="text" name="OutDate" value="{{ $data->OutDate }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Used Weight</label>
                  <input type="text" name="UsedWeight" value="{{ $data->UsedWeight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Rewind Weight</label>
                  <input type="text" name="RewindWeight" value="{{ $data->RewindWeight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mat Width</label>
                  <input type="text" name="MatWidht" value="{{ $data->MatWidht }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">EPA Flag</label>
                  <input type="text" name="EPAflag" value="{{ $data->EPAflag }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Book Flag</label>
                  <input type="text" name="BookFlag" value="{{ $data->BookFlag }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Gentai No</label>
                  <input type="text" name="GentaiNo" value="{{ $data->GentaiNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Part No</label>
                  <input type="text" name="PartNo" value="{{ $data->PartNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Part Name</label>
                  <input type="text" name="PartName" value="{{ $data->PartName }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            


          </div>
        </div>
      </div>
    </div>
  </div>

</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>