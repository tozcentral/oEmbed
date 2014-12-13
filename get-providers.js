	(function(document){
	var iframe = document.createElement ( 'iframe' );
	iframe.style.width = '100%';
	iframe.style.height = '100px;';
	iframe.onload = function ( )
	{
		var text = ['<pre>array (\n']
		
		var start = document.getElementById('section7.1').nextSibling

		while ( start && start.nodeName != 'A' )
		{
			if ( start.nodeName == 'UL' )
			{
				var codes = start.getElementsByTagName ( 'code' )
				
				var urls = [];
				var endpoint;
				var supports = [];
				
				for ( var i = 0, c = codes.length; i < c; i++ )
				{
					var content = codes[i].previousSibling.textContent.trim().toLowerCase()
					
					if ( content == 'url scheme:' || content == 'url scheme (videos):' || content == 'url scheme (video):' || content == 'url scheme (group video):' )
						urls.push ( codes[i].innerHTML )
					else if ( content == 'api endpoint:' || content == 'endpoint:' )
						endpoint = codes[i].innerHTML
				}
				
				if ( endpoint.endsWith ( '(only supports json)' ) )
				{
					endpoint = endpoint.replace('(only supports json)', '')
					supports.push ( 'json' )
				}
				else if ( endpoint.endsWith ( '(only supports xml)' ) )
				{
					endpoint = endpoint.replace('(only supports xml)', '')
					supports.push ( 'xml' )
				}
				
				endpoint = endpoint.trim()
				
				if ( endpoint == 'http://chirb.it/oembed.json or http://chirb.it/oembed.xml' )
					endpoint = 'http://chirb.it/oembed.{format}'
				
				var link = document.createElement ( 'a' )
				link.href = endpoint
				console.log ( link.pathname, link.search );
				link.search = ''
				endpoint = decodeURI ( link.href )
				
				if ( urls.length && endpoint )
				{
					for ( var i = 0, c = urls.length; i < c; i++ )
					{
						var url = urls[i];
						
						text.push ( '\t\'' )
						text.push ( url )
						text.push ( '\' => ' )
						if ( supports.length == 0 )
						{
							text.push ( '\'' )
							text.push ( endpoint )
							text.push ( '\'' )
						}
						else
						{
							text.push ( 'array (\n' )
							text.push ( '\t\t\'endpoint\' => \'' )
							text.push ( endpoint )
							text.push ( '\',\n' )
							text.push ( '\t\t\'supports\' => array(\'' )
							text.push ( supports.join('\', \'') )
							text.push ( '\')\n' )
							text.push ( '\t)' )
						}
						text.push ( ',\n' )
					}
				}
				else
					console.log ( start.previousElementSibling.innerHTML, start )
			}
			
			start = start.nextSibling
		}
		
		text.push ( ');</pre>' )
		
		iframe.contentDocument.body.innerHTML = text.join ( '' )
	}
	iframe.src = 'about:blank'
	document.body.appendChild ( iframe );
	})(document)