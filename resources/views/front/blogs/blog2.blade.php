@include('frontPartial.header')
<style>
    .single-blog img {
        object-fit: cover;
        /* height: 500px; */
        width: 100%;


    }
</style>
<section id="hero" style=" margin:auto;">
    <div class="hero-container mt-5" style="margin:auto;">
        <div class="what-we-offer mt-5">
            <h1>Programming Languages and their frameworks</h1>
            <h2 style="background:transparent;">Despite tough economic times, many organizations are still tasked with hiring in volume — and quickly.</h2>
        </div>
    </div>
</section>
<main id="main">
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog single-blog">
        <div class="container" data-aos="fade-up">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h3 class="">Simple mind map with programming languages and related software frameworks:</h3>
                    <img src="{{asset('assets/img/blog/0.jpg')}}" />
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <img src="{{asset('assets/img/blog/1.jpg')}}" />
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-12">
                    <h4>#socialmedia #marketing #socialmediamarketing #virtualhiring #recruitment #candidates #hiring #remote #digitalmarketing #instagram #branding #business #marketingdigital #seo #design #entrepreneur #graphicdesign #contentmarketing #advertising #onlinemarketing #facebook #smallbusiness #marketingstrategy #digital #webdesign #like #marketingtips #follow #socialmediamanager #social #media #website</h4>
                </div>
            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->
@include('frontPartial.footer')