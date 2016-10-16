
<?php require_once('magpierss/rss_fetch.inc'); ?>
<?php include("header.php"); ?>

<div id="doc3" class="yui-t7">
	<div id="hd">
	</div>
	<div id="bd">
			<div id="content">
			<h1>Syphon FAQ</h1>
			
			<h3>Do I need to install anything to use Syphon?</h3>
			<p>
				Some applications have Syphon support built-in (such as VDMX, Modul8, MadMapper and Syphon Recorder). Nothing needs to be installed to use these applications. Other applications and environments need a plugin or extension to use Syphon with them. We provide some and link to others in our <a href="http://syphon.v002.info/#downloads">implementations list</a>.
			</p>
			<h3>What do you mean by Syphon "server"?</h3>
			<p>
				A server is a source of video or images. A Syphon "server" makes video or images visible and available to be used by other applications.
			</p>
			<h3>What do you mean by Syphon "client"?</h3>
			<p>
				A Syphon "client" simply allows one to access video or images made available by a Syphon server.
			</p>

			<h3>Does Syphon work over a network or between computers?</h3>
			<p>
				No. Syphon works on your computer's graphics card to share video and images between applications on the same computer.
			</p>
			<p>
				Other solutions already exist for sharing video between computers. You can use capture devices like Black Magic Intensity, Matrox MXO or Aja Kona cards to digitize uncompressed video from one computer to feed into another. Alternatively, MaxMSP/Jitter has jit.net.send and jit.net.recieve objects.
			</p>
			<p>
				There are no current plans to provide such features in the framework itself. 
			</p>
	
			<h3>Does Syphon work on Windows or Linux?</h3>
			<p>
				Currently Syphon only supports MacOS. 
			</p>
			
			<h3>The application I am using does not appear to work with Syphon. Is there any way to make it work?</h3>
			<p>
				There are two possibilities. First, your application may be able to leverage the Syphon plugins for Quartz Composer or FreeFrame GL. If the application you want to use can load Quartz Composer compositions, the chances are good it will work with our Quartz Composer plugin. If your application supports FreeFrame 1.5 (FreeFrame GL), use our Syphon FFGL plugin. Feel free to report success or failure in our forums.
			</p>

			<p>
				Second, if the application you want to use has no plugin environment, you can use the Syphon Screen Capture application to capture the screen interactively. The capture is made available to all Syphon Clients. There are some limitations to screen capture, but it can be a viable alternative if native or plugin support is out of the question. Syphon Screen Capture is still under development, but if you are a developer you can build it from our <a href="http://code.google.com/p/syphon-implementations/">Syphon Implementations SVN</a>.
			</p>

			<p>
				Lastly, please petition the software's authors and make them aware of Syphon. We would love to increase mindshare, and native support.
			<p>
			<h3>I'm a developer. Can I add Syphon support to my application or environment?</h3>
			<p>
				Yes. <a href="http://syphon.v002.info/#developer">Integrating Syphon.framework</a> into your own application is super-simple.
			</p>
			<h3>Why isn't it working?</h3>
			<p>
				Syphon is designed to be simple to use and most of the time it should "just work". If it isn't working for you, try the following:
			</p>
			<ol>
				<li>Read the Read Me (if it's a plugin) or check the Help menu or manual (if it's an application). There may be specific installation or usage instructions.</li>
				<li>Contact the authors of third party software for support with their products (they know much more about their products than we do).</li>
				<li>Search the <a href="http://forums.v002.info/">v002 forum</a>. Someone may have run into the same problem and had their question answered.</li>
				<li>Ask on the <a href="http://forums.v002.info/">v002 forum</a>.</li>
			</ol>
		</div>
		<div class="yui-b">
			<!-- PUT SECONDARY COLUMN CODE HERE -->
			<div id="content">				
				<p>Syphon.framework and implementations are written by <a href="http://kriss.cx/tom">Tom Butterworth</a> and <a href="http://vade.info">Anton Marini</a> and are licensed under a <a href="license.php">Simplified BSD software license</a>.</p>
			</div>
		</div>
	</div>
	<div id="ft">
		<!-- PUT FOOTER CODE HERE -->
	</div>
</div>


<?php include("footer.php"); ?>