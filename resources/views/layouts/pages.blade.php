@include('layouts.header')

        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>  @section('header-title')
                                    @show </h2>
                    <ol class="breadcrumb">
                        @section('breadcrumb')
                            @show
                       
                    </ol>
                </div>
        </div>

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
