@extends('frontend.front_layout')
@section('canonical')
https://www.dbestech.com/it_freelancing_job
@endsection
@section('title')
Be A Member Of DBestech Freelancing Team
@endsection

@section('meta_description')
Work with us from a remote place. Software freelancing is the best way to make money from home. The easiest way to make risk free money. Partnership with us.
@endsection
@section('meta_keywords')
Make money from home, remote work, get commision, out sourcing software company, Work from home, software freelancing
@endsection
@section('og_title')
Be A Member Of DBestech Freelancing Team
@endsection
@section('og_description')
Work with us from a remote place. Software freelancing is the best way to make money from home. The easiest way to make risk free money. Partnership with us.
@endsection
@section('content')
<script type="text/javascript" src="{{asset('js/dbjs.js?v=1.4')}}" defer></script>
<style type="text/css">
    
    .db-header{
        background-image:url({{url('img/header1.jpg')}});
        background-size: cover;
        position: relative;
        background-color: transparent;
        background-repeat: no-repeat;
        background-position:center;
        overflow: hidden;
    }
    .db-header-mobile{
        display: none;
    }

    .header-content{
        z-index: 1;
        position: relative;
    }

    .header-content h1{
        font-size:45px;
        text-transform: capitalize;
        color: white;
    }

    .header-content p{
        font-size:20px;
        margin:20px 0 25px;
        color:white;
        letter-spacing: 1px;
        font-weight: 300;
        text-transform: capitalize;
    }



    ul>li{
        list-style-type: none;
    }

#bg-one {
    background: url('img/bg-one.svg') ;
    background-size: cover;

    background-color: transparent;
    background-repeat: no-repeat;
}


.bg-one, .bg-two{
    margin-top: 50px;
    margin-bottom: 50px;
}


#menu-id{
    margin-right: 2%;
}


.do-class-li{
    margin-top:20px;
    font-size:18px;
}

.do-class-li-sm{
    margin-top:20px;
    font-size:16px;
}

.do-class-li:before {
    content: "";
    display: block;
    background: url('img/li-grey.svg') no-repeat;
    width: 30px;
    height: 30px;
    float: left;
    margin: 5px 10px 0 0;
}
.do-class-li-sm:before {
    content: "";
    display: block;
    background: url('img/li.svg') no-repeat;
    width: 15px;
    height: 15px;
    float: left;
    margin: 5px 5px 0 0;
}

ul>li{
    list-style-type: none;
}


@media screen and (max-width: 600px) {

  .db-header{
    display: none;
  }


  .db-header-mobile{
        display: block;
    
        background-image:url('img/mobile-background-seo.svg');
      
        background-color: transparent;
        background-repeat: no-repeat;
        background-position:center;
        overflow: hidden;
        background-size:100%;
        background-repeat-y: no-repeat;
        background-position-y: top;
  }
  #head-title{
    padding:10px;
  }
}

@media screen and (max-width: 600px) {
      #head-title{
    padding:10px 10px 10px 20px;
  }
    .header-content h1{
        font-size: 35px;
        padding: 10px 10px 10px 20px;
    }

  #menu-id{
    margin-right: 5%
  }

}


html, body {
    max-width: 100%;
    overflow-x: hidden;
}
.collapsible {
  background-color: #3da2dc;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active-faq, .collapsible:hover {
  background-color: #2677be;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
  outline: none;
}

.active-faq:after {
  content: "\2212";
}

.open {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
.button:focus{
    outline: none;
}
.p-class{
    padding-top: 16px;
    padding-bottom: 16px;
    margin-bottom: 0px;
}
</style>

    <div class="container-fluid db-header" style="padding-left: 0; padding-right: 0">
        <div class="header-content">
            <div class="row">
                <div class="col-lg-12" style="padding-left: 30px;">
                    <div style="margin-top: 20px;"></div>
                    <h1 id="head-title" style="text-align:center">Be a member of DBestech freelancing team</h1>
                    <p style="text-align:center">
                        Code a project and record a video and get paid immediately and get certified!
                    </p>

                    <div class="text-center" style="margin:10%">
                        <img src="{{asset('img/rocket.svg')}}" style="width: 250px; height: auto;" alt="find software clients">
                        <div class="text-center" style="color:white; font-size: 24px;">
                            We made making money easy for many of you!
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
 @section('content')
<section class="">
    <div class="container" style="padding-left: 0px; padding-right: 0px; margin-bottom: 70px;">
        <div class="row">
            <div class="col-12">
                <p class="text-center" style="color:#3da2dc; padding: 30px 10px 10px 10px; font-size:30px;">A win win package</p>
            
                <div >
                <p>
                    This is a freelancing position where you would be able to finish a project on your own. These projects would be used for dbestech YouTube channel and other resources.

You would be given a topic and UI to program using Flutter framework. 

After once you are done coding you need to record the whole process as a video. You need to take a lot of short videos using your computer. 

Given that you English accent must be very good since we will publish these videos to our channel dbestech. 

                </p>

                </div>
               
                <ul style="padding-left:10px";>
                    <li class="do-class-li">Flutter + Laravel</li>
                    <li class="do-class-li">Flutter + Django</li>
                    <li class="do-class-li">Flutter + Riverpod</li>
                    <li class="do-class-li">Flutter + BLoC </li>
                    <li class="do-class-li">Flutter + Getx</li>
                    <li class="do-class-li">Flutter + Provider</li>
            
                </ul>
            </div>
             <div class="col-12">
                <p class="text-center" style="color:#3da2dc; padding: 30px 10px 10px 10px; font-size:30px;">A win win package</p>
                You get paid immediately after the video submission. <br>
                
Send me your introductory video in mp3 audio info@dbestech.com<br>

Twitter/Instagram for detail talk @dbestech <br>
            </div>
        </div>
    </div>

</section>


@endsection



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active-faq");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
      
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
     
    } 
  });
}
</script>
