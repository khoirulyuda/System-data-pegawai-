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

            <form action="/updateoutgoing/{{ $data->id }}" method="post">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">SJ Number</label>
                  <input type="text" name="SJnumber" value="{{ $data->SJnumber }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">SJ Date</label>
                  <input type="text" name="SJdate" value="{{ $data->SJdate }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Customer Name</label>
                  <input type="text" name="CustomerName" value="{{ $data->CustomerName }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Main Customer</label>
                  <input type="text" name="MainCustomer" value="{{ $data->MainCustomer }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kanban No</label>
                  <input type="text" name="KanbanNo" value="{{ $data->KanbanNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">SPC</label>
                  <input type="text" name="SPC" value="{{ $data->SPC }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">MC</label>
                  <input type="text" name="MC" value="{{ $data->MC }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mossi No</label>
                  <input type="text" name="MossiNo" value="{{ $data->MossiNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Gentai No</label>
                  <input type="text" name="GentaiNo" value="{{ $data->GentaiNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Thick</label>
                  <input type="text" name="Thick" value="{{ $data->Thick }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">X</label>
                  <input type="text" name="X1" value="{{ $data->X1 }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Width</label>
                  <input type="text" name="Width" value="{{ $data->Width }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">X</label>
                  <input type="text" name="X2" value="{{ $data->X2 }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Length1</label>
                  <input type="text" name="Length1" value="{{ $data->Length1 }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">X</label>
                  <input type="text" name="X3" value="{{ $data->X3 }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Length2</label>
                  <input type="text" name="Length2" value="{{ $data->Length2 }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PCS</label>
                  <input type="text" name="PCS" value="{{ $data->PCS }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Case</label>
                  <input type="text" name="Case" value="{{ $data->Case }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kg Pcs</label>
                  <input type="text" name="KgPcs" value="{{ $data->KgPcs }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Weight</label>
                  <input type="text" name="Weight" value="{{ $data->Weight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                  <label for="exampleInputEmail1" class="form-label">Usumebiki</label>
                  <input type="text" name="Usumebiki" value="{{ $data->Usumebiki }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">EPTE Flag</label>
                  <input type="text" name="EPTEflag" value="{{ $data->EPTEflag }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Remark</label>
                  <input type="text" name="Remark" value="{{ $data->Remark }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Contract No</label>
                  <input type="text" name="ContractNo" value="{{ $data->ContractNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Maker</label>
                  <input type="text" name="Maker" value="{{ $data->Maker }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Delivery To</label>
                  <input type="text" name="DeliveryTo" value="{{ $data->DeliveryTo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Po No</label>
                  <input type="text" name="PoNo" value="{{ $data->PoNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Remark Order Ref No</label>
                  <input type="text" name="RemarkOrderRefNo" value="{{ $data->RemarkOrderRefNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Transportir</label>
                  <input type="text" name="Transportir" value="{{ $data->Transportir }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Truck</label>
                  <input type="text" name="Truck" value="{{ $data->Truck }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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