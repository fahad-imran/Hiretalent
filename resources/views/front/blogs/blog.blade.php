@include('frontPartial.header')
<style>
    .card {  
        border: 1px solid #30AD23;
        border-radius: 10px;
        overflow: hidden;
    }

    img.card-img-top {
        height: 250px;
        object-fit: cover;
        width: 100%;
    }

    .card-title {
        font-weight: 600;
        font-size: 23.1px;
        color: black;
        margin-bottom: 10px;
        border-bottom: 1px solid #30AD23;
        padding-bottom: 10px;
        min-height: 94px;
        overflow: hidden;
    }

    .card-text {
        font-size: 15.7px;
        font-weight: 400;
        margin-bottom: 10px;
        display: inline-block;
        color: #000000;
    }
    .blog-container .card-body{
        display:flex;
        flex-direction:column;
    }
    .blog-container .card-body a.btn.btn-success.btn-block{
        margin-top:auto;
        
    }
    .blog-container .card{
        margin-bottom:20px;
    }
    .blog-container .btn-block{
        width:70% !important;
        margin-left: auto;
        margin-right: auto;
    }
    .blog-container .btn-success{
        background-color: #9AC40C;
        border-color: #9AC40C;
        font-size: 15.1px;
        color: white;
        font-weight: 600;
    }
</style>
<body>   
<section id="hero" style=" margin:auto;">
    <div class="hero-container mt-5" style="margin:auto;">
        <div class="what-we-offer mt-5">
            <h1>Blogs</h1>
            <h2 style="background:transparent;">{{__('Welcome To Our Blogs Section.')}}</h2>
        </div>
    </div>
</section>
<div style="max-width: 800px; padding:30px 0px;" class="container blog-container">
    <div class="row mb-3 mt-5">
        <div class="col-md-6 d-flex ">
            <div class="card">
                <a href="{{route('blog.blog1')}}"><img src="{{asset('assets/img/blog/blog-1.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <a href="{{route('blog.blog1')}}">
                        <h5 class="card-title">{{__('How Virtual Hiring is Transforming the Company Procedures')}}</h5>
                    </a>
                    <p class="card-text">{{__('Despite tough economic times, many organizations are still tasked with hiring in volume and quickly. With businesses opening again and companies starting to adapt to the current situation we also see an increase in the demand for certain roles.')}}</p>
                    <a href="{{route('blog.blog1')}}" class="btn btn-success btn-block">{{__('Read more..')}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex">
            <div class="card">
                <a href="{{route('blog.blog2')}}"><img src="{{asset('assets/img/blog/frameworks.png')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <a href="{{url(App::getLocale().'/blog/how-virtual-hiring')}}">
                        <h5 class="card-title">{{__('Programming Languages and their frameworks')}}</h5>
                    </a>
                    <p class="card-text">{{__('A programming language is a set of commands that instructs a software or computer\'s functionality. While a framework provides the foundation for implementing the language\'s commands. Syntax and rules are the building blocks of programming languages.')}}</p>
                    <a href="{{url(App::getLocale().'/blog/programming-languages-and-their-frameworks')}}" class="btn btn-success btn-block">{{__('Read more..')}}</a>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
@include('frontPartial.footer')