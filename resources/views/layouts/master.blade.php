@include('layouts.header')

         @section('accessdenied')
            @show
    

        <div class="wrapper wrapper-content">
       	 	<div class="row">
        			   @section('body')
                       @show
        	</div>
        </div>
        <div class="row">
        <div class="footer">
        
            <div>
                <strong>Copyright</strong> QQ Affiliate &copy; 2017
            </div>
        </div>

        </div>
    </div>

    @include('layouts.function')
   
</body>
</html>
