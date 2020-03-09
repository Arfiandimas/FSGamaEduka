@extends('layout.admin')

@section('title','Artikel')

@section('halaman','Program')

@section('content')

<style>

.section2wadah {
    margin-bottom: 30px;
    width: 100%;
    background-color: white;
    padding-top: 20px;
    border-radius: 10px;
    border: 1px solid #777777;
}

.section2clock {
    display: inline-flex;
    color: #F9A826;
}

.section2pertemuan {
    margin-left: 5px;
    margin-top: -5px;
}

.tambah-program {
    width: 190px;
    margin: auto;
    margin-top: 5px;
    margin-bottom: 20px;
}

.logo-programtambah {
    position: absolute;
    width: 25px;
}

.new-program {
    margin-left: 35px;
    color: #707070;
}

.optionprogram {
    width: 100%;
    height: 30px;
    border-top: 1px solid #707070
}

.wadahoptionprogram {
    width: 70px;
}

</style>


    <div class="container">

        <div class="tambah-program mx-auto">
            <a href=""><img src="/img/plus.png" class="logo-programtambah" alt="">
            <h5 class="new-program">Tambah Program</h5></a>
        </div>

        <div class="section2wadah mx-auto">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-1">
                        <img src="/img/program komputer.svg" alt="" class="img-fluid" style="width:100%; height:auto;">
                    </div>
                    <div class="col-md-5">
                        <h5 class="section2judulprogram">Pelatihan Komputer Dasar</h5>
                        <span class="section2clock">
                            <i class="far fa-clock"></i>
                            <p class="section2pertemuan">25 Pertemuan</p>
                        </span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint porro voluptatum sapiente mollitia, non nesciunt deserunt tempore rem repudiandae sequi laudantium similique tempora tenetur aspernatur quidem provident suscipit delectus consequatur architecto repellendus cupiditate vitae inventore doloribus facere. Harum maiores quibusdam, earum tempore ipsa possimus est. Ex quos laudantium, aperiam quo in ab sint eligendi minus ullam libero rem recusandae consequatur pariatur deserunt veritatis id hic dicta tempore.</p>
                    </div>
                </div>
            </div>
            <div class="optionprogram">
                <div class="wadahoptionprogram mx-auto">
                    <a href="http://" style="margin-right:20px;"><i class="fas fa-edit"></i></a>
                    <a href="http://"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="section2wadah mx-auto">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-1">
                        <img src="/img/program komputer.svg" alt="" class="img-fluid" style="width:100%; height:auto;">
                    </div>
                    <div class="col-md-5">
                        <h5 class="section2judulprogram">Pelatihan Komputer Dasar</h5>
                        <span class="section2clock">
                            <i class="far fa-clock"></i>
                            <p class="section2pertemuan">25 Pertemuan</p>
                        </span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint porro voluptatum sapiente mollitia, non nesciunt deserunt tempore rem repudiandae sequi laudantium similique tempora tenetur aspernatur quidem provident suscipit delectus consequatur architecto repellendus cupiditate vitae inventore doloribus facere. Harum maiores quibusdam, earum tempore ipsa possimus est. Ex quos laudantium, aperiam quo in ab sint eligendi minus ullam libero rem recusandae consequatur pariatur deserunt veritatis id hic dicta tempore.</p>
                    </div>
                </div>
            </div>
            <div class="optionprogram">
                <div class="wadahoptionprogram mx-auto">
                    <a href="http://" style="margin-right:20px;"><i class="fas fa-edit"></i></a>
                    <a href="http://"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="section2wadah mx-auto">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-1">
                        <img src="/img/program komputer.svg" alt="" class="img-fluid" style="width:100%; height:auto;">
                    </div>
                    <div class="col-md-5">
                        <h5 class="section2judulprogram">Pelatihan Komputer Dasar</h5>
                        <span class="section2clock">
                            <i class="far fa-clock"></i>
                            <p class="section2pertemuan">25 Pertemuan</p>
                        </span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint porro voluptatum sapiente mollitia, non nesciunt deserunt tempore rem repudiandae sequi laudantium similique tempora tenetur aspernatur quidem provident suscipit delectus consequatur architecto repellendus cupiditate vitae inventore doloribus facere. Harum maiores quibusdam, earum tempore ipsa possimus est. Ex quos laudantium, aperiam quo in ab sint eligendi minus ullam libero rem recusandae consequatur pariatur deserunt veritatis id hic dicta tempore.</p>
                    </div>
                </div>
            </div>
            <div class="optionprogram">
                <div class="wadahoptionprogram mx-auto">
                    <a href="http://" style="margin-right:20px;"><i class="fas fa-edit"></i></a>
                    <a href="http://"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>

    </div>

@endsection