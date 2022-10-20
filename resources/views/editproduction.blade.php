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

            <form action="/updateproduction/{{ $data->id }}" method="post">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Customer Code</label>
                  <input type="text" name="CustomerCode" value="{{ $data->CustomerCode }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Customer Name</label>
                  <input type="text" name="CustomerName" value="{{ $data->CustomerName }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Spec Group</label>
                  <input type="text" name="SpecGroup" value="{{ $data->SpecGroup }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Group</label>
                  <input type="text" name="Group" value="{{ $data->Group }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Cut Line</label>
                  <input type="text" name="CutLine" value="{{ $data->CutLine }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Cut Date</label>
                  <input type="text" name="CutDate" value="{{ $data->CutDate }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                  <label for="exampleInputEmail1" class="form-label">Rank</label>
                  <input type="text" name="Rank" value="{{ $data->Rank }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">EPA Flag</label>
                  <input type="text" name="EPAflag" value="{{ $data->EPAflag }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                  <label for="exampleInputEmail1" class="form-label">Material Weight</label>
                  <input type="text" name="MaterialWeight" value="{{ $data->MaterialWeight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Rewind Weight</label>
                  <input type="text" name="RewindWeight" value="{{ $data->RewindWeight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Material Used</label>
                  <input type="text" name="MaterialUsed" value="{{ $data->MaterialUsed }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Semi F Weight</label>
                  <input type="text" name="SemiFweight" value="{{ $data->SemiFweight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Rewind Semi F Weight</label>
                  <input type="text" name="RewindSemiFweight" value="{{ $data->RewindSemiFweight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Semi F Used</label>
                  <input type="text" name="SemiFused" value="{{ $data->SemiFused }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Product Weight</label>
                  <input type="text" name="ProductWeight" value="{{ $data->ProductWeight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Rewind Product Weight</label>
                  <input type="text" name="RewindProductWeight" value="{{ $data->RewindProductWeight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Product Used</label>
                  <input type="text" name="ProductUsed" value="{{ $data->ProductUsed }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Total Used</label>
                  <input type="text" name="TotalUsed" value="{{ $data->TotalUsed }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Qty1</label>
                  <input type="text" name="Qty1" value="{{ $data->Qty1 }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Product</label>
                  <input type="text" name="Product" value="{{ $data->Product }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Qty2</label>
                  <input type="text" name="Qty2" value="{{ $data->Qty2 }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Semi F</label>
                  <input type="text" name="SemiF" value="{{ $data->SemiF }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Total Prod Semi</label>
                  <input type="text" name="TotalProdSemi" value="{{ $data->TotalProdSemi }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Scrap</label>
                  <input type="text" name="Scrap" value="{{ $data->Scrap }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Yields</label>
                  <input type="text" name="Yields" value="{{ $data->Yields }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">TonyuPcs</label>
                  <input type="text" name="TonyuPcs" value="{{ $data->TonyuPcs }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Maker</label>
                  <input type="text" name="Maker" value="{{ $data->Maker }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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