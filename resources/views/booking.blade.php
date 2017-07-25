<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/listing-submit.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 14 May 2017 15:06:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="{{ asset('') }}assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="{{ asset('') }}assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/css/superlist.css" rel="stylesheet" type="text/css" >




    <link rel="stylesheet" href="{{asset('gantella/build/css/maps.css')}}">
  <link rel="stylesheet" href="{{asset('gantella/build/css/jquery.timepicker.css')}}">
  <link rel="stylesheet" href="{{asset('gantella/build/css/lib/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/jquery-ui.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/style1.css">
  <script src="https:{{ asset('') }}assets/js/jquery-1.12.4.js"></script>
  <script src="https:{{ asset('') }}assets/js/jquery-ui.js"></script>
    <script src="{{ asset('') }}assets/js/bootbox.min.js" type="text/javascript"></script>

    <style type="text/css">

        .quantity {
  position: relative;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button
{
  -webkit-appearance: none;
  margin: 0;
}

input[type=number]
{
  -moz-appearance: textfield;
}

.quantity input {
  width: 100%;
  height: 42px;
  line-height: 1.65;
  float: left;
  display: block;
  padding: 0;
  margin: 0;
  padding-left: 20px;
  margin-left: 0: 
  border: 1px solid #eee;
}

.quantity input:focus {
  outline: 0;
}


.quantity-nav {
  float: left;
  position: relative;
  height: 42px;
}

.quantity-button {
  position: relative;
  cursor: pointer;
  border-left: 1px solid #eee;
  width: 20px;
  text-align: center;
  color: #333;
  font-size: 13px;
  font-family: "Trebuchet MS", Helvetica, sans-serif !important;
  line-height: 1.7;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

.quantity-button.quantity-up {
  position: absolute;
  height: 50%;
  top: 0;
  border-bottom: 1px solid #eee;
}

.quantity-button.quantity-down {
  position: absolute;
  bottom: -1px;
  height: 50%;
}
.switch-field {
  font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
  padding: 40px;
    overflow: hidden;
}

.switch-title {
  margin-bottom: 6px;
}

.switch-field input.aku {
    position: absolute !important;
    clip: rect(0, 0, 0, 0);
    height: 1px;
    width: 1px;
    border: 0;
    overflow: hidden;
    appearance: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
}

.switch-field label {
  float: left;
}

.switch-field label {
  display: inline-block;
  width: 60px;
  background-color: #e4e4e4;
  color: rgba(0, 0, 0, 0.6);
  font-size: 14px;
  font-weight: normal;
  text-align: center;
  text-shadow: none;
  padding: 6px 14px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition:    all 0.1s ease-in-out;
  -ms-transition:     all 0.1s ease-in-out;
  -o-transition:      all 0.1s ease-in-out;
  transition:         all 0.1s ease-in-out;
}

.switch-field label:hover {
    cursor: pointer;
}

.switch-field input:checked + label {
  background-color: #A5DC86;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.switch-field label:first-of-type {
  border-radius: 4px 0 0 4px;
}

.switch-field label:last-of-type {
  border-radius: 0 4px 4px 0;
}
    </style>

    <title>Tempat Nongkrong Medan</title>
</head>


<body class="">

<div class="page-wrapper">
    

    <header class="header opaque">
        <div class="header-wrapper">
            <div class="container">
                <div class="header-inner">
                    <div class="header-logo">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('') }}assets/img/logo-white.png" alt="Logo">
                            <span style=" color: white;">Tenomed</span>
                        </a>
                    </div><!-- /.header-logo -->

                    <div class="header-content">
                        <div class="header-bottom">
                            <!-- /.header-action -->

                            <ul class="header-nav-primary nav nav-pills collapse navbar-collapse" style="font-weight: 500;">

                               
                            @if(Auth::check())

                                @permission(('user'))
                                 <li class="active" >
                                    <a href="/" style=" color: white;">Home </a>

                                </li>

                               <li>
                                    <a href="#">
                                    @if(Auth::user()->avatar=="")
                                      <img src="{{Auth::user()->getAvatarUrl()}}" alt="" style="width:30px;height: 30px; border-radius: 30px; overflow: relative; margin-right: 7px; margin-top: -5px;"><span style="text-transform: capitalize;  color: white;">{{Auth::user()->name}}</span> <i class="fa fa-chevron-down"></i></a>
                                    @else
                                      <img src="{{ asset('') }}images/{{Auth::user()->avatar}}" alt="" style="width:30px;height: 30px; border-radius: 30px; overflow: relative; margin-right: 7px; margin-top: -5px;"><span style="text-transform: capitalize; color: white;">{{Auth::user()->name}}</span><i class="fa fa-chevron-down"></i></a>
                                    @endif

                                    <ul class="sub-menu">
                                        <li><a href="{{url('user/profile')}}">Profile</a></li>
                                        <li><a href="{{url('user/bookingList')}}">Booking Histories</a></li>
                                        <li><a href="{{url('user/bookmarks')}}">Bookmarks</a></li>
                                        <li><a href="{{url('user/review')}}">Review</a></li>
                                        <li><a href="{{url('user/setting')}}">Setting</a></li>
                                        <li>
                                            <a href="{{route('logout')}}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out pull-right"></i> @lang('general.logout.logout')
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                        </li>
                                    </ul>
                                </li>
                                @endpermission
                                @permission(('owner'))
                                   <li class="active" >
                                    <a href="{{url('manage-cafe')}}">Manage Cafe</a>

                                  </li>
                                @endpermission
                                @permission(('admin'))

                               <li>
                                   <li class="active" >
                                    <a href="{{url('admin')}}">Admin Panel</a>

                                  </li>
                                    
                                </li>
                                @endpermission


                            @else
                                <li class="active" >
                                    <a style="border: 1px solid white;padding: 10px 17px;margin-top: 10px;" data-toggle="modal" href="/login" onclick="openLoginModal();">Login</a>

                                </li>
                                <li class="active">
                                    <a data-toggle="modal" href="/register" onclick="openRegisterModal();">Sign Up</a>

                                </li>
                            @endif

                            </ul>

                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div><!-- /.header-bottom -->
                    </div><!-- /.header-content -->
                </div><!-- /.header-inner -->
            </div><!-- /.container -->
        </div><!-- /.header-wrapper -->
    </header><!-- /.header -->

<input type="hidden" name="idUser" id="idUser" value="{{Auth::user()->id}}">


    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    


                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <div class="page-title">
                            <form method="post" action="/saveBooking/{{ $detail->id }}?id={{Auth::user()->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" value="{{ $detail->id }}" name="idKafe" id="idKafe">

    <h1>Booking From {{$detail->name}} Cafe's</h1>
</div>



<div class="background-white p30 mb30">
    <h3 class="page-title">Booking Information</h3>

    <div class="row">
    <div class="col-sm-12">
        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                        <input class="form-control" name="book_name" id="book_name" type="text" placeholder="Booking Name" required="">
                    </div><!-- /.form-group -->
                    </div>

        <div class="col-sm-6">
       
           <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input class="form-control" name="book_phone" id="book_phone" type="text" placeholder="Phone" required="">
            </div><!-- /.form-group -->
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input class="form-control" type="date" name="book_tanggal" onchange="getHari(jQuery('#datepicker').val());" id="datepicker" placeholder="Date" required=""  readonly="">
                <input type="hidden" id="hari" name="">
                <input type="hidden" name="kafeSeat" id="kafeSeat" value="{{$detail->seat}}">
               
            </div><!-- /.form-group -->
            
                   
            
        </div><!-- /.col-* -->

        <div class="col-sm-6">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                <input class="form-control" name="book_email" id="book_email" type="text" placeholder="E-mail" required="">
            </div><!-- /.form-group -->
            <div class="row">
                 <div class="col-sm-8">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control" type="number"  name="book_persons" id="book_persons" min="1"  step="1"   onchange="getSeat(jQuery('#book_persons').val());">
                    </div>

                </div><!-- /.form-group -->
                
                <div class="col-sm-4" style="height: 100%; padding: 10px;">
                    <span style="line-height: 100%; display: block; font-size: 14; font-weight: 400px;">Persons</span>
                    <input  type="hidden" name="book_jam" id="book_jam" required="" >
    
                </div><!-- /.form-group -->
            </div>
            <!-- <div class="datepairExample">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    <input class="form-control timePic time end" type="text"  name="book_jam" id="book_jam" required="" >
                </div>
            </div> -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
    <br>
    <!-- handoko -->
    <div id="bukaTime" style="display: none;">
      <h5 class="page-title">Available Booking Time</h5>
      <div class="row">
              <div class="detail-gallery">
              <ul class="detail-gallery-index" id="jamKu">
                
                  
              </ul>
          </div><!-- /.detail-gallery -->
          
      </div>
    </div>


  



</div><!-- /.box -->

<div class="row">
    <div class="col-sm-12">

        <div class="background-white p30 mb30">
            <h3 class="page-title">Book A Menu</h3>


            <div class="row">
        <div class="col-sm-12 col-lg-12">
            @foreach($kategori as $kategoris)
                <h3>{{ucfirst($kategoris->category)}}</h3>
                    
                        <div class="row">
                        @foreach($menu as $menus)
                            @if($menus->category==$kategoris->category)
                            <div class="col-sm-3">
                                <div class="statusbox" >
                                    <h2>{{ substr($menus->name,0, 100) }}</h2>
                                    <div class="statusbox-content" style="margin:0;padding: 10px;">
                                        <img src="{{ asset('') }}images/{{$menus->images}}" alt="" style="width:120%; border-radius: 6px; overflow: relative; margin-right: 7px; margin-top: 0; margin-left: -15px;margin-right: -15px;">
                                        <span>Rp.{{$menus->price}}</span>
                                        <input type="hidden" name="menu_id[]" value="{{$menus->id}}">
                                        <div class="quantity" style="margin-bottom: 20px;">
                                          <input type="number" name="qty[]" min="0"  step="1" value="0">
                                        </div>
                                    </div><!-- /.statusbox-content -->

                                    
                                </div><!-- /.statusbox -->
                            </div>
                            @endif
                        @endforeach
                        </div><!-- /.row -->
                    
            @endforeach
        </div><!-- /.col-* -->

                                  
                              </div><!-- /.row -->
                                      
                                  </div><!-- /.box -->
                              </div>

                              
                          </div><!-- /.row -->


                          <div class="center">
                              <button type="submit" class="btn btn-primary btn-xl">Book Cafe</button>
                          </div><!-- /.center -->
                          </form>

                        </div><!-- /.content -->
                    </div><!-- /.col-* -->

                    <div class="col-sm-4 col-lg-3">
                        <div class="sidebar">
                            <div class="widget">
                                  <h2 class="widgettitle">Recent Listings</h2>

                                  @foreach($recent as $item)
                          <div class="card-small">
                              <div class="card-small-image">
                                  <a href="listing-detail.html">
                                      <img src="{{ asset('') }}images/{{$item->image or kafe.png}}" alt="img">
                                  </a>
                              </div><!-- /.card-small-image -->

                              <div class="card-small-content">
                                  <h3><a href="/detail/{{$item->id}}">{{$item->name}}</a></h3>
                                  <h4><a href="/detail/{{$item->id}}">{{$item->desc}}</a></h4>
                                  <div class="/detail/{{$item->id}}">{{$item->seat}}/ person</div>
                              </div><!-- /.card-small-content -->
                          </div><!-- /.card-small -->
                        @endforeach
                                   
                                    
    
        

                                   
                                
                            </div><!-- /.widget -->

                            
                            


                            <div class="widget">
                              <h2 class="widgettitle">Working Hours</h2>

                              <div class="p20 background-white">
                                  <div class="working-hours">
                                      <?php
                                                          $days= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                                                          $tmp = 0
                                                  ?>


                                                  @for ($i = 0; $i <= 6; $i++)
                                                      <div class="day clearfix">
                                                          <span class="name">{{ $days[$i] }}</span><span class="hours">
                                                          @if(isset($jambuka[$tmp]) and $i == $jambuka[$tmp]->day)
                                                              {{$jambuka[$tmp]->open_hour}} Wib - {{$jambuka[$tmp]->close_hour}} Wib 
                                                              <?php  
                                                                  $tmp += 1;
                                                              ?>
                                                          @else
                                                              Closed
                                                          @endif
                                                          </span>
                                                      </div>
                                                  @endfor 
                                  </div>
                              </div>
                          </div><!-- /.widget -->


                            <div class="widget">
                              <h2 class="widgettitle">Facility</h2>

                              <ul class="menu">
                                 @if(count($highlight))
                                        @foreach($highlight as $highlights)
                                            <li class="yes" style="text-transform: capitalize;"><a href="">{{$highlights->name}}</a></li>
                                        @endforeach
                                    @else
                                        <h5>There is no facility yet</h5>
                                    @endif
                              </ul><!-- /.menu -->
                          </div><!-- /.wifget -->



                        </div><!-- /.sidebar -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

    <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Superlist</h2>

                    <p>Superlist is directory template built upon Bootstrap and SASS to bring great experience in creation of directory.</p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Contact Information</h2>

                    <p>
                        Your Street 123, Melbourne, Australia<br>
                        +1-123-456-789, <a href="#">sample@example.com</a>
                    </p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Stay Connected</h2>

                    <ul class="social-links nav nav-pills">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul><!-- /.header-nav-social -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-left">
                &copy; 2017 All rights reserved.
            </div><!-- /.footer-bottom-left -->

            <div class="footer-bottom-right">
                <ul class="nav nav-pills">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Contact</a></li>
                </ul><!-- /.nav -->
            </div><!-- /.footer-bottom-right -->
        </div><!-- /.container -->
    </div>
</footer><!-- /.footer -->

</div><!-- /.page-wrapper -->

<script src="{{ asset('') }}assets/js/jquery.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/map.js" type="text/javascript"></script>

<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

<script src="{{ asset('') }}assets/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<script src="{{ asset('') }}assets/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

<script src="{{ asset('') }}assets/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset('') }}assets/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="{{ asset('') }}assets/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="{{ asset('') }}assets/js/superlist.js" type="text/javascript"></script>
<script type="text/javascript">
        jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });
</script>
<script src="{{asset('gantella/build/js/maps.js')}}"></script>
  <script src="{{asset('gantella/build/js/jquery.timepicker.js')}}"> </script>
  <script src="{{asset('gantella/build/js/lib/bootstrap-datepicker.js')}}"> </script>
  <script src="{{asset('gantella/build/js/lib/site.js')}}"> </script>
  <script src="{{asset('gantella/build/js/datepair.js')}}"> </script>
  <script src="{{asset('gantella/build/js/jquery.datepair.js')}}"> </script>

  <script>
  var jam = [];

    $('.datepairExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'h:i A'
    });

    $('.datepairExample').datepair();
    var dateToday = new Date();
    $( function() {
        $("#datepicker").datepicker({autclose: true});
    });
    function getHari(hari) {
        var d = new Date(hari);
        var n = d.getDay()
        // document.getElementById("demo").innerHTML = n;
        $('#hari').val(n);
       //  if($("#datepicker").val()===""){
       //    $("#bukaTime").text(" ");
       //    $("#bukaTime").append('<div class="alert alert-icon alert-warning" role="alert">Your Booking slot is not available, please fill the date!</div>');

       // document.getElementById("bukaTime").style.display='inherit';   
       //  }else{
       //    $("#bukaTime").text(" ");
       //  }
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
             console.log("tes masuk");
             $.ajax({
              type: 'GET',
              url: '/slots/'+$('#hari').val()+'?idKafe='+$('#idKafe').val(),

              data: {'idUser':'zzz', 'kafe':'zz'},
              success: function( data ) {
                $("#jamKu").empty();
                 // $(".doko").load("/login");
                 console.log("tees sukses");
                 var doko=data[0];
                 console.log(doko);
                 // var data=JSON.parse(data);
                 if(data!=''){
                     $('.datepairExample .time').timepicker({
                        'minTime': doko["open_hour"],
                        'maxTime': doko["close_hour"],
                        'timeFormat': 'h:i A',
                    });
                    var tmp=doko["open_hour"].split(":");
                    tmp=parseInt(tmp[0]);
                    var tmp2=doko["close_hour"].split(":");
                    tmp2=parseInt(tmp2[0]);
                    console.log(tmp,tmp2);
                    for(var i=tmp;i<=tmp2;i++){
                      var x=i<10?'0'+i:i;
                      var randy='<div class="owl-item active" style="width: 143.6px; margin-right: 0px;" id="jam'+i+'"><li class="detail-gallery-list-item active"><a data-target=""><button onclick="getJam(\''+x+':00'+'\')" class="btn btn-sm btn-danger" type="button">'+x+':00'+'</button></a></li></div>';
                       //console.log(randy);
                       $("#jamKu").append(randy);
                    }

                 }else{
                    // alert("Day is not available for booking!")
                     $('#datepicker').val(" ");
                 }


              }
             });
    }

     function getJam(jam) {
     // alert(jam);
      $("#book_jam").val(jam);
     }
    function getSeat(seat) {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
             console.log("tes masuk");
             $.ajax({
              type: 'GET',
              url: '/seats/'+$('#idKafe').val()+'?tgl='+$('#datepicker').val()+'&seat='+seat,

              data: {'idUser':'zzz', 'kafe':'zz'},
              success: function( data ) {
               // document.getElementById("bukaTime").style.display='inherit';
                 var doko=data;
                 console.log(doko);
                 var i = 0;
                 var jam = [];

                while (i < doko.length) {
                    // console.log("banyak seat = "+ $('#kafeSeat').val());
                    // console.log("yang udah pesan = "+doko[i]["persons"]);

                    var total = parseInt(doko[i]['persons']) + parseInt(seat);
                    var requestSeat = parseInt($('#kafeSeat').val());
                    // console.log("total " + total);

                   console.log(doko[i]["persons"]);
                    var tmp = doko[i]["bookingTime"].split(":");
                    tmp     = parseInt(tmp[0]);
                    console.log(tmp);
                    if(total>requestSeat){
                        $('#jam'+tmp).hide();
                    }
                    else{
                      $('#jam'+tmp).show(); 
                    }
                    i++;
                }
                $('.datepairExample .time').timepicker({
                    'disableTimeRanges': jam
                });

                $('.datepairExample').datepair();
                
                document.getElementById("bukaTime").style.display='inherit';                  
              }
             });
    }
    

  </script>
  <script src="{{asset('gantella/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>

</body>

<!-- Mirrored from preview.byaviators.com/template/superlist/listing-submit.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 14 May 2017 15:06:29 GMT -->
</html>
