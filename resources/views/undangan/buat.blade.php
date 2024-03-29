<!-- Modal -->

@extends('layouts.admin')

<div class="row">
    <div class="col-md-12 mb-4">
        <!-- Form Controls -->

        @section('content')
        <div class="u-body">
            <div class="card">
                <header class="card-header" style="color: #6b15b6;">
                    <h2 class="h3 card-header-title text-center"> Pembuatan </h2>
                </header>
                <div class="card-body">
                    <form role="form" method="post" action="{{route('buat.create',$client->id)}}" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <p align="center" style="margin-right: 200px;"><input type="text" name="nama" value="{{$client->nama}}" readonly="" class="text-center form-control fa" style="color: #6b15b6; width: 200px;"></p>
                        <div class="row" align="center">
                            <div class="col-6" style="margin-bottom:20px; margin-top: 30px;">
                                <div class="form-group">
                                    <label class="control-label" style="margin-right: 250px; color:#6b15b6; "><li class="fa">Slide 1</li> </label>
                                    <div class="col-md-9">
                                        <div style="width: 140px; height: 100px; border: 1px solid #6b15b6; margin-right: 200px; margin-bottom: 10px;">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img1">
                                        </div>
                                        <input id="gambar1" name="gambar1" class="form-control" type="file" onchange="showG.call(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" style="margin-top: 30px;">
                                <div class="form-group">
                                    <label class="control-label" style="margin-right: 250px; color:#6b15b6;"><li class="fa">Slide 4</li> </label>
                                    <div class="col-md-9">
                                        <div style="width: 140px; height: 100px; border: 1px solid #6b15b6; margin-right: 200px; margin-bottom: 10px;">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width:100%; height: 100%; " id="img4">
                                        </div>
                                        <input id="gambar4" name="gambar4" type="file" class="form-control" onchange="showB.call(this)">
                                    </div>
                                </div>
                            </div>
                            <div class=" col-6" style="margin-bottom: 20px;">
                                <div class="form-group">
                                    <label class="control-label" style="margin-right: 250px; color:#6b15b6;"><li class="fa">Slide 2</li></label>
                                    <div class="col-md-9">
                                        <div style="width: 140px; height: 100px; border: 1px solid #6b15b6; margin-right: 200px; margin-bottom: 10px;">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img2">
                                        </div>
                                        <input id="gambar2" name="gambar2" type="file" class="form-control" onchange="showA.call(this)">
                                    </div>
                                </div>

                            </div>
                            <div class=" col-6 ">
                                <div class="form-group">
                                    <label class="control-label" style="margin-right: 250px; color:#6b15b6;"><li class="fa">Slide 5</li></label>
                                    <div class="col-md-9">
                                        <div style="width: 140px; height: 100px; border: 1px solid #6b15b6; margin-right: 200px; margin-bottom: 10px;">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img5">
                                        </div>
                                        <input id="gambar5" name="gambar5" type="file" class="form-control" onchange="showE.call(this)" style="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label " style="margin-right: 250px; color:#6b15b6;"><li class="fa">Slide 3</li></label>
                                    <div class="col-md-9">
                                        <div style="width: 140px; height: 100px; border: 1px solid #6b15b6; margin-right: 200px; margin-bottom: 10px;">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img3">
                                        </div>
                                        <input id="gambar3" name="gambar3" type="file" class="form-control" onchange="showM.call(this)" style="">
                                    </div>
                                </div>
                            </div>
                            <div class=" col-6">
                                <div class="form-group">
                                    <label class="control-label" style="margin-right: 250px; color:#6b15b6;"><li class="fa">Slide 6</li></label>
                                    <div class="col-md-9">
                                        <div style="width: 140px; height: 100px; border: 1px solid #6b15b6; margin-right: 200px; margin-bottom: 10px;">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img6">
                                        </div>
                                        <input id="gambar6" name="gambar6" type="file" class="form-control" onchange="showR.call(this)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-left: 1000px; margin-top: 100px;"><li class="fa">Simpan</li></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Form Controls -->


        <!-- PREVIEW -->
        <script type="text/javascript">
            function showG() {
                if (this.files && this.files[0]) {
                    var img = new FileReader();
                    img.onload = function(data) {
                        var image = document.getElementById("img1");
                        image.src = data.target.result;
                        image.style.display = "block";
                    }
                }
                img.readAsDataURL(this.files[0]);
            }

            function showA() {
                if (this.files && this.files[0]) {
                    var img = new FileReader();
                    img.onload = function(data) {
                        var image = document.getElementById("img2");
                        image.src = data.target.result;
                        image.style.display = "block";
                    }
                }
                img.readAsDataURL(this.files[0]);
            }

            function showM() {
                if (this.files && this.files[0]) {
                    var img = new FileReader();
                    img.onload = function(data) {
                        var image = document.getElementById("img3");
                        image.src = data.target.result;
                        image.style.display = "block";
                    }
                }
                img.readAsDataURL(this.files[0]);
            }

            function showB() {
                if (this.files && this.files[0]) {
                    var img = new FileReader();
                    img.onload = function(data) {
                        var image = document.getElementById("img4");
                        image.src = data.target.result;
                        image.style.display = "block";
                    }
                }
                img.readAsDataURL(this.files[0]);
            }

            function showE() {
                if (this.files && this.files[0]) {
                    var img = new FileReader();
                    img.onload = function(data) {
                        var image = document.getElementById("img5");
                        image.src = data.target.result;
                        image.style.display = "block";
                    }
                }
                img.readAsDataURL(this.files[0]);
            }

            function showR() {
                if (this.files && this.files[0]) {
                    var img = new FileReader();
                    img.onload = function(data) {
                        var image = document.getElementById("img6");
                        image.src = data.target.result;
                        image.style.display = "block";
                    }
                }
                img.readAsDataURL(this.files[0]);
            }
        </script>
    </div>
    <!-- END PREVIEW -->
    @endsection