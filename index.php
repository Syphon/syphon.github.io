<?php include("header.php"); ?>

<div id="doc3" class="yui-t7">
	<div id="hd">
	</div>
	<div id="bd">
		<div id="yui-main">
			<div id="content">
				<h1>Introducing Syphon</h1>
				<p>
					Syphon is an <a href="#license">open source</a> Mac OS X technology that allows applications to share frames - full frame rate video or stills - with one another in realtime. Now you can leverage the expressive power of a plethora of tools to mix, mash, edit, sample, texture-map, synthesize, and present your imagery using the best tool for each part of the job. Syphon gives you flexibility to break out of single-app solutions and mix creative applications to suit your needs.
				</p>
				<p align="center">
					Videos: <a href="http://player.vimeo.com/video/14566287?byline=0&amp;portrait=0" onclick="return changeIframeSrc('video', this.href)">Syphon Overview</a> |
						<a href="http://player.vimeo.com/video/14533128?byline=0&amp;portrait=0" onclick="return changeIframeSrc('video', this.href)">Quartz Composer Integration</a> |
						<a href="http://player.vimeo.com/video/14531751?byline=0&amp;portrait=0" onclick="return changeIframeSrc('video', this.href)">FreeFrame GL Integration</a> |
						<a href="http://player.vimeo.com/video/14541624?byline=0&amp;portrait=0" onclick="return changeIframeSrc('video', this.href)">Syphon 2K Jitter Demo</a> |
						<a href="http://vimeo.com/groups/syphon/videos">Syphon Vimeo Group</a>
				</p>
				<div style="text-align:center;">
					<iframe src="http://player.vimeo.com/video/14524486?title=0&amp;byline=0&amp;portrait=0" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>

				<h2>Features</h2>
				<p>
					Syphon provides an ecosystem for sharing imagery between applications and new media development environments. Syphon is designed to be efficient and will not duplicate resources unnecessarily, keeping your frame rate and best interests in mind.
				</p>
				<ul style="margin-left:10px">
				<li style="margin-left:10px">Hardware acceleration on the GPU - Servers and Clients share video on the graphics card - where it belongs, allowing for HD or larger video at 60 FPS</li>
				<li style="margin-left:10px">Alpha-channels - share rendered 3D content and video with masks and keys, allowing compositing to happen easily and naturally.</li>
				<li style="margin-left:10px">A simple SDK so developers can add Syphon to just about any application</li>
				<li style="margin-left:10px">Compatible with MacOS X 10.6 (Snow Leopard) or later.</li>

				</ul>

				<h2>Applications</h2>
				<p>
				The list of Syphon enabled applications keeps growing. Here are is a sample of interoperable applications, inlcuding live performance, content creation, show control, visualizers, development, creative coding, live coding, patching environments, game engines, projection mapping, and capture tools.
				</p>

				<p>You can mix these tools and more to find unique solutions to your creative problems.
<!-- 				</p>
				<h3>Live Performance, Content Creation, Show Control, Visualizers</h3>
				<p> 
 -->				
				 <div align="center">

				<?
					$sponsored = array(
					  	 array("title" => "VDMX",
					  	 		"icon" => "VDMX_128.png",
					  	 		"url" => "http://vidvox.net"),

					  	 array("title" => "MadMapper",
					  	 		"icon" => "MadMapper_128.png",
					  	 		"url" => "http://madmapper.com"),

					  	 array("title" => "Modul8",
					  	 		"icon" => "Modul8_128.png",
					  	 		"url" => "http://modul8.us")
					  	 );

					foreach ($sponsored as $app)
					{
						?>
						<div class="iconurl2">
	 					<a href="<? echo $app["url"] ?>" title="<? echo $app["title"] ?>"><img src="app_icons/<? echo $app["icon"] ?>" width="128" height="128" /></a>
						</div>
						<?
					}

				?>
	 				
				</div>

				<br />

					<?
					$sponsored = array(
					  	 array("title" => "2V-P",
					  	 		"icon" => "2v-p_32.png",
					  	 		"url" => "http://www.2v-p.tv"),

					  	 array("title" => "Airbeam",
					  	 		"icon" => "AirBeam_32.png",
					  	 		"url" => "http://appologics.com/airbeam"),

					  	 array("title" => "Bazik",
					  	 		"icon" => "Bazik_32.png",
					  	 		"url" => "http://bazik-vj.com"),

					  	 array("title" => "Blendy VJ",
					  	 		"icon" => "Blendy_32.png",
					  	 		"url" => "http://blendyvj.com"),

					  	 array("title" => "Cell DNA",
					  	 		"icon" => "cellDNA_32.png",
					  	 		"url" => "http://lividinstruments.com/news/cell-cell-dna-vj-software/"),

					  	 array("title" => "CoGe",
					  	 		"icon" => "CoGe_32.png",
					  	 		"url" => "http://cogevj.hu/"),

					  	 array("title" => "DiscoBrock",
					  	 		"icon" => "DiscoBrick_32.png",
					  	 		"url" => "http://www.discobrick.com"),

					  	 array("title" => "DomePort",
					  	 		"icon" => "DomePort_32.png",
					  	 		"url" => "http://sat.qc.ca/en/logiciels/domeport"),

					  	 array("title" => "eMotion",
					  	 		"icon" => "eMotion_32.png",
					  	 		"url" => "http://www.adrienm.net/emotion/eMotion.html"),

					  	 array("title" => "Fluxus",
					  	 		"icon" => "Fluxus_32.png",
					  	 		"url" => "http://www.pawfal.org/fluxus/packages/"),

					  	 array("title" => "Glypheo",
					  	 		"icon" => "Glypheo_32.png",
					  	 		"url" => "http://glypheo.com/"),

					  	 array("title" => "Grand VJ",
					  	 		"icon" => "GrandVJ_32.png",
					  	 		"url" => "http://www.arkaos.net/product/index.php?catid=1&pid=1001&iid=42"),

					  	 array("title" => "Isadora",
					  	 		"icon" => "Isadora_32.png",
					  	 		"url" => "http://troikatronix.com"),

  	 					 // array("title" => "Just Add Music",
					  	 	// 	"icon" => "JAM_32.png",
					  	 	// 	"url" => "/www.justaddmusictv.com/justaddmusic/Just_Add_Music_2/Just_Add_Music_2.html"),
					  	
					  	 array("title" => "Magic",
					  	 		"icon" => "Magic_32.png",
					  	 		"url" => "http://magicmusicvisuals.com"),

					  	 array("title" => "MBOX",
					  	 		"icon" => "MBOX_32.png",
					  	 		"url" => "http://www.prg.com/prg-products/media-servers/mbox-media-server"),

					  	 array("title" => "MediaMaster",
					  	 		"icon" => "MediaMaster_32.png",
					  	 		"url" => "http://www.arkaos.net/product/index.php?catid=2&pid=10031&iid=74"),

					  	 array("title" => "Millumin",
					  	 		"icon" => "millumin_32.png",
					  	 		"url" => "http://www.millumin.com"),
					  	 );

					foreach ($sponsored as $app)
					{
						?>
						<div class="iconurl2">
	 					<a href="<? echo $app["url"] ?>" title="<? echo $app["title"] ?>"><img src="app_icons/<? echo $app["icon"] ?>" width="40" height="40" /></a>
						</div>
						<?
					}

				?>

					<div class="iconurl2">
		        		<a href="http://www.inklen.com/mixemergency/" title="Mix emergency"><img src="app_icons/MixEmergency_32.png" width="40" height="40" /></a>
		            </div>
		            <div class="iconurl2">
		        		<a href="https://github.com/bakercp/IPCAM2SYPHON" title="IPCAM2SYPHON"><img src="app_icons/IPCAM2SYPHON_32.png" width="40" height="40" /></a>
		            </div>

    				<div class="iconurl2" >
		            	<a href="http://hv-a.com/lpmt/" title="Little Projection Mapping Tool"><img src="app_icons/LPMT_32.png" width="40" height="40" /></a>
		            </div>

					<div class="iconurl2" >
		            	<a href="http://pixelconduit.com/index.html" title="PixelConduit"><img src="app_icons/PixelConduit_32.png" width="40" height="40" /></a>
		            </div>

					<div class="iconurl2" >
		            	<a href="http://www.mxwendler.net/" title="MXWendler"><img src="app_icons/MXWendler_32.png" width="40" height="40" /></a>
		            </div>

					<div class="iconurl2" >
		            	<a href="http://www.omnido.me" title="Omnidome"><img src="app_icons/Omnidome_32.png" width="40" height="40" /></a>
		            </div>

		             <div class="iconurl2">
		                <a href="http://www.renewedvision.com/propresenter.php" title="ProPresenter"><img src="app_icons/ProPresenter_32.png" width="40" height="40" /></a>
		            </div>


		            <div class="iconurl2">
		            	<a href="http://figure53.com/qlab/" title="QLab"><img src="app_icons/QLab_32.png" width="40" height="40" /></a>
		            </div>

					<div class="iconurl2">
		            	<a href="https://github.com/Dewb/radome" title="Radome"><img src="app_icons/Radome_32.png" width="40" height="40" /></a>
		            </div>


					<div class="iconurl2">
		            	<a href="http://resolume.com/" title="Resolume"><img src="app_icons/Resolume_Arena_32.png" width="40" height="40" /></a>
		            </div>
		            <div class="iconurl2">
		                <a href="http://serato.com/video" title="Serato Video"><img src="app_icons/Serato_Video_32.png" width="40" height="40" /></a>
		            </div>
        		    <div class="iconurl2">
		                <a href="http://www.signalculture.org/appclub.html" title="Signal Culture App Club"><img src="app_icons/SignalCulture_32.png" width="40" height="40" /></a>
		            </div>

        		    <div class="iconurl2">
		                <a href="https://github.com/paperManu/splash" title="Splash!"><img src="app_icons/Splash_32.png" width="40" height="40" /></a>
		            </div>

<!-- 						<div class="iconurl2" id="syphon1394">
						<a href="http://andreacremaschi.github.io/Syphon1394/">Syphon1394</a><br/>
					</div> -->
<!-- 					<div class="iconurl2" id="vdmx">
		                <a href="http://vidvox.net/">VDMX</a>
		            </div>
 -->					<div class="iconurl2">
		                <a href="http://www.non-lethal-applications.com/products/video-slave-2-0" title="Video Slave 2"><img src="app_icons/Video_Slave_2_32.png" width="40" height="40" /></a>
		            </div>
					<div class="iconurl2">
						<a href="http://www.weiv.co/" title="Weiv"><img src="app_icons/weiv_32.png" width="40" height="40" /></a> 
					</div>

		            <div class="iconurl2">
		            	<a href="http://tobiasebsen.dk/experiments/aesyphon/" title="AESyphon"><img src="app_icons/After_Effects_32.png" width="40" height="40" /></a>
		            </div>
		            <div class="iconurl2">
		            	<a href="https://github.com/rsodre/SyphonC4D" title="SyphonC4D"><img src="app_icons/C4D_32.png" width="40" height="40" /></a>
		            </div>
					<div class="iconurl2">
						<a href="http://syphon-implementations.googlecode.com/files/Syphon%20for%20FreeFrameGL%20Pubdivc%20Beta%202.dmg" title="FreeFrame GL"><img src="app_icons/Generic_plugin_32.png" width="40" height="40" /></a>
					</div>
<!-- 				</p>
				<h3>Development Environments, Patching Environments and Game Engines</h3>
				<p>
 -->				<div class="iconurl2">
						<a href="http://github.com/astellato/Cinder-Syphon" title="Cinder"><img src="app_icons/Cinder_32.png" width="40" height="40" /></a>
					</div>
					<div class="iconurl2">
						<a href="http://github.com/Syphon/Java" title="Java"><img src="app_icons/java_32.png" width="40" height="40" /></a>
					</div>
					<div class="iconurl2">
						<a href="https://github.com/Syphon/Jitter/releases/" title="Max"><img src="app_icons/Max6_32.png" width="40" height="40" /></a>
					</div>
					<div class="iconurl2">
						<a href="http://github.com/astellato/ofxSyphon" title="OpenFrameworks"><img src="app_icons/OF_32.png" width="40" height="40" /></a>
					</div>
					<div class="iconurl2">
						<a href="http://www.plask.org/" title="Plask"><img src="app_icons/plask_32.png" width="40" height="40" /></a>
					</div>
					<div class="iconurl2">
						<a href="https://github.com/Syphon/Processing/releases" title="Processing"><img src="app_icons/Processing_32.png" width="40" height="40" /></a>
					</div>
					<div class="iconurl2">
						<a href="http://github.com/Syphon/PureData/releases/" title="PureData / GEM"><img src="app_icons/Puredata_32.png" width="40" height="40" /></a>
					</div>
					<div class="iconurl2">
						<a href="https://github.com/Syphon/Quartz-Composer/releases/latest" title="Quartz Composer"><img src="app_icons/QC_icon.png" width="40" height="40" /></a>
					</div>

					<div class="iconurl2">
						<a href="https://github.com/Syphon/Unity3D/releases" title="Unity3D"><img src="app_icons/Unity_32.png" width="40" height="40" /></a>
					</div>
					<div class="iconurl2">
						<a href="http://vuo.org" title="Vuo"><img src="app_icons/Vuo_32.png" width="40" height="40" /></a> 
					</div>

						<div class="iconurl2">
						<a href="https://z-vector.com" title="Z-Vector"><img src="app_icons/ZVector_32.png" width="40" height="40" /></a> 
					</div>

<!-- 				</p>

				<h3>Projection Mapping</h3>
				<p>
-->					<div class="iconurl2">
						<a href="http://www.blendydomevj.com" title="Blendy Dome VJ"><img src="app_icons/Blendy_Dome_32.png" width="40" height="40" /></a>
		            </div>

					<div class="iconurl2">
		            	<a href="http://heavym.net/" title="HeavyM"><img src="app_icons/HeavyM_32.png" width="40" height="40" /></a>
		            </div>
<!-- 		            <div class="iconurl2" id="madmapper">
		            	<a href="http://www.madmapper.com/">MadMapper</a>
					</div>
-->					<div class="iconurl2">
		            	<a href="http://www.insidinc.com/" title="MWM"><img src="app_icons/MWM_32.png" width="40" height="40" /></a>
		            </div>
					<div class="iconurl2">
						<a href="http://hcgilje.wordpress.com/vpt/" title="VPT"><img src="app_icons/VPT_32.png" width="40" height="40" /></a> 
					</div>
<!-- 				</p>

				<h3>Workflow</h3>
				<p>
-->					<div class="iconurl2">
						<a href="http://vdmx.vidvox.net/blog/black-syphon" title="BlackSyphon"><img src="app_icons/Black_Syphon_32.png" width="40" height="40" /></a>
		            </div>
					<div class="iconurl2">
						<a href="http://syphon.v002.info/recorder" title="Syphon Recorder"><img src="app_icons/Syphon_Recorder_32.png" width="40" height="40" /></a><br/>
					</div>
					<div class="iconurl2">
						<a href="http://andreacremaschi.github.io/Syphon-virtual-screen/" title="Syphon Virtual Screen"><img src="app_icons/SyphonVirtualScreen_32.png" width="40" height="40" /></a><br/>
					</div>
					<div class="iconurl2">
						<a href="http://www.sigmasix.ch/syphoner/" title="Syphoner"><img src="app_icons/Syphoner_32.png" width="40" height="40" /></a><br/>
					</div>
				</p>

				<h2><a name="developer"></a>Developer SDK</h2>

				<div style="float:left" width="32" height="32">
					<img src="app_icons/Xcode_icon.png" style="padding:5px; margin:5px"/>
				</div>
				<p>Syphon.framework allows 3rd party developers to leverage frame-sharing in their applications or plugins. A simple Objective-C interface allows the publishing and acquisition of frames in very few lines of code. Under the hood, Syphon uses the power of IOSurface plus a selection of Cocoa and Core Foundation technologies to manage the communication between servers and clients. Syphon is 32 / 64 bit clean. (<a href="http://syphon-framework.googlecode.com/files/Syphon%20SDK%20Public%20Beta%202.zip">download</a>, <a href="FrameworkDocumentation/">documentation</a>)
				</p>
				
				<ul>
				<li class="iconurl" id="simple_apps">
					Simple Server/Client<br/>
					A pair of applications to test Syphon functionality (<a href="https://github.com/Syphon/Simple/releases/download/public-beta-2/Syphon.Demo.Apps.Public.Beta.2.dmg">download</a>)
				</li>
				</ul>
				
				<p>If you&rsquo;d like to get involved, join us at the GitHub projects for the <a href="http://github.com/Syphon/syphon-framework">framework</a> and <a href="http://github.com/Syphon">implementations</a>.
				</p>
				
				<h2>Proudly Sponsored By</h2>
				<p>
					Syphon is designed <em>for and by</em> new media technologists, realtime video artists and visualists. It is a labor of love, developed in the spare time of the authors. It is open, free and a gift to the new media community. If Syphon is useful to you or an application you are developing, please consider contributing or sponsoring to help continue development and support the cause.
				</p>

				<div align="center">
					<div class="iconurl2">
						<a href="http://grayarea.org"><img src="sponsors/GrayArea.png"/></a>
					</div>
					<div class="iconurl2">	
						<a href="http://vidvox.net"><img src="sponsors/Vidvox.png"/></a>
					</div>
				</div>
				</p>				
				<div align="center">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input 	type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="C98K2YZNQ8YSW">
						<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>

				<h2>Contact and Support</h2>
				<p>
					Some common questions are answered in our <a href="http://syphon.v002.info/faq.php">FAQ</a>. You can contact us via our <a href="http://v002.info/forums/forum/syphon/">Syphon forum</a>, which has sections for both users and developers.
				</p>				

				<h2>Recent Activity</h2>
				<div align="center">
					<a class="twitter-timeline" href="https://twitter.com/_syphon" data-widget-id="438084642927693824" align="center" data-chrome="noheader nofooter transparent" data-tweet-limit="5">Tweets by @_syphon</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>

				<h2><a name="Authors"></a>Authors</h2>
				<p>Syphon.framework, test suite, and initial implementations are written by <a href="http://kriss.cx/tom">Tom Butterworth</a> and <a href="http://vade.info">Anton Marini</a>.
				</p>

				<h2><a name="license"></a>License</h2>
				<p>Syphon.framework, test suite, and our provided reference implementations are licensed under a <a href="license.php">Simplified BSD software license</a>.
				</p>
			</div>
		</div>
	</div>

	
	<div id="ft">
		<!-- PUT FOOTER CODE HERE -->
	</div>
</div>

<?php include("footer.php"); ?>