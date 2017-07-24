@extends('Layout.home')

@section('title','发送短信')

@section('hidden')
@endsection

@section('content')
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>短信</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
      

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>写信 <small>请仔细填写短信内容
                    
                    </small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="inner-block">
    <div class="inbox">
    	  
    	    	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details to send a new message
							</div>
							<form  class="com-mail">
                                <div class="form-group">
									<input style="width:100%;"  type="text"   value="To :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'To';}">
                                </div>
                                
                                <div class="form-group">
								<textarea style="width:100%;" rows="6"  value="Message :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message 
                                </textarea>
                                </div>
								
								<button type="submit" class="btn btn-info">发送</button>
							</form>
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>

@endsection