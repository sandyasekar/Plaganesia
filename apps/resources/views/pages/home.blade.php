@extends('layouts.default')
@section('content')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h4 class="header center white-text text-lighten-4" style="margin-top:12%;">Portal Informasi Pemetaan Wabah Pertama di Indonesia</h4>
        <div class="row center">
          <h5 style="margin-top:-1%;" class="header col s12 light">Temukan informasi seputar wabah, pemetaannya, dan penanggulangannya disini</h5>
        </div>
        <div class="row center">
         <a class="waves-effect waves-light btn-large teal lighten-2" href="view-peta">LIHAT PEMETAAN</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="asset/img/background-1.png" alt="Unsplashed background img 1"></div>
  </div>

  <br><br>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="asset/img/card-1.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <div class="row center">
                <h5>Peta Wabah</h5><br>
                <div class="row center">
                 <a class="waves-effect waves-light btn teal lighten-2" href="view-peta">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="asset/img/card-2.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <div class="row center">
                <h5>Himbauan dan Pengumuman</h5><br>
                <div class="row center">
                 <a class="waves-effect waves-light btn teal lighten-2" href="berita.html">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="asset/img/card-3.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <div class="row center">
                <h5>Info Penyakit</h5><br>
                <div class="row center">
                 <a class="waves-effect waves-light btn teal lighten-2" href="info-penyakit.html">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="aspiration" >
    <div class="container">
      <div class="col-md-12">
        <h3 class="center">Laporkan Potensi Wabah</h3>
        <blockquote>@empty($pesan) @endempty</blockquote>
      </div>
      <div class="col-md-12">
        <form action="addLaporan">
          {{csrf_field()}}
          <div class="row">
            <div class="input-field col s12">
              <input type="text" id="nama" name="nama" placeholder="Nama Pelapor">
              <label for="nama" class="black-text">Nama </label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="alamat" name="alamat" placeholder="Alamat Lengkap Pelapor">
              <label for="alamat" class="black-text">Alamat </label>
            </div>
            <div class="input-field col s6">
              <select name="kabupaten" id="kabupaten">
                <option value="1">Jakarta Utara</option>
                <option value="2">Jakarta Timur</option>
                <option value="3">Jakarta Barat</option>
                <option value="4">Jakarta Selatan</option>
                <option value="5">Jakarta Pusat</option>
              </select>
              <label for="kabupaten" class="black-text">Kabupaten </label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
                <textarea style="height: 5rem" id="icon_prefix2" class="materialize-textarea" rows="9" name="laporan"></textarea>
                <label for="icon_prefix2" class="black-text">Masukan Laporan</label>
            </div>
          </div>
          <div class='row'>
            <?php 
              $date = date("Y-m-d");
              echo "<input type='hidden' name='tgl_lapor' value='".$date."'>";
            ?>
            <div class="col s4"></div>
            <button type='submit' name='btn_login' class='col s4 btn btn-large waves-effect indigo'>Laporkan</button>
            <div class="col s4"></div>
          </div>
        </form>
      </div>
    </div>
  </section>    -


@stop