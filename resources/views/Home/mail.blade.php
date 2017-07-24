@extends('Layout.home')

@section('title','发送邮件')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>邮箱</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
      

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>写信 <small>请仔细填写邮件内容
                    
                    </small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="inner-block">
    <div class="inbox">
    	  
    	 <div class="col-md-4 compose">   	 	
    	 	<div class="mail-profile">
    	 		<div class="mail-pic">
    	 			<a href="#"><img src="images/b3.png" alt=""></a>
    	 		</div>
    	 		<div class="mailer-name"> 			
    	 				<h5><a href="#">Malorum</a></h5>  	 				
    	 			     <h6><a href="mailto:info@example.com">malorum@gmail.com</a></h6>   
    	 		</div>
    	 	    <div class="clearfix"> </div>
    	 	</div>
    	 	<div class="compose-bottom">
    	 		<ul>
    	 			<li><a class="hilate" href="#"><i class="fa fa-inbox"> </i>Inbox</a></li>
    	 			<li><a href="#"><i class="fa fa-envelope-o"> </i>Sent Mail</a></li>
    	 			<li><a href="#"><i class="fa fa-star-o"> </i>Important</a></li>
    	 			<li><a href="#"><i class="fa fa-pencil-square-o"> </i>Drafts</a></li>
    	 			<li><a href="#"><i class="fa fa-trash-o"> </i>Trash</a></li>
    	 		</ul>
    	 	</div>
    	 </div>   	 
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
									<input style="width:100%;" type="text"  value="Subject :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
								</div>
                                <div class="form-group">
								<textarea style="width:100%;" rows="6"  value="Message :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message 
                                </textarea>
                                </div>
								<div class="form-group">
									<div class="btn btn-default btn-file" >
										<i class="fa fa-paperclip"> </i> 附件
										<input  type="file" name="attachment">
									</div>
								</div>
								<button type="submit" class="btn btn-info">发送</button>
							</form>
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>

@endsection