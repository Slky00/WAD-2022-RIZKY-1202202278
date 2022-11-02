<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
    <div class="row card-container">
      <div class="col booking-img-box">
        <img src="<?php echo isset($_GET['car']) ? $_GET['car'] : "RS6L" ?>.png" alt="car" class="booking-img">
      </div>
      <div class="col">
          <h3>Rent your car now!</h3>
          <form action="Rizky_index.php?page=mybooking" method="POST" class="booking-form">
              <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control bg-light" id="name" name="name" value="RIZKY BERNAWAN_1202202278" readOnly>
              </div>

              <div class="mb-3">
                  <label for="bokdate" class="form-label">Book Date</label>
                  <input type="date" class="form-control" id="bokdate" name="bokdate">
              </div>
              <div class="mb-3">
                  <label for="jam" class="form-label">Start Time</label>
                  <input type="time" class="form-control" id="jam" name="jam">
              </div>

              <div class="mb-3">
                  <label for="number" class="form-label">Duration (Days)</label>
                  <input type="number" class="form-control" id="number" name="number" min="1">
              </div>

              <div class="mb-3">
                  <label for="car" class="form-label">Pilih Mobil</label>
                  <select name="car" id="car" class="form-select">
                      <option selected disabled> Pilih Jenis Mobil</option>
                      <option value="E-tron">Audi RS E-Tron GT</option>
                      <option value="Q8">Audi Q8</option>
                      <option value="RS6">Audi RS6 Avant</option>
                  </select>
              </div>

              <div class="mb-3">
                  <label for="numberhp" class="form-label">No Handphone</label>
                  <input type="number" class="form-control" id="numberhp" name="numberhp" >
              </div>


              <div class="mb-3">
                  <label for="addon">Add Service</label>
                  <div class="form-check">
                      <label class="form-check-label" for='health'>Health Service / Rp25.000</label>
                      <input type="checkbox" class="form-check-input" value="Health Service" id="health" name="health">
                  </div>

                  <div class="form-check">
                      <label class="form-check-label" for='driver'>Driver / Rp100.000</label>
                      <input type="checkbox" class="form-check-input" value="Driver" id="driver" name="driver">
                  </div>

                  <div class="form-check">
                      <label class="form-check-label" for='fuel'>Fuel Filled / Rp250.000</label>
                      <input type="checkbox" class="form-check-input" value="Fuel" id="fuel" name="fuel">
                  </div>
              </div>
              <button class="btn btn-success" type="submit">Submit</button>
            </form>
          </div>
      </div>
    </div>
    </div>
    <section Id="footer">
        <center>
          Copyright &copy;2022 (Rizky_1202202278_SI4403)
        </center>
      </section>
</body>