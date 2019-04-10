						<footer>
							<div class="footer-top">
								<div class="container">
									<div class="row">
										
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="footer-static-title">
												<h4>Thời gian làm việc & bảo hành</h4>
											</div>
											<div class="footer-static-content">
												<p>
• Thứ 2 - Thứ 7: 08:00 - 19:30</br>
• Chủ Nhật: 09:00 - 12:00 & 13:30 - 16:00</br>
<b>Bảo Hành: Thứ 2 - Thứ 7</b></br>
• Sáng: 08:30 - 12:00</br>
• Chiều: 13:30 - 18:00<br></p>					
											</div>
										</div>
										
										
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="footer-static-title">
												<h4>Thông tin</h4>
											</div>
											<div class="footer-static-content">
												<div class="contact-add">
													
													<p><i class="fa fa-map-marker"></i><span>{{$set->address}}</span></p>
																			
													<p><i class="fa fa-envelope-o"></i><span>{{$set->email}} (CSKH) - {{$set->email}} (Kinh Doanh) - {{$set->email}} (Liên hệ) </span></p>
													
												</div>
											</div>
										</div>

										<div class="col-md-4 col-sm-4 col-sms-12">
											<div class="footer-static-title">
												<h4>Fanpage chúng tôi</h4>
											</div>
											<div class="footer-static-content">
												<!-- Facebook widget -->

												<div class="footer-static-content"> 
												<div class="fb-page" data-href="{{$set->fanpage}}"  data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">	</div>
												</div>
												<div style="clear:both;" >
													
												</div>
	
											</div>
										</div>
										
									</div>
								</div>

							</div>
							<div class="footer-bottom">
								<div class="container copyright">						
									<p>{!!$set->copyright!!}</p> 
									{{$set->address}}</p>

								</div>
							</div>
						</footer>