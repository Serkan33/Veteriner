@extends('layouts.app')

@section('contentheader_title','Aşı Listeleri')

<script src="js/d.js" charset="utf-8"></script>
<script src="js/asiliste.js" charset="utf-8"></script>
<link rel="stylesheet" href="/css/veteriner.css" media="screen" title="no title">
<link rel="stylesheet" href="/css/adminlte-app.css" media="screen" title="no title">
<div id="divarka">

</div>
<div id="div2">
  @include('sayfalar.asiduzenle');
</div>
@section('main-content')





    <div class="container">

        <div class="col-md-6" id="asilar">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Asilar</h3>
                </div>

                <div class="box-body">
                    <div class="box">

                        <div class="box-body">
                            <table class="table table-bordered" id="deneme">
                                <tbody>
                                @foreach($asilar as $asi)
                                <tr>
                                    <td style="width: 30px;" id="asi_id"> {{$asi->asi_id}}</td>

                                    <td style="width: 130px;">
                                        <img class="profile-user-img " src="{{asset($asi->resim)}}" alt="Asi Resmi" width="50" height="50">
                                    </td>
                                    <td class="dd">
                                     {{$asi->adi}}
                                    </td>
                                    <td>
                                        {{$asi->turu}}
                                    </td>
                                    <td style="width: 130px;">
                                      <button class="btn  btn-primary duzenle"  name= {{$asi->asi_id}} >Düzenle</button>
                                        <a href="" class="btn  btn-danger sil"  onclick="return false;" name= {{$asi->asi_id}} >Sil</a>
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->


                    </div>

                </div>


                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>

        <div class="col-md-5"  id="asiForm" >

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Asi Ekle</h3>
                </div>

                <div class="box-body">
                    <form class="form" id="asiekle" role="form" method="POST" action="{{ url('asiekle') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="asiadi" >ASi ADi</label>
                            <div class="input-group">
                                <span class="input-group-addon">#</span>
                                <input type="text" name="asiadi" class="form-control" placeholder="Asi Adi" style="z-index:0">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="form-group col-md-10">
                            <label>Asi Turu</label>
                            <select class="form-control" name="asituru" form="asiekle">
                                <option  >ASi Turu Seciniz</option>
                                @foreach($asiturleri as $asituru)
                                <option value="{{$asituru->asituru}}"  >{{$asituru->asituru}}</option>

                                    @endforeach

                            </select>
                            </div>
                            <div class="form-group col-md-2">
                                <a href=""class="btn btn-primary" style="margin-top: 23px;" id="btn-diger" onclick="return false;">Diger</a>
                            </div>
                        </div>

                        <div class="form-group"  style="display:none" id="yeniEkle">
                            <label for="yenitur" >Yeni Tur Ekle</label>
                            <div class="input-group">
                                <span class="input-group-addon">#</span>
                                <input type="text" name="yenitur" class="form-control" placeholder="Yeni Tur " style="z-index:0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Asi Resmi Ekle</label>
                            <input type="file" id="exampleInputFile">


                        </div>



                        <div class="box-footer" style="float: right;">
                            <button type="submit" class="btn btn-primary" id="btn-asiekle">Ekle</button>
                        </div>

                    </form>

                </div>



                <!-- /.box-body -->
            </div>
            <!-- /.box -->




        </div>


    </div>



@endsection
