<!DOCTYPE html>
<html lang="en">
<head>
    @include('materials.header')

	@yield('outerInclude')
	
	<style>
		#ContentOfBody{
        	min-height: 100vh;
		  }
		  
		#ContentOfooter{
			bottom: 0;
			left: 0;
			position: relative;
			right: 0;
			top: 5em;  
		}
	</style>
    
</head>


<body>
    @include('materials.navigation')
	
    <div id="ContentOfBody" class="container-fluid">
		@yield('ContentOfBody')
	</div>

	<div id="ContentOfooter">
		@include('materials.footer')
	</div>
</body>
</html>