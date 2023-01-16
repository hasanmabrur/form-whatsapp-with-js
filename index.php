<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="pesan" class="col-4 col-form-label">Pesan</label>
        <div class="col-8">
            <textarea id="pesan" name="pesan" cols="40" rows="5" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" onclick="submitForm()" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


<script>
    function submitForm() {
        var nama = document.getElementById("nama").value;
        var pesan = document.getElementById("pesan").value;
        var pesanBaru = pesan.replace(/\n/g, "%0D%0A");
        var url = "https://api.whatsapp.com/send?phone=+628997796616&text=Nama : " + nama + "%0D%0A" + "Pesan : %0D%0A" + pesanBaru;
        window.open(url);
    }
</script>
