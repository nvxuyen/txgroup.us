<!-- Support-->
<div class="sidebar-support list-group">
	<span href="#" class="list-group-item active">
		
		<img src="{{asset('public/assets/images/avatar-answ.png?v=772')}}" class="img-responsive" />
		
	</span>
	<h3> Hỗ trợ trực tuyến</h3>
	<div class="support">
		<div class="text-center">
			<p>
				<span class="supp-name">Kinh Doanh:</span>
				<br>
				<span class="phone">{{$set->gmail}}</span>
			</p>
			
			<a href="skype:{{$set->skype}}?chat" class="skype">
				<img src="{{asset('public')}}/assets/images/skype-icon.png" class="img-responsive"/>
			</a>
			
			
		</div>
		<div class="text-center">
			
			<span class="supp-name" >Số hotline	</span>
			
			
			<br>
			<p>
				<b>• Tổng Đài:</b> {{$set->hotline1}}</br> <b>• Kinh Doanh:</b> {{$set->hotline2}} </br><b>• Kỹ Thuật:</b> {{$set->hotline3}}</br><b>• Bảo Hành:</b> {{$set->hotline4}} </br>
			</p>
			
		</div>
		<div class="text-center">
			
			<span class="supp-name" >Thời gian làm việc	</span>
			
			<p>
				Thứ 2 - Thứ 7</br> 
• Sáng: 08:00 - 12:00</br>
• Chiều: 13:30 - 18:00</br>

<b>Bảo Hành:</b> Thứ 2 - Thứ 7</br>
• Sáng: 08:30 - 12:00</br>
• Chiều: 13:30 - 18:00<br>
			</p>
		</div>
	</div>
</div>
<!-- Support-->