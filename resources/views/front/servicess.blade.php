@include('layouts.front.includes.header')
@if(\Session::has('msg'))
	<div class = 'alert alert-success'>
		<p>{{ \Session::get('msg') }}</p>
	</div></br>
	@endif
@yield('content')


<section class="about-tab-box sectpad">
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-4 col-lg-3">
            <div class="tab-title-box">
              <ul role="tablist" class="clearfix">
                <li data-tab-name="history"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">Our VISION</a></li>
                <li data-tab-name="mission" class="active"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">Our VALUES</a></li>
                <li data-tab-name="vision"><a href="#vision" aria-controls="vision" role="tab" data-toggle="tab">Our MISSION</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-8 col-lg-9">
            <div class="tab-content-box tab-content about-tab">
              <div id="history" class="single-tab-content tab-pane fade">
                <h2>Our VISION</h2>
                <p>Our distinct Purpose and our operational expertise across our business model will help realise our vision to grow our business, whilst decoupling our environmental footprint from our growth and increasing our positive social impact. This is captured in the Unilever Sustainable Living Plan.</p>
                <p>By combining our multinational expertise with our deep roots in diverse local cultures, we’re continuing to provide a range of products to suit a wealth of consumers. We’re also strengthening our strong relationships in the emerging markets we believe will be significant for our future growth.</p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="images/about/abt-vision1.png" alt="" class="img-responsive"><img src="images/about/abt-vision2.png" alt="" class="img-responsive"></div>
                </div>
              </div>
              <div id="mission" class="single-tab-content tab-pane fade in active">
                <h2>Our VALUES</h2>
                <p>Bikki COnsult is a global company, active in the fields of web development projects. We operate worldwide and see ourselves as an active member of society in all communities in which we are present. With this presence comes responsibility, which we live up to by pursuing clearly defined principles expressing our basic ethical philosophy.</p>
                <p>Our corporate culture is built on our LIFE values, which are firmly anchored in our company and provide us with guidance in our daily work. LIFE stands for Leadership, Integrity, Flexibility and Efficiency.</p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="images/about/abt-value1.png" alt="" class="img-responsive"><img src="images/about/abt-value2.png" alt="" class="img-responsive"></div>
                </div>
              </div>
              <div id="vision" class="single-tab-content tab-pane fade">
                <h2>Our MISSION</h2>
                <p>To exceed our customers’ expectations with innovative and bespoke Assurance, Testing, Inspection and Certification services for their operations and supply chain. Globally. 24/7.</p>
                <p>The foundations and aspirations of our business remain true to those established by our visionary founders, and their innovation and energy continue to be our inspiration. Our passion and entrepreneurial culture will ensure that we deliver for our customers in safety, quality and assurance – today and in the future.</p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="images/about/abt-mission1.png" alt=""><img src="images/about/abt-mission2.png" alt=""></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



@include('layouts.front.includes.footer')