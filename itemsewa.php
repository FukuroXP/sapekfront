<?php
include 'header.php'
?>
<div aria-label="breadcrumb" class="bg-light pb-2 container col-sm-9">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="sapekoutdor.php">SAPEK OUTDOOR</a></li>
        <li class="breadcrumb-item active" aria-current="page">CAPERTEE</li>
    </ol>
    <h2 class="pl-3" style="color: #2f9f00">CAPERTEE</h2>
</div>

<div class="container col-sm-9 bg-light">

    <div class="container d-flex col-sm-12 justify-content-center">
        <div class="row">
            <div class="pr-sm-5 col-sm-6">
                <img class="w-100" src="image/item.jpg" style="max-width: 300px">
            </div>
            <div class="col-sm-6">
                <h2>CAPERTEE</h2>
                <label>Rp. 450.000</label>
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td width="100px">Stock</td>
                        <td>:</td>
                        <td>Ready</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>:</td>
                        <td>BackPack</td>
                    </tr>
                    <tr>
                        <td>Warna</td>
                        <td>:</td>
                        <td class="pt-sm-2">
                            <select class="form-control">
                                <option value="merah">Merah</option>
                                <option value="biru">Biru</option>
                                <option value="kuning">Kuning</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Qty</td>
                        <td>:</td>
                        <td class="pt-sm-2">
                            <div class="d-flex">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-success" type="button"><b>+</b></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button"><b>-</b></button>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tgl Sewa</td>
                        <td>:</td>
                        <td class="pt-2">
                            <form>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Dari"
                                           onfocus="(this.type='date')"
                                           onblur="(this.type='text')">
                                    <input type="text" class="form-control" placeholder="Sampai"
                                           onfocus="(this.type='date')"
                                           onblur="(this.type='text')">
                                </div>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container col-sm-12">
        <div class="col-sm-10 d-flex justify-content-end">
            <button class="btn btn-outline-success">Batal</button>
            <button class="btn btn-success ml-2">Sewa</button>
        </div>
    </div>
    <div class="container col-sm-12 mb-5">
        <h3 style="color: #2f9f00">DESKRIPSI</h3>
        <div class="card col-sm-6 bg-light overflow-auto h-100" style="max-height: 250px">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
    <div class="container col-sm-12">
        <h3 style="color: #2f9f00">Produk Sejenis</h3>
        <div class="row d-flex">
            <?php
            for ($x = 1; $x <= 2; $x++){
                ?>
                <div class="card col-sm-2 text-center m-3">
                    <div class="card-img-top">
                        <img class="w-100" src="image/item.jpg">
                    </div>
                    <div class="card-body">
                        <label>
                            <b>barang no
                                <?php
                                echo "$x";
                                ?>
                            </b>
                        </label><br>
                        <label>Rp.410.000</label><br>
                        <label style="color: #2f9f00; font-size: small;">Ready Stock</label><br>
                        <hr>
                        <button class="btn btn-sm w-100 btn-success">Beli</button>
                        <br>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

</div>


<?php
include 'footer.php'
?>
