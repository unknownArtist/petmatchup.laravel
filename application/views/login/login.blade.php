@layout('layouts.default')
@section('content')

<!--Banner Section-->
			<div id="banner">
				<div class="bannerslides"><img src="images/banner1.png" alt="petmatchup" /></div>
			</div>
			
			
			<!--Dogs Section-->
			<div id="dogs">
				<h2>Real dogs looking for playdates</h2>
				<div class="dogimg"><img src="images/dog1.gif" /></div>
				<div class="dogimg"><img src="images/dog2.gif" /></div>
				<div class="dogimg"><img src="images/dog3.gif" /></div>
				<div class="dogimg"><img src="images/dog4.gif" /></div>
				<div class="dogimg" style="margin-right:0px;"><img src="images/dog5.gif" /></div>
				<div class="clear"></div>
			</div>
			
			
			<!--Welcome Section-->
			<div id="welcome">
				<div class="left">
					<div class="welcomeimg"><img src="images/welcomeimg.png" /></div>
					<div class="welcometext">
						<h2>WELCOME!<br /> <span>to Petmatchup</span></h2>
						<p>Petmatchup is a website that is being designed and developed, having the purpose in mind of providing the means to create and keep open a line of communication among people who love pets, or so called pet lovers. We hope to create a network of pet lovers, a niche, where they can relate to each other and provide to themselves the information required to take good care of the pet.</p>
						<div class="button"><a href="#" title="Read More">Read More</a></div>
					</div>
				</div>
				<div class="right">
					<h3>Latest Updates</h3>
					<div id="faded">
                    	<ul style="position: relative; ">
                           <li style="position: absolute; top: 0px; left: 0px; z-index: 0; display: list-item; "><img alt="" src="./images/yourkie-slide.gif">
								<div class="content">
									<h2>Yorkie</h2>
									<p>The Yorkshire Terrier is a small dog breed of Terrier type, developed in the i8oos in the historiccal area of Yorkshire in England. <a href="#" title="Read More">Read More</a></p>
								</div>
							</li>
                           <li style="position: absolute; top: 0px; left: 0px; z-index: 0; display: none; "><img alt="" src="./images/jack-slide.gif">
								<div class="content">
									<h2>Jack Russell</h2>
									<p>The Jack Russell Terrier is a small, principally white bodied, smooth or rough coated terrier that has its origins in fox hunting. <a href="#" title="Read More">Read More</a></p>
								</div>
							</li>
                           <li style="position: absolute; top: 0px; left: 0px; z-index: 0; display: none; "><img alt="" src="./images/royalpug-slide.gif">
								<div class="content">
									<h2>Royal Pug</h2>
									<p>The Pug is a small breed of dog with a wrinkly, short muzzled face, and curled tail.The breed is often summariezed as multum in parvo <a href="#" title="Read More">Read More</a></p>
								</div>
							</li>
                           <li style="position: absolute; top: 0px; left: 0px; z-index: 0; display: none; "><img alt="" src="./images/shih-slide.gif">
								<div class="content">
									<h2>Shih Tzu</h2>
									<p>Shih Tzu is the chinese name rendered according to the wade Giles system of romanization in use when the breed was first introduced in europe. <a href="#" title="Read More">Read More</a></p>
								</div>
							</li>          
                        </ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			
			
			<!--Video Section-->
			<div id="mainbody">
				<div class="videosection">
					<h2>YouTube Channel</h2>
					
					<div class="youtubevideo">
						<iframe width="580" height="343" src="http://www.youtube.com/embed/vHGZJXgR2aE" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="mapsection">
					<h2>Search Location</h2>
					<input name="" placeholder="Search Location here" type="text" />
					<div class="button"><a href="#" title="Search Now!">Search</a></div>
					<div class="clear"></div>
					
					<div class="googlemap">
						<iframe width="350" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pet+Match+Up&amp;sll=37.0625,-95.677068&amp;sspn=54.005807,79.013672&amp;ie=UTF8&amp;hq=Pet+Match+Up&amp;hnear=&amp;t=m&amp;ll=37.020098,-95.625&amp;spn=41.667373,61.523438&amp;z=3&amp;output=embed"></iframe>
					</div>
					
				</div>
				<div class="clear"></div>
			</div>

    
@endsection

