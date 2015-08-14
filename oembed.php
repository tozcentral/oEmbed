<?php
/**
 * oEmbed library
 *
 * @package oEmbed
 * @author Chris Fuller <tozcentral@googlemail.com>
 * @copyright Copyright (c) 2014, Chris Fuller
 * @link http://www.oembed.com/ oEmbed documentation
 * @link http://git.tozcentral.net/oembed/ Git repository
 * @link http://git.tozcentral.net/oembed/docs/ Documentation
 */
 
namespace oEmbed;

/**
 * Predefined list of schemes and their endpoints
 */
$schemes = array (
	'http://ifttt.com/recipes/*' => 'http://www.ifttt.com/oembed/',
	'http://*.flickr.com/photos/*' => 'http://www.flickr.com/services/oembed/',
	'http://flic.kr/p/*' => 'http://www.flickr.com/services/oembed/',
	'http://www.viddler.com/v/*' => 'http://www.viddler.com/oembed/',
	'http://*.revision3.com/*' => 'http://revision3.com/api/oembed/',
	'http://www.hulu.com/watch/*' => 'http://www.hulu.com/api/oembed.{format}',
	'http://vimeo.com/*' => 'http://vimeo.com/api/oembed.{format}',
	'http://vimeo.com/groups/*/videos/*' => 'http://vimeo.com/api/oembed.{format}',
	'http://www.collegehumor.com/video/*' => 'http://www.collegehumor.com/oembed.{format}',
	'http://www.jest.com/video/*' => 'http://www.jest.com/oembed.{format}',
	'http://www.jest.com/embed/*' => 'http://www.jest.com/oembed.{format}',
	'http://www.polleverywhere.com/polls/*' => 'http://www.polleverywhere.com/services/oembed/',
	'http://www.polleverywhere.com/multiple_choice_polls/*' => 'http://www.polleverywhere.com/services/oembed/',
	'http://www.polleverywhere.com/free_text_polls/*' => 'http://www.polleverywhere.com/services/oembed/',
	'http://www.ifixit.com/Guide/View/*' => 'http://www.ifixit.com/Embed',
	'http://*.smugmug.com/*' => 'http://api.smugmug.com/services/oembed/',
	'http://*.example.com/*' => 'http://api.smugmug.com/services/oembed/',
	'http://*.deviantart.com/art/*' => 'http://backend.deviantart.com/oembed',
	'http://*.deviantart.com/*#/d*' => 'http://backend.deviantart.com/oembed',
	'http://fav.me/*' => 'http://backend.deviantart.com/oembed',
	'http://sta.sh/*' => 'http://backend.deviantart.com/oembed',
	'http://www.slideshare.net/*/*' => 'http://www.slideshare.net/api/oembed/2',
	'http://chirb.it/*' => 'http://chirb.it/oembed.{format}',
	'http://*.nfb.ca/film/*' => 'http://www.nfb.ca/remote/services/oembed/',
	'http://www.scribd.com/doc/*' => 'http://www.scribd.com/services/oembed/',
	'http://dotsub.com/view/*' => 'http://dotsub.com/services/oembed',
	'http://animoto.com/play/*' => 'http://animoto.com/oembeds/create',
	'http://*.rdio.com/artist/*' => 'http://www.rdio.com/api/oembed/',
	'http://*.rdio.com/people/*' => 'http://www.rdio.com/api/oembed/',
	'http://www.mixcloud.com/*/*/' => 'http://www.mixcloud.com/oembed/',
	'http://clyp.it/*' => 'http://api.clyp.it/oembed/',
	'http://clyp.it/playlist/*' => 'http://api.clyp.it/oembed/',
	'http://www.screenr.com/*/' => 'http://www.screenr.com/api/oembed.{format}',
	'http://www.funnyordie.com/videos/*' => 'http://www.funnyordie.com/oembed.{format}',
	'http://*.polldaddy.com/s/*' => 'http://polldaddy.com/oembed/',
	'http://*.polldaddy.com/poll/*' => 'http://polldaddy.com/oembed/',
	'http://*.polldaddy.com/ratings/*' => 'http://polldaddy.com/oembed/',
	'http://ted.com/talks/*' => 'http://polldaddy.com/oembed/',
	'http://www.videojug.com/film/*' => 'http://www.videojug.com/oembed.{format}',
	'http://www.videojug.com/interview/*' => 'http://www.videojug.com/oembed.{format}',
	'http://videos.sapo.pt/*' => 'http://videos.sapo.pt/oembed',
	'http://official.fm/tracks/*' => 'http://official.fm/services/oembed.{format}',
	'http://official.fm/playlists/*' => 'http://official.fm/services/oembed.{format}',
	'http://huffduffer.com/*/*' => 'http://huffduffer.com/oembed',
	'http://shoudio.com/*' => 'http://shoudio.com/api/oembed',
	'http://shoud.io/*' => 'http://shoudio.com/api/oembed',
	'http://www.mobypicture.com/user/*/view/*' => 'http://api.mobypicture.com/oEmbed',
	'http://moby.to/*' => 'http://api.mobypicture.com/oEmbed',
	'http://www.23hq.com/*/photo/*' => 'http://www.23hq.com/23/oembed',
	'https://cacoo.com/diagrams/*' => 'http://cacoo.com/oembed.{format}',
	'http://www.dipity.com/*/*/' => 'http://www.dipity.com/oembed/timeline/',
	'http://roomshare.jp/post/*' => 'http://roomshare.jp/en/oembed.{format}',
	'http://roomshare.jp/en/post/*' => 'http://roomshare.jp/en/oembed.{format}',
	'http://www.dailymotion.com/video/*' => 'http://www.dailymotion.com/services/oembed',
	'http://crowdranking.com/*/*' => 'http://crowdranking.com/api/oembed.{format}',
	'https://www.circuitlab.com/circuit/*' => 'https://www.circuitlab.com/circuit/oembed/',
	'http://*.geograph.org.uk/*' => 'http://api.geograph.org.uk/api/oembed',
	'http://*.geograph.co.uk/*' => 'http://api.geograph.org.uk/api/oembed',
	'http://*.geograph.ie/*' => 'http://api.geograph.org.uk/api/oembed',
	'http://*.wikimedia.org/*_geograph.org.uk_*' => 'http://api.geograph.org.uk/api/oembed',
	'http://geo-en.hlipp.de/*' => 'http://geo.hlipp.de/restapi.php/api/oembed',
	'http://geo.hlipp.de/*' => 'http://geo.hlipp.de/restapi.php/api/oembed',
	'http://germany.geograph.org/*' => 'http://geo.hlipp.de/restapi.php/api/oembed',
	'http://*.geograph.org.gg/*' => 'http://www.geograph.org.gg/api/oembed',
	'http://*.geograph.org.je/*' => 'http://www.geograph.org.gg/api/oembed',
	'http://channel-islands.geograph.org/*' => 'http://www.geograph.org.gg/api/oembed',
	'http://channel-islands.geographs.org/*' => 'http://www.geograph.org.gg/api/oembed',
	'http://*.channel.geographs.org/*' => 'http://www.geograph.org.gg/api/oembed',
	'http://www.quiz.biz/quizz-*.html' => 'http://www.quiz.biz/api/oembed',
	'http://www.quizz.biz/quizz-*.html' => 'http://www.quizz.biz/api/oembed',
	'http://coub.com/view/*' => 'http://coub.com/api/oembed.{format}',
	'http://coub.com/embed/*' => 'http://coub.com/api/oembed.{format}',
	'http://speakerdeck.com/*/*' => array (
		'endpoint' => 'https://speakerdeck.com/oembed.json',
		'supports' => array('json')
	),
	'https://speakerdeck.com/*/*' => array (
		'endpoint' => 'https://speakerdeck.com/oembed.json',
		'supports' => array('json')
	),
	'https://alpha.app.net/*/post/*' => array (
		'endpoint' => 'https://alpha-api.app.net/oembed',
		'supports' => array('json')
	),
	'https://photos.app.net/*/*' => array (
		'endpoint' => 'https://alpha-api.app.net/oembed',
		'supports' => array('json')
	),
	'http://*.blip.tv/*/*' => array (
		'endpoint' => 'http://blip.tv/oembed/',
		'supports' => array('json')
	),
	'http://*.yfrog.com/*' => array (
		'endpoint' => 'http://www.yfrog.com/api/oembed',
		'supports' => array('json')
	),
	'http://yfrog.us/*' => array (
		'endpoint' => 'http://www.yfrog.com/api/oembed',
		'supports' => array('json')
	),
	'http://instagram.com/p/*' => array (
		'endpoint' => 'http://api.instagram.com/oembed',
		'supports' => array('json')
	),
	'http://instagr.am/p/*' => array (
		'endpoint' => 'http://api.instagram.com/oembed',
		'supports' => array('json')
	),
	'http://soundcloud.com/*' => 'https://soundcloud.com/oembed',
	'http://on.aol.com/video/*' => 'http://on.aol.com/api',
	'http://www.kickstarter.com/projects/*' => 'http://www.kickstarter.com/services/oembed',
	'http://*.ustream.tv/*' => array (
		'endpoint' => 'http://www.ustream.tv/oembed',
		'supports' => array('json')
	),
	'http://*.ustream.com/*' => array (
		'endpoint' => 'http://www.ustream.tv/oembed',
		'supports' => array('json')
	),
	'https://gmep.org/media/*' => 'https://gmep.org/oembed.{format}',
	'http://www.dailymile.com/people/*/entries/*' => array (
		'endpoint' => 'http://api.dailymile.com/oembed',
		'supports' => array('json')
	),
	'http://sketchfab.com/models/*' => array (
		'endpoint' => 'http://sketchfab.com/oembed',
		'supports' => array('json')
	),
	'https://sketchfab.com/models/*' => array (
		'endpoint' => 'http://sketchfab.com/oembed',
		'supports' => array('json')
	),
	'http://meetup.com/*' => array (
		'endpoint' => 'https://api.meetup.com/oembed',
		'supports' => array('json')
	),
	'http://meetu.ps/*' => array (
		'endpoint' => 'https://api.meetup.com/oembed',
		'supports' => array('json')
	),
	'http://videofork.com/oembed/([0-9]+)' => array (
		'endpoint' => 'http://videofork.com/oembed',
		'supports' => array('json')
	),
	'http://audiosnaps.com/k/*' => 'http://audiosnaps.com/service/oembed',
	'http://edocr.com/docs/*' => 'http://edocr.com/api/oembed',
	'https://rapidengage.com/s/*' => 'https://rapidengage.com/api/oembed',
	'http://gty.im/*' => array (
		'endpoint' => 'http://embed.gettyimages.com/oembed',
		'supports' => array('json')
	),
	'http://live.amcharts.com/*' => 'http://live.amcharts.com/oembed',
	'http://www.isnare.com/*' => 'http://www.isnare.com/oembed/',
);

/**
 * Basic class for describing an embeddable item
 *
 * @var string $type The type of embeddable item, for example, video, photo, rich, etc.
 * @var string $version The oEmbed version used, generally 1.0
 * @var string|null $title Title of the item
 * @var object|null $author Author of the item, contains name and/or url
 * @var object|null $provider Provider of the item, contains name and/or url
 * @var int|null $cache_age How long the item should be cached for before downloading again
 * @var object|null $thumbnail Information about the thumbnail for the item, contains a url, width and height
 */
class oEmbedObject
{
	public $type;
	public $version;
	
	public $title;
	
	public $author;
	
	public $provider;
	
	public $cache_age;
	
	public $thumbnail;
};

/**
 * Class for describing an embeddable photo
 *
 * @var string $url The URL for the photo
 * @var int $width The width of the photo
 * @var int $height The Height for the photo
 */
class oEmbedPhoto extends oEmbedObject
{
	public $url;
	
	public $width;
	public $height;
	
	/**
	 * Embed code for the object, same as $html
	 *
	 * @return string The html
	 */
	public function embedCode ( )
	{
		return "<img src=\"{$this->url}\" width=\"{$this->width}\" height=\"{$this->height}\"/>";
	}
	
	/**
	 * Embed code for the object that works with responsive design sites
	 *
	 * @return string|null The html, or null if responsive design code couldn't be generated
	 */
	public function embedResponsive ( )
	{
		if ( !preg_match ( '#src="(.*[^\\])*"#i', $this->html, $match ) )
			return null;
			
		$bottom_padding = $this->height / $this->width * 100;
		
		return "<div style=\"position:relative;padding-bottom:$bottom_padding;\"><img src=\"{$match[1]}\" style=\"position:absolute;left:0;top:0;width:100%;height:100%;\"/></div>";
	}
};

/**
 * Class for describing an embeddable video
 *
 * @var string $url The URL for the photo
 * @var int $width The width of the photo
 * @var int $height The Height for the photo
 */
class oEmbedVideo extends oEmbedObject
{
	public $html;
	
	public $width;
	public $height;
	
	/**
	 * Embed code for the object, same as $html
	 *
	 * @return string The html
	 */
	public function embedCode ( )
	{
		return $this->html;
	}
	
	/**
	 * Embed url
	 *
	 * @return string The html
	 */
	public function embedUrl ( )
	{
		if ( !preg_match ( '#src=("|\')([^"\']*)\\1#ism', $this->html, $match ) )
			return null;
		
		return $match[2];
	}
	
	/**
	 * Embed code for the object that works with responsive design sites
	 *
	 * @return string|null The html, or null if responsive design code couldn't be generated
	 */
	public function embedResponsive ( )
	{
		if ( !preg_match ( '#src=("|\')([^"\']*)\\1#ism', $this->html, $match ) )
			return null;
			
		$bottom_padding = $this->height / $this->width * 100;
		
		return "<div style=\"position:relative;padding-bottom:{$bottom_padding}%;\"><iframe src=\"{$match[2]}\" style=\"position:absolute;left:0;top:0;width:100%;height:100%;\" frameborder=\"0\" allowfullscreen></iframe></div>";
	}
};

/**
 * Class for describing an embeddable rich content
 *
 * @var string $html The embed code for the content
 * @var int $width The width of the rich content
 * @var int $height The Height for the rich content
 */
class oEmbedRich extends oEmbedObject
{
	public $html;
	
	public $width;
	public $height;
	
	/**
	 * Embed code for the object, same as $html
	 *
	 * @return string The html
	 */
	public function embedCode ( )
	{
		return $this->html;
	}
}

/**
 * Class for describing an embeddable link
 */
class oEmbedLink extends oEmbedObject
{
}
 
/**
 * Get the "alternate" links for a web page
 *
 * @param string $url The URL of the page
 * @return array Associated array of type => href for all the rel="alternate" links on the page
 */
function getAlternates ( $url )
{
	$contents = file_get_contents ( $url );
	
	$doc = new \DOMDocument();
	@$doc->loadHTML ( $contents );

	$links = $doc->getElementsByTagName ( 'link' );
	$results = array ( );
	
	foreach ( $links as $link )
	{
		if ( $link->attributes->getNamedItem ( 'rel' ) && $link->attributes->getNamedItem ( 'rel' )->value == 'alternate' )
		{
			if ( $link->attributes->getNamedItem ( 'type' ) )
			{	
				$type = $link->attributes->getNamedItem ( 'type' )->value;
				$href = $link->attributes->getNamedItem ( 'href' )->value;
				
				$results[$type] = $href;
			}
		}
	}
	
	return $results;
}

/**
 * Adds parameters array onto the end of the url as a query string
 *
 * @param string $url The URL to add the query to the end of
 * @param array $parameters Associated array of query parameters
 * @return string The new URL
 */
function addToQuery ( $url, $parameters )
{
	$query = http_build_query ( $parameters );
	if ( $query !== '' )
	{
		if ( strpos ( $url, '?' ) === false )
			$url .= '?' . $query;
		else
			$url .= '&' . $query;
	}
		
	return $url;
}

/**
 * Generates an endpoint url for an embeddable url by using the rel="alternate" links in the page
 *
 * @param string $url embeddable url
 * @param array $options Associated array of options for the embed, for example: maxwidth or maxheight
 * @param string $format The format of the response, either json or xml
 * @return string|null A url of an oembed endpoint
 */
function discoverEndpointURL ( $url, $options = array ( ), $format = 'json' )
{
	$alternates = getAlternates ( $url );

	if ( is_string ( $options ) )
	{
		$temp = is_array ( $format ) ? $format : array ( );
		$format = $options;
		$options = $temp;
	}
	
	if ( $format == 'json' && isset ( $alternates['application/json+oembed'] ) )
		$endpoint = $alternates['application/json+oembed'];
		
	else if ( $format == 'xml' && isset ( $alternates['text/xml+oembed'] ) )
		$endpoint = $alternates['text/xml+oembed'];
		
	else if ( $format == 'xml' && isset ( $alternates['application/xml+oembed'] ) )
		$endpoint = $alternates['application/xml+oembed'];
		
	else
		return null;
	
	return addToQuery ( $endpoint, $options );
}

/**
 * Get embed object for an embeddable url by using the rel="alternate" links in the page
 *
 * @param string $url The url of the embeddable item, for example, https://www.youtube.com/watch?v=dQw4w9WgXcQ
 * @param array $options Associated array of options for the embed, for example: maxwidth or maxheight
 * @param string $format The format of the response, either json or xml
 * @return oEmbedObject|null The object containing information about embedding the item at $url
 */
function discover ( $url, $options = array ( ), $format = 'json' )
{
	return getOEmbed ( discoverEndpointURL ( $url, $options, $format ) );
}

/**
 * Check the predefined schemes list for a match to the $url
 *
 * @global array $schemes Predefined list of schemes and their endpoints
 * @param string $url The URL to check for
 * @return array|string|null The endpoint, null if none was found
 */
function schemeEndpointForURL ( $url )
{
global $schemes;
	foreach ( $schemes as $scheme => $endpoint )
	{
		if ( fnmatch ( $scheme, $url ) )
			return $endpoint;
	}
	
	return null;
}

/**
 * Generates an endpoint url for an embeddable url by using the predefined schemes list
 *
 * @param string $url embeddable url
 * @param array $options Associated array of options for the embed, for example: maxwidth or maxheight
 * @param string $format The format of the response, either json or xml
 * @return string|null A url of an oembed endpoint
 */
function schemeEndpointURL ( $url, $options = array ( ), $format = 'json' )
{
	$endpoint = schemeEndpointForURL ( $url );
	
	if ( !$endpoint )
		return null;
		
	if ( is_string ( $options ) )
	{
		$temp = is_array ( $format ) ? $format : array ( );
		$format = $options;
		$options = $temp;
	}
		
	if ( is_array ( $endpoint ) )
	{
		if ( !is_array ( $format, $endpoint['supports'] ) )
			$format = $endpoint['supports'][0];
			
		$endpoint = $endpoint['endpoint'];
	}
		
	$count = 0;
	$endpoint = str_replace ( '{format}', $format, $endpoint, $count );
	
	if ( !$count )
		$options['format'] = $format;
		
	$options['url'] = $url;
		
	return addToQuery ( $endpoint, $options );
}


/**
 * Get embed object for the requested url using predefined schemes list
 *
 * @param string $url The url of the embeddable item, for example, https://www.youtube.com/watch?v=dQw4w9WgXcQ
 * @param array $options Associated array of options for the embed, for example: maxwidth or maxheight
 * @param string $format The format of the response, either json or xml
 * @return oEmbedObject|null The object containing information about embedding the item at $url
 */
function scheme ( $url, $options = array ( ), $format = 'json' )
{
	return getOEmbed ( schemeEndpointURL ( $url, $options, $format ) );
}


/**
 * Get embed object for the requested url
 *
 * @param string $url The url of the embeddable item, for example, https://www.youtube.com/watch?v=dQw4w9WgXcQ
 * @param array $options Associated array of options for the embed, for example: maxwidth or maxheight
 * @param string $format The format of the response, either json or xml
 * @return oEmbedObject|null The object containing information about embedding the item at $url
 */
function get ( $url, $options = array ( ), $format = 'json' )
{
	$endpoint = schemeEndpointURL ( $url, $options, $format );
	
	if ( !$endpoint )
		$endpoint = discoverEndpointURL ( $url, $options, $format );
		
	return getOEmbed ( $endpoint );
}

/**
 * Get embed object for the endpoint url
 *
 * @param string $url The url of the item, for example, http://www.youtube.com/oembed?format=json&url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DdQw4w9WgXcQ
 * @return oEmbedObject|null The object containing information about embedding the item at $url
 */
function getOEmbed ( $url )
{
	$context = stream_context_create ( array (
		'http' => array (
			'method' => 'GET',
			'ignore_errors' => true
		)
	) );
	
	$stream = fopen ( $url, 'r', false, $context );

	$contents = stream_get_contents ( $stream );
	$info = stream_get_meta_data ( $stream );
	
	fclose ( $stream );
	
	$status = array_shift ( $info['wrapper_data'] );

	foreach ( $info['wrapper_data'] as $header )
	{
		list($name, $value) = explode ( ': ', $header, 2 );
		
		if ( strtolower($name) == 'content-type' )
		{
			$value = explode ( ';', trim ( $value ) );
			
			if ( $value[0] == 'application/json' || $value[0] == 'application/json+oembed' )
				return getOEmbedFromJson ( $contents, $info );
			
			if ( $value[0] == 'application/xml' || $value[0] == 'application/xml+oembed' )
				return getOEmbedFromXml ( $contents, $info );
			
			if ( $value[0] == 'text/xml' || $value[0] == 'text/xml+oembed' )
				return getOEmbedFromXml ( $contents, $info );
		}
	}
}

/**
 * Create the correct object based on type
 *
 * @param string $type The type of embeddable item
 * @return oEmbedObject The object
 */
function createOEmbed ( $type )
{
	switch ( $type )
	{
		case 'photo':
			return new oEmbedPhoto ( );
		break;
		case 'video':
			return new oEmbedVideo ( );
		break;
		case 'link':
			return new oEmbedLink ( );
		break;
		case 'rich':
			return new oEmbedRich ( );
		break;
		default:
			return new oEmbedObject ( );
	}
}

/**
 * Get embed object for JSON encoded data
 *
 * @param string $contents JSON encoded string containing info about an embeddable item
 * @param array $info Information about the request to get $contents (not actually used)
 * @return oEmbedObject|null The object containing information about embedding the item described in $contents
 */
function getOEmbedFromJson ( $contents, $info )
{
	return getOEmbedFromObject ( json_decode ( $contents ) );
}

/**
 * Get embed object for XML encoded data
 *
 * @param string $contents XML encoded string containing info about an embeddable item
 * @param array $info Information about the request to get $contents (not actually used)
 * @return oEmbedObject|null The object containing information about embedding the item described in $contents
 */
function getOEmbedFromXml ( $contents, $info )
{
	return getOEmbedFromObject ( json_decode ( json_encode ( simplexml_load_string ( $contents ) ) ) );
}

/**
 * Get embed object from an object created by getOEmbedFromJson or getOEmbedFromXml
 *
 * @param string $array The object containing data
 * @return oEmbedObject|null The object containing information about embedding the item described in $contents
 */
function getOEmbedFromObject ( $array )
{
	$object = createOEmbed ( $array->type );
	
	$object->type = $array->type;
	$object->version = $array->version;
	
	if ( isset ( $array->title ) )
		$object->title = $array->title;
		
	if ( isset ( $array->author_name ) || isset ( $array->author_url ) )
	{
		$author = array ( );
		
		if ( isset ( $array->author_name ) )
			$author['name'] = $array->author_name;
			
		if ( isset ( $array->author_url ) )
			$author['url'] = $array->author_url;
			
		$object->author = (object)$author;
	}
		
	if ( isset ( $array->provider_name ) || isset ( $array->provider_url ) )
	{
		$provider = array ( );
		
		if ( isset ( $array->provider_name ) )
			$provider['name'] = $array->provider_name;
			
		if ( isset ( $array->provider_url ) )
			$provider['url'] = $array->provider_url;
			
		$object->provider = (object)$provider;
	}
	
	if ( isset ( $array->cache_age ) )
		$object->cache_age = intval ( $array->cache_age );
		
	if ( isset ( $array->thumbnail_url ) )
	{
		$object->thumbnail = (object)array (
			'url' => $array->thumbnail_url,
			'width' => intval ( $array->thumbnail_width ),
			'height' => intval ( $array->thumbnail_height ),
		);
	}
	
	switch ( $array->type )
	{
		case 'photo':
			$object->url = $array->url;
			$object->width = intval ( $array->width );
			$object->height = intval ( $array->height );
		break;
		case 'video':
		case 'rich':
			$object->html = $array->html;
			$object->width = intval ( $array->width );
			$object->height = intval ( $array->height );
		break;
	}
	
	return $object;
}