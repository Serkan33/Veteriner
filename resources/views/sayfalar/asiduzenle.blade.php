<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Asi GÜncelle</h3>
    </div>

    <div class="box-body">
            <div class="form-group">
                <label for="asiadi" >ASi ADi</label>
                <div class="input-group">
                    <span class="input-group-addon">#</span>
                    <input type="text" name="asiadi" class="form-control" placeholder="Asi Adi" id="asi_adi">
                </div>
            </div>

            <div class="form-group ">
                <div class="form-group col-md-10">
                <label>Asi Turu</label>
                <select class="form-control" name="asituru" form="asiekle" id='asi_turu_select'>
                    <option  id="asi_turu"></option>
                    @foreach($asiturleri as $asituru)

                    <option value="{{$asituru->asituru}}"  >{{$asituru->asituru}}</option>

                        @endforeach

                </select>
                </div>

            </div>


            <div class="form-group">
                <label for="exampleInputFile">Asi Resmi Ekle</label>
                <input type="file" id="image">

            </div>



            <div class="box-footer" style="float: right;">
                <button type="submit" class="btn btn-success" id="btn-guncelle">Güncelle</button>
                <button type="submit" class="btn btn-primary" id="vazgec">Vazgeç</button>
            </div>

    </div>



    <!-- /.box-body -->
</div>
