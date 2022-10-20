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

            <form action="/updatepibheader/{{ $data->id }}" method="post">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Car</label>
                  <input type="text" name="Car" value="{{ $data->Car }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">KdKpbc</label>
                  <input type="text" name="KdKpbc" value="{{ $data->KdKpbc }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PibNo</label>
                  <input type="text" name="PibNo" value="{{ $data->PibNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">GenataiNo</label>
                  <select type="text" name="incomings_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <option disabled value>Pilih GentaiNo</option>
                    @foreach ($gentai as $item )
                        <option value="{{ $item->id }}">{{ $item->GentaiNo }}</option>
                    @endforeach                  
                  </select>                  
                </div>                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">MossiNo</label>
                  <select type="text" name="productions_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <option disabled value>Pilih MossiNo</option>
                    @foreach ($mossino as $item )
                        <option value="{{ $item->id }}">{{ $item->MossiNo }}</option>
                    @endforeach                  
                  </select>                  
                </div>                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">SJnumber</label>
                  <select type="text" name="outgoings_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <option disabled value>Pilih SJnumber</option>
                    @foreach ($sjno as $item )
                        <option value="{{ $item->id }}">{{ $item->SJnumber }}</option>
                    @endforeach                  
                  </select>                  
                </div>                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PibTg</label>
                  <input type="text" name="PibTg" value="{{ $data->PibTg }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">JnPib</label>
                  <input type="text" name="JnPib" value="{{ $data->JnPib }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">JnImp</label>
                  <input type="text" name="JnImp" value="{{ $data->JnImp }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">JkWaktu</label>
                  <input type="text" name="JkWaktu" value="{{ $data->JkWaktu }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">CrByr</label>
                  <input type="text" name="CrByr" value="{{ $data->CrByr }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">DokTupKd</label>
                  <input type="text" name="DokTupKd" value="{{ $data->DokTupKd }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">DokTupNo</label>
                  <input type="text" name="DokTupNo" value="{{ $data->DokTupNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">DokTupTg</label>
                  <input type="text" name="DokTupTg" value="{{ $data->DokTupTg }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PosNo</label>
                  <input type="text" name="PosNo" value="{{ $data->PosNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PosSub</label>
                  <input type="text" name="PosSub" value="{{ $data->PosSub }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PosSubSub</label>
                  <input type="text" name="PosSubSub" value="{{ $data->PosSubSub }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ImpId</label>
                  <input type="text" name="ImpId" value="{{ $data->ImpId }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ImpNpwp</label>
                  <input type="text" name="ImpNpwp" value="{{ $data->ImpNpwp }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ImpNama</label>
                  <input type="text" name="ImpNama" value="{{ $data->ImpNama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ImpAlmt</label>
                  <input type="text" name="ImpAlmt" value="{{ $data->ImpAlmt }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ImpStatus</label>
                  <input type="text" name="ImpStatus" value="{{ $data->ImpStatus }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ApiKd</label>
                  <input type="text" name="ApiKd" value="{{ $data->ApiKd }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ApiNo</label>
                  <input type="text" name="ApiNo" value="{{ $data->ApiNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PpjkId</label>
                  <input type="text" name="PpjkId" value="{{ $data->PpjkId }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PpjkNpwp</label>
                  <input type="text" name="PpjkNpwp" value="{{ $data->PpjkNpwp }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PpjkNama</label>
                  <input type="text" name="PpjkNama" value="{{ $data->PpjkNama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PpjkAlmt</label>
                  <input type="text" name="PpjkAlmt" value="{{ $data->PpjkAlmt }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PpjkNo</label>
                  <input type="text" name="PpjkNo" value="{{ $data->PpjkNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PpjkTg</label>
                  <input type="text" name="PpjkTg" value="{{ $data->PpjkTg }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">IndId</label>
                  <input type="text" name="IndId" value="{{ $data->IndId }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">IndNpwp</label>
                  <input type="text" name="IndNpwp" value="{{ $data->IndNpwp }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">IndNama</label>
                  <input type="text" name="IndNama" value="{{ $data->IndNama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">IndAlmt</label>
                  <input type="text" name="IndAlmt" value="{{ $data->IndAlmt }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PasokNama</label>
                  <input type="text" name="PasokNama" value="{{ $data->PasokNama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PasokAlmt</label>
                  <input type="text" name="PasokAlmt" value="{{ $data->PasokAlmt }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PasokNeg</label>
                  <input type="text" name="PasokNeg" value="{{ $data->PasokNeg }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PelBkr</label>
                  <input type="text" name="PelBkr" value="{{ $data->PelBkr }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PelMuat</label>
                  <input type="text" name="PelMuat" value="{{ $data->PelMuat }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PelTransit</label>
                  <input type="text" name="PelTransit" value="{{ $data->PelTransit }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">TmpTbn</label>
                  <input type="text" name="TmpTbn" value="{{ $data->TmpTbn }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Moda</label>
                  <input type="text" name="Moda" value="{{ $data->Moda }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">AngkutNama</label>
                  <input type="text" name="AngkutNama" value="{{ $data->AngkutNama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">AngkutNo</label>
                  <input type="text" name="AngkutNo" value="{{ $data->AngkutNo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">AngkutFl</label>
                  <input type="text" name="AngkutFl" value="{{ $data->AngkutFl }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">TgTiba</label>
                  <input type="text" name="TgTiba" value="{{ $data->TgTiba }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">KdVal</label>
                  <input type="text" name="KdVal" value="{{ $data->KdVal }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Ndpbm</label>
                  <input type="text" name="Ndpbm" value="{{ $data->Ndpbm }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">NilInv</label>
                  <input type="text" name="NilInv" value="{{ $data->NilInv }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Freight</label>
                  <input type="text" name="Freight" value="{{ $data->Freight }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">BTambahan</label>
                  <input type="text" name="BTambahan" value="{{ $data->BTambahan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Diskon</label>
                  <input type="text" name="Diskon" value="{{ $data->Diskon }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">KdAss</label>
                  <input type="text" name="KdAss" value="{{ $data->KdAss }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Asuransi</label>
                  <input type="text" name="Asuransi" value="{{ $data->Asuransi }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">KdHrg</label>
                  <input type="text" name="KdHrg" value="{{ $data->KdHrg }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Fob</label>
                  <input type="text" name="Fob" value="{{ $data->Fob }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Cif</label>
                  <input type="text" name="Cif" value="{{ $data->Cif }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Bruto</label>
                  <input type="text" name="Bruto" value="{{ $data->Bruto }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Netto</label>
                  <input type="text" name="Netto" value="{{ $data->Netto }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">JmCont</label>
                  <input type="text" name="JmCont" value="{{ $data->JmCont }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">JmBrg</label>
                  <input type="text" name="JmBrg" value="{{ $data->JmBrg }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Status</label>
                  <input type="text" name="Status" value="{{ $data->Status }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Snrf</label>
                  <input type="text" name="Snrf" value="{{ $data->Snrf }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">KdFas</label>
                  <input type="text" name="KdFas" value="{{ $data->KdFas }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Lengkap</label>
                  <input type="text" name="Lengkap" value="{{ $data->Lengkap }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">BillNpwp</label>
                  <input type="text" name="BillNpwp" value="{{ $data->BillNpwp }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">BillNama</label>
                  <input type="text" name="BillNama" value="{{ $data->BillNama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">BillAlmt</label>
                  <input type="text" name="BillAlmt" value="{{ $data->BillAlmt }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PenjualNama</label>
                  <input type="text" name="PenjualNama" value="{{ $data->PenjualNama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PenjualAlmt</label>
                  <input type="text" name="PenjualAlmt" value="{{ $data->PenjualAlmt }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PenjualNeg</label>
                  <input type="text" name="PenjualNeg" value="{{ $data->PenjualNeg }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Pernyataan</label>
                  <input type="text" name="Pernyataan" value="{{ $data->Pernyataan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">JnsTrans</label>
                  <input type="text" name="JnsTrans" value="{{ $data->JnsTrans }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">VD</label>
                  <input type="text" name="VD" value="{{ $data->VD }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">VersiModul</label>
                  <input type="text" name="VersiModul" value="{{ $data->VersiModul }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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