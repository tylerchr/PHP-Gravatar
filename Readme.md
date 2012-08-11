# README #

	Name:			Class Gravatar
	Version:		1.1
	Description:	A PHP class to make using Gravatar easier

## Author ##

We owe this class to **Lucas Araújo** (araujo.lucas@gmail.com), the author of the original class on phpclasses.org. His original implementation can still be found at [http://www.phpclasses.org/browse/package/4227.html](http://www.phpclasses.org/browse/package/4227.html).
	
The GitHub fork was created and is maintained by **Tyler Christensen** (tyler9xp@gmail.com).

## Readme ##

From the [Gravatar Help](http://site.gravatar.com/site/implement):

> “A gravatar is a dynamic image resource that is requested from our server. The
> request URL is presented here, broken into its segments."

Using this class, one can check whether an Gravatar image exists for a given email address and retrieve its URL. The following additional parameters may be specified:

	- default (the URL of an image to be returned should no Gravatar exist)
	- rating (a measure of appropriateness to filter out explicit Gravatars)
	- size (an integer to define what the width of the [square] Gravatar should be)

If Gravatar implements additional options, they can also be specified by setting the value of `extras` to an array of the additional options.
	
## Usage ##

The following code will check to see if a Gravatar exists, and if so, show
it with no parameters.

	$email = "youremail@yourhost.com";
	$gravatar = new Gravatar($email);	// create new Gravatar with email
	$gravatar->size = 128;
	$gravatar->rating = "G";
	
	if ($gravatar->gravatarExists()) {
		echo '<img src="' . $gravatar . '" alt="" />';	
	} else {
		echo 'No Gravatar exists for this email address';
	}

A sample PHP program is included that shows a similar demonstration and can
be run on your own server without modification.

## Other Functions ##

	$Grav = new Gravatar( [$email, [$default]] );	// make a Gravatar object
	bool $Grav->setEmail($email);
	bool $Grav->setDefault($default);

	bool $Grav->setRating($rating);					// maximum rating (G,PG,R,X)
	bool $Grav->setSize($size);						// size to get URL of
	bool $Grav->setExtra($extra);					// parameters to add to img tag

	bool $Grav->gravatarExists();					// check if Gravatar exists
	string $Grav->imageTag()						// get a complete <img> tag
	string $Grav->gravatarLink()					// get the Gravatar.com URL

	echo $Grav										// same as $Grav->gravatarLink()

## Version History ##

### 1.2: August 11, 2012 ###

Updated class to work with Gravatar’s API, which changed since the last release. E-mail validity is now checked with PHP’s built-in validation functions, not the deprecated `eregi`.

### 1.1: January 7, 2010 ###

Added the ability to check whether a Gravatar exists, and copied the project to GitHub.

### 1.0: November 15, 2007 ###

Lucas Araújo’s original release on phpclasses.org.