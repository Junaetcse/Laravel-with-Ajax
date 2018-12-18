<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable({
    	stop:function(){
    		$.map($(this).find('li'), function(el){
    			var itemID = el.id;
    			var itemIndex = $(el).index();
    			console.log(itemID);
    			console.log(itemIndex);
    		});
    	}
    });
    $( "#sortable" ).disableSelection();
  } );
  </script>

</head>
<body>
	<h1>List of content</h1>
 
<ul id="sortable">
	@foreach($menu_list as $menu)
  <li id="{{$menu->slug}}" class="ui-state-default"></span>{{$menu->name}}</li>
 @endforeach
 </ul>
 
 
</body>
</html>