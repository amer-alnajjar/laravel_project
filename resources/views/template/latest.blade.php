@extends('/template.template')
@section('latest')
<div class="blog pt-5 pb5  ">
    <div class="container  wow animate__fadeInUp">
        <div class="main-title mt-5 mb-5 position-relative text-center">
            <h2 class="mt-4">Latest articles.</h2>
            <p class="text-black-50 text-uppercase">See how your users experience your website in realtime</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img class="img-fluid mb-3" src="{{asset('/template/img/1 (1).jpg')}}" alt=""/>
                    <div class="card-body">
                        <h4>Bluetooth Speaker</h4>
                        <p class="text-black-50">See how your users experience your website in realtime or view
                            trends to see any changes
                            in performance over time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img class="img-fluid mb-3" src="{{asset('/template/img/3 (1).jpg')}}" alt="" />
                    <div class="card-body">
                        <h4>Minimalist Chandelier</h4>
                        <p class="text-black-50">See how your users experience your website in realtime or view
                            trends to see any changes
                            in performance over time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img class="img-fluid mb-3" src="{{asset('/template/img/5.jpg')}}" alt="" />
                    <div class="card-body">
                        <h4>Standard Shape</h4>
                        <p class="text-black-50">See how your users experience your website in realtime or view
                            trends to see any changes
                            in performance over time.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a class="btn rounded-pill mb-5 main-btn" href="">I WANT MORE .... </a>
        </div>
    </div>
</div>
@endsection
