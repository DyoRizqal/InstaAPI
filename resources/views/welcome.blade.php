<!DOCTYPE html>
<html>
<head>
	<title>Instagram API</title>
  <link type="text/css" rel="stylesheet" href="{{ url('css/materialize.css')}}"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="{{ url('css/materialize.min.css') }}"  media="screen,projection"/>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body style="background:#F5F8FA">
<div class="row">
<div class="container">
<div class="col s12">
<!-- <nav>
    <div class="nav-wrapper">
      <form method="GET" role="form">
        <div class="input-field">
          <input type="text" id="username" name="username" class="form-control" placeholder="Enter Instagram Username" value="{{ old('username') }}">
          <label for="username"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav> -->
  <nav>
    <div class="nav-wrapper" style="background: #009688">
      <form method="GET" role="form">
        <div class="input-field">
          <input id="username" type="search" name="username" value="{{old('username')}}" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
  </div>
  </div>
  </div>
<div class="col-md-6 hide">
	<div class="form-group">
		<button class="btn btn-success">Search</button>
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="col s12">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s12" style="margin-left: 0px;">
            <div class="lightbox-gallery">
            @if(!empty($items))
				 @foreach($items as $key => $item)
             <div><img src="{{ $item['images']['standard_resolution']['url'] }}" style="max-width: 200px;cursor: pointer"></div>
          	@endforeach
          	@else
				   <tr>
				    <td colspan="4">There are no data.</td>
				   </tr>
              @endif    
            </div>
          </div>
        </div>
        
      </div>
	</form>
	</div>
	</div>
</div>
	<style type="text/css">

.text-center {
  text-align: center;
  margin-bottom: 1em;
}

.lightbox-gallery {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
}

.lightbox-gallery div > img {
  max-width: 100%;
  display: block;
}

.lightbox-gallery div {
  margin: 10px;
  flex-basis: 180px;
}

@media only screen and (max-width: 480px) {
  .lightbox-gallery {
    flex-direction: column;
    align-items: center;
  }
  .lightbox > div {
    margin-bottom: 10px;
  }
}


/*Lighbox CSS*/

.lightbox {
  display: none;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .7);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 20;
  padding-top: 30px;
  box-sizing: border-box;
}

.lightbox img {
  display: block;
  max-width: 300px;
  margin: auto;
}

.lightbox .caption {
  margin: 15px auto;
  width: 50%;
  text-align: center;
  font-size: 1em;
  line-height: 1.5;
  font-weight: 700;
  color: #eee;
}
	</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{url('js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/materialize.js')}}"></script>
<script type="text/javascript">
	// Create a lightbox
(function() {
  var $lightbox = $("<div class='lightbox'></div>");
  var $img = $("<img>");
  var $caption = $("<p class='caption'></p>");

  // Add image and caption to lightbox

  $lightbox
    .append($img)
    .append($caption);

  // Add lighbox to document

  $('body').append($lightbox);

  $('.lightbox-gallery img').click(function(e) {
    e.preventDefault();

    // Get image link and description
    var src = $(this).attr("src");
    var cap = $(this).attr("alt");

    // Add data to lighbox

    $img.attr('src', src);
    $caption.text(cap);

    // Show lightbox

    $lightbox.fadeIn('fast');

    $lightbox.click(function() {
      $lightbox.fadeOut('fast');
    });
  });

}());
</script>
</body>
</html>
