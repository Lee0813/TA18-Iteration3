<div class="image_switcher_wrap">
	<h1>Create Your Short Code</h1>
	<hr>
	<br>
<div class="row">
	<div class="col-6">

		<form id="shortcoder_form">
			<table>
				<tr>
					
					<td><strong>Add Main Image : </strong></td>
					<td colspan="2">
					<div class="form-group switcher_img switch_anchors">
						<input type="text" id="url" readonly="">
						<button type="button" class="switcher_img_btn_">Add Image</button>
					</div>
					</td>
					
					
				</tr>
				<tr>
					<td><strong>Add Alt Image : </strong></td>
					<td colspan="2">
					<div class="form-group switcher_img switch_anchors">
						<input type="text" id="alt_url" readonly="">
						<button type="button" class="switcher_img_btn_">Add Image</button>
					</div>
					</td>
				</tr>

				<tr>
					<td><strong>Link : </strong></td>
					<td colspan="2"><input type="url" id="link" onkeyup="preview()" onchange="preview()" placeholder="http://"></td>

				</tr>

				<tr>
					<td><strong>Advance : </strong></td>
					<td colspan="2">
					<label class="switcher_switch">
					  <input type="checkbox" value="1">
					  <span class="switcher_switch_slider round"></span>
					</label>
					</td>
				</tr>

				<tr class="switch_adv">
					<td><strong>Heading : </strong></td>
					<td colspan="2"><input type="text" id="heading" placeholder="Write a heading"></td>
				</tr>

				<tr class="switch_adv">
					<td><strong>Alt Heading : </strong></td>
					<td colspan="2"><input type="text" id="alt_heading" placeholder="Write a heading"></td>
				</tr>
				<tr class="switch_adv">
					<td><strong>Text : </strong></td>
					<td colspan="2"><input type="text" id="text" placeholder="Write some text"></td>
				</tr>
				<tr class="switch_adv">
					<td><strong>Alt Text : </strong></td>
					<td colspan="2"><input type="text" id="alt_text" placeholder="Write some text"></td>
				</tr>
				<tr class="switch_adv">
					<td><strong>Heading Font Size : </strong></td>
					<td colspan="2"><input type="text" id="heading_size" placeholder="18px"></td>
				</tr>

				<tr class="switch_adv">
					<td><strong>Text Font Size : </strong></td>
					<td colspan="2"><input type="text" id="text_size" placeholder="15px"></td>
				</tr>

				<tr class="switch_adv">
					<td><strong>Heading Font Color : </strong></td>
					<td colspan="2"><input class="clr" id="heading_color" data-default-color="rgba(0,0,0,1)" type="text" ></td>
				</tr>

				<tr class="switch_adv">
					<td><strong>Text Font Color : </strong></td>
					<td colspan="2"><input class="clr" id="text_color" data-default-color="rgba(0,0,0,1)" type="text" ></td>
				</tr>

				<tr class="switch_adv">
					<td><strong>Box Background : </strong></td>
					<td colspan="2"><input class="clr" id="background" data-alpha="true" data-default-color="rgba(0,0,0,0.85)" type="text" ></td>
				</tr>
				<tr class="switch_adv">
				<td><strong>Forced Height : </strong></td>
					<td colspan="2"><input type="text" id="force_height" placeholder="250px"></td>
				</tr>

				<tr class="switch_adv">
				<td class="switch_adv"><strong>Position : </strong></td>
					<td colspan="2">
					<select name="" id="position">
						<option value="">Please Select</option>
						<option value="Bottom">Bottom</option>
						<option value="Top">Top</option>
						<option value="Left">Left</option>
						<option value="Right">Right</option>
					</select>
				</td>
				</tr>

			

			</table>
			</form>
		</div>

<div class="col-6">
	<div style="display: block;overflow: hidden">
	<input type="text" id="shortcodes_switcher_field" readonly="">
	<br>
	<button class="switch_code">Copy ShortCode</button>
</div>
<div class="img_switch_prev " style="display: block;overflow: hidden">
	<h2>Preview</h2>
	<div style="" class="img_switch_wrap">

		<a href="" onclick="sk()">
		<img class="img_switch_image" src="" alt="" style="height:;">
		<div class="img_switch_contents" style="position: absolute;">
		<h2 style="">
		</h2>
		<p style=" ">
		
		</p>
		</div>

		</a>

	</div>

</div>

</div>




</div>

</div>


<script>


	
</script>

<style>

	.switch_code{
		float: right;
		background: #ff6550;
		color: white;
		font-size: 12px;
		border: 0;
		padding: 10px 30px;
		font-weight: 500;
		cursor: pointer;
		border-radius: 4px;
	}

.switch_adv{
	display: none;
}

.switcher_img input{width: 58% !important;}
.switcher_img button{
	width: 39% !important;
font-size: 15px !important;
border-radius: 9px;
}

.row{
	overflow: auto;
}


.col-4{width: 33.33%;}
.col-6{width: 50%;padding: 0 25px;box-sizing: border-box;}
.col-2{width: 13%;}
.col-6,.col-2,.col-4{

	float: left;
}


.img_switch_prev{}


.switch_anchors a{
display: none;
}

.image_switcher_wrap .fixed{
	position: fixed;
	right:0;
}

.image_switcher_wrap .col-6{
	width: 49%;
	float: left;
}

.form-control{
	padding: 10px;

}

.image_switcher_wrap input,.image_switcher_wrap select{
	border:2px solid gray;
	border-radius:4px;
	padding: 10px;
	width: 100%;
	height: inherit;
}


 /* The switch - the box around the slider */
.switcher_switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switcher_switch input {display:none;}

/* The slider */
.switcher_switch_slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.switcher_switch_slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .switcher_switch_slider {
  background-color: #2196F3;
}

input:focus + .switcher_switch_slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .switcher_switch_slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.switcher_switch_slider.round {
  border-radius: 34px;
}

.switcher_switch_slider.round:before {
  border-radius: 50%;
} 





/* preview */

.img_switch_wrap img{
	width: 100%;
}



.img_switch_wrap{

	width: 100%;
	position: relative;
	cursor: pointer;
}


.img_switch_wrap img{
	width: 100%;
}


.img_switch_contents{
position: absolute;
padding: 20px;
left: 0;
right: 0;
line-height: 0px;

}

.img_switch_prev{

	position: fixed;
}


@media only screen and (max-width: 769px){
	.img_switch_prev{

	position: static;
}

.image_switcher_wrap .col-6{
	float: none;
	width: 100%;
	padding: 0 0px;
}

.switcher_img button{

font-size: 10px !important;

}

}

</style>