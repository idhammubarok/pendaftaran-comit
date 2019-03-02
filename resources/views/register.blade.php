
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<!------ Include the above in your HEAD tag ---------->
<body style="background-color: #3932B0">

<div class="container register">
    <div class="row">
        <div class="col-md-3 left text-center">
            <img src="{{ asset('/image/logo-comit.png') }}" width="200" height="200" alt=""/>
            <h3 style="color: white;">Welcome</h3>
            <p style="color: white;">Semangat Comit..!! Salam Technology</p>
            <!-- <input type="submit" name="" value="Login"/><br/> -->
            <p><img src="{{ asset('/image/comit-wayout.png') }}" width="200" height="200"></p>
            <p style="color:white;">Scan me</p>
        </div>
        <div class="col-md-9 register-right">
            <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                </li>
            </ul> -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @if(Session::has('alert'))
                        <h3 class="register-heading text-success">{{Session::get('alert')}}</h3>
                    @elseif(Session::has('alert2'))
                        <h3 class="register-heading text-danger ">{{Session::get('alert2')}}</h3>
                    @else
                    <h3 class="register-heading">Registrasi Anggota Comit 2019</h3>
                    @endif
                    <form action="{{ url('/register/proses') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="no_hp" placeholder="Handphone Aktif / WA" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tgl_lahir"  value="" required />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="Laki-laki"  required>
                                            <span> Laki-laki </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="Perempuan" required>
                                            <span>Perempuan </span> 
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="alamat" placeholder="Alamat tinggal"></textarea>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="jurusan" required>
                                        <option class="hidden" value="" selected disabled>Jurusan</option>
                                        <option value="Sistem infromasi">Sistem infromasi</option>
                                        <option value="Sistem Informasi akuntansi">Sistem Informasi akuntansi</option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Manajemen">Manajemen</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="semester" required>
                                        <option class="hidden" value="" selected disabled>Semester</option>
                                        <?php  
                                            for ($i=1; $i <= 8 ; $i++) { ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php } ?>
                                       
                                    </select>
                                </div>
                                <!--<div class="form-group">
                                    <select class="form-control" name="peminatan" required>
                                        <option class="hidden" value="" selected disabled>Peminatan</option>
                                        <option>Networking</option>
                                        <option>Programming</option>
                                        <option>Graphic Design</option>
                                    </select>
                                </div>-->
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </form>
                    
                </div>
               
            </div>
        </div>
    </div>

</div>
</body>
