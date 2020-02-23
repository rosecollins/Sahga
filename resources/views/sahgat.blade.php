@extends('layout')

@section('content')

    <?php if($count<1){
            echo "ماكو سحگات حمبي xD";
    }?>
    <?php foreach($sahgas as $sahgat) {?>
    <div class="row">
        <div class="col s12 m12">
            <div class="card lo">
                <div class="card-content white-text">
                    <h3><b> {{ $sahgat->sahga }} </b></h3>
                    <h5> <b> {{ $sahgat->name }} </b>  ساحگـ\ـه وگايلـ\ـه <b> {{ $sahgat->sahga }} </b> بدل ما تـ\يـگول <b> {{ $sahgat->nosahga }} </b>  </h5>
                    <h6> {{ $sahgat->created_at }} </h6>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

@endsection
