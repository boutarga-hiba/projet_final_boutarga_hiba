  @extends("layouts.index_frontend")
@section('contact')
<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="breadcrumb_iner">
          <div class="breadcrumb_iner_item">
            <h2>contact us</h2>
            <p>Home <span>-</span> contact us</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumb start-->

<!-- ================ contact section start ================= -->
<section class="contact-section padding_top">
  <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4">
      <div id="map" style=""></div>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106207.68243407739!2d-7.499732202734382!3d33.70920570000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7b6ff3b391ddd%3A0x59bda15a7ed9fecf!2sKITEA%20MOHAMMEDIA!5e0!3m2!1sfr!2sma!4v1695219391026!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="d-flex justify-center align-items-center w-100 "></iframe>
      {{-- <script>
        function initMap() {
          var uluru = {
            lat: -25.363,
            lng: 131.044
          };
          var grayStyles = [{
              featureType: "all",
              stylers: [{
                  saturation: -90
                },
                {
                  lightness: 50
                }
              ]
            },
            {
              elementType: 'labels.text.fill',
              stylers: [{
                color: '#ccdee9'
              }]
            }
          ];
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {
              lat: -31.197,
              lng: 150.744
            },
            zoom: 9,
            styles: grayStyles,
            scrollwheel: false
          });
        }
      </script> --}}
      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
      </script>

    </div>


    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">Get in Touch</h2>
      </div>
      <div class="col-lg-8">
        <form class="form-contact contact_form" action="{{route("mailbox.store")}}" method="POST"
        novalidate="novalidate" >
        @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">

              <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                placeholder='Enter Message'></textarea>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
            </div>
          </div>
        </div>
        <div class="form-group mt-3">
          <button type="submit" class="btn_3 button-contactForm">Send Message</button>
        </div>
      </form>
      </div>
      <div class="col-lg-4">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
         


        @foreach ($infos as $info)
                        <div class="media-body">
                            <h3>{{$info->ville}}</h3>
                            <p>{{$info->adrs}}</p>

                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                          <h3>{{$info->phone}}</h3>
                            <p>{{$info->emploi}}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                          <h3>{{$info->email}}</h3>
                          <p>{{$info->title}}</p>
                        </div>
                    </div>
                    @endforeach
      </div>
    </div>
  </div>
</section>
<!-- ================ contact section end ================= -->
@endsection
