---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: home
---


# Introducting Syphon

Syphon is an [open source](http://github.com/syphon) Mac OS X technology that allows applications to share frames - full frame rate video or stills - with one another in realtime. Now you can leverage the expressive power of a plethora of tools to mix, mash, edit, sample, texture-map, synthesize, and present your imagery using the best tool for each part of the job. Syphon gives you flexibility to break out of single-app solutions and mix creative applications to suit your needs.


# Features

Syphon provides an ecosystem for sharing imagery between applications and new media development environments. Syphon is designed to be efficient and will not duplicate resources unnecessarily, keeping your frame rate and best interests in mind.

* Hardware acceleration on the GPU - Servers and Clients share video on the graphics card - where it belongs, allowing for HD or larger video at 60 FPS
* Alpha-channels - share rendered 3D content and video with masks and keys, allowing compositing to happen easily and naturally.
* A simple SDK so developers can add Syphon to just about any application
* Compatible with MacOS X 10.6 (Snow Leopard) or later.

# Applications

The list of Syphon enabled applications keeps growing. Here are is a sample of interoperable applications, inlcuding live performance, content creation, show control, visualizers, development, creative coding, live coding, patching environments, game engines, projection mapping, and capture tools.

You can mix these tools and more to find unique solutions to your creative problems.


<div align="center" style="margin-bottom:20px">
{% for app in site.hero_apps %}

<a href="{{ app.url }}"><img src="app_icons/{{app.icon}}" style="padding:5px"></a>

{% endfor %}

</div>


<div align="justify" style="margin-bottom:20px">

{% for app in site.apps %}

<a href="{{ app.url }}" title="{{app.title}}"><img src="app_icons/{{app.icon}}" width="40px" height="40px" style="padding:10px"></a>

{% endfor %}

</div>

# Developer SDK


* Syphon.framework allows 3rd party developers to leverage frame-sharing in their applications or plugins. A simple Objective-C interface allows the publishing and acquisition of frames in very few lines of code. Under the hood, Syphon uses the power of IOSurface plus a selection of Cocoa and Core Foundation technologies to manage the communication between servers and clients. (download, documentation)

* Simple Server/Client A pair of applications to test Syphon functionality (download)


If you’d like to get involved, join us at the GitHub projects for the framework and implementations.


# Contact and Support

Some common questions are answered in our FAQ. If you have questions about a product which integrates Syphon, please contact the developer of that produce for support. Developers can report issues or request features for the Syphon framework on GitHub.


# Authors

Syphon.framework, test suite, and initial implementations are written by Tom Butterworth and Anton Marini.

# License

Syphon.framework, test suite, and our provided reference implementations are licensed under a Simplified BSD software license.