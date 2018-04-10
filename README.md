# Unyson extension sliders

An extension shortcode for Unyson Framework.

## Getting Started

Please follow the instruction to install this extension.

### A user can :

1. Select the type of sliders

```
Image Banner, Slider Banner or Video Banner
```

2. if image banner,
	* able to add small title
	* content hover text boxes
	* slider image size (Large, Extra large)
	* choose the behaviour of the slider (Paralax/ fixed or scroll)
	* choose the transition for the slideshow (slide sidewards, slide up/down, fade)

3. Slider with only images
	* upload one or more images (if one image is added, it will be static)
	* add and edit the title
	* add and edit the description
	* highlight some words of the title / description by changing the font colour or style (B / i / U )
	* choose which words should be changed along with the image (link the highlighted words with the images)
	* select whether the slideshow should rotate by default
		* if auto rotate is active set how far apart the images should change
		* if auto rotate is inactive select how the controls should be displayed (arrows, dots, both)

4. Video + Image
	* select at which point the images should start sliding
		* at the end of the video
		* in the middle of the video (video should stop and image slider should start)
	* Select whether the video should be lopped (start the video again and avoid sliding the images)

5. Can configure the slider options.
	* @param : auto-slide; (boolean)
    * @param : interval; (number in millisecond)
    * @params : controller [options for slick](http://kenwheeler.github.io/slick/)
        * @param : autoplay; (boolean)
        * @param : autoplaySpeed; (int(ms))
        * @param : arrows; (boolean)
        * @param : dots; (boolean)
        * @param : fade; (boolean)
        * @param : infinite; (boolean)
        * @param : speed; (int(ms))
        * @param : pauseOnHover; (boolean)
        * @param : touchMove; (boolean)
        * @param : vertical; (boolean)


