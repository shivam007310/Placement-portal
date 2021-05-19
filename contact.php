<?php
	include "header.php";
?>
	<div class="main-container">
	<div class="container">
		<div class="text">Contact Us</div>
		<form method="post">
			<div class="form-row">
				<div class="input-data">
					<input type="text" required>
					<div class="underline"></div>
					<label>Name</label>
				</div>
				<div class="input-data">
					<input type="email" required>
					<div class="underline"></div>
					<label>Email Address</label>
				</div>
			</div>
			<div class="form-row">
				<div class="input-data">
					<input type="text" required>
					<div class="underline"></div>
					<label>Mobile Number</label>
				</div>
				<div class="input-data">
				<select id="select">
					<option value="" selected disabled hidden>Select Company</option>
  					<option value="volvo">Volvo</option>
  					<option value="saab">Saab</option>
  					<option value="mercedes">Mercedes</option>
  					<option value="audi">Audi</option>
				</select>
					<div class="underline"></div>
					<!-- <label>Select Company</label> -->
				</div>
			</div>
			<div class="form-row ">
				<div class="input-data textarea">
					<textarea cols="30" rows="10" required></textarea>
					<div class="underline"></div>
					<label>Write your query</label>
				</div>
			</div>
			<div class="form-row submit-btn">
				<div class="input-data">
					<div class="inner"></div>
					<input type="submit" value="Submit">
				</div>
			</div>
		</form>
	</div>
	</div>
</body>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
	.main-container{
		display: flex;
		align-items: center;
		justify-content: center;
		min-height: 100vh;
		padding: 40px;
		font-family: "Montserrat", sans-serif;
		/* background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%); */
	}
	.container{
		background: #fff;
		width: 800px;
		max-width: 800px;
		padding: 25px 40px 10px 40px;
		box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
	}
	.container .text{
		font-size: 35px;
		font-weight: 600;
		text-align: center;
		/* background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea); */
		background: black;
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	.container form{
		padding: 30px 0 0 0 0;
	}
	.container form .form-row{
		display: flex;
		margin: 32px 0;
	}
	form .form-row .input-data{
		width: 100%;
		height: 40px;
		margin: 0 20px;
		position: relative;
	}
	form .form-row .textarea{
		height: 70px;
	}
	.input-data input,
	.textarea textarea{
		display: block;
		height: 100%;
		width: 100%;
		border: none;
		font-size: 17px;
		border-bottom: 2px solid rgba(0,0,0,0.12);
		outline: none;
	}
	#select{
		display: block;
		height: 100%;
		width: 100%;
		border: none;
		font-size: 17px;
		border-bottom: 2px solid rgba(0,0,0,0.12);
		outline: none;
	}
	.textarea textarea{
		resize: none;
		padding-top: 10px;
	}
	.input-data input:focus ~ label,
	.textarea textarea:focus ~ label,
	.input-data input:valid ~ label,
	.textarea textarea:valid ~ label{
		transform: translateY(-20px);
		color: #3498db;
		font-size: 14px;
	}
	#select:focus ~ label{
		transform: translateY(-20px);
		color: #3498db;
		font-size: 14px;
	}
	.input-data label{
		position: absolute;
		bottom: 10px;
		font-size: 16px;
		pointer-events: none;
		transition: all 0.3s ease;
	}
	.textarea label{
		width: 100%;
		bottom: 40px;
		background: #fff;
	}
	.input-data .underline{
		position: absolute;
		bottom: 0;
		height: 2px;
		width: 100%;
	}
	.input-data .underline:before,
	.input-data .underline:after{
		position: absolute;
		content: "";
		height: 100%;
		width: 100%;
		background: #3498db;
		transform: scaleX(0);
		transform-origin: center;
		transition: transform 0.3s ease;
	}
	.input-data input:focus ~ .underline:before, .underline:after,
	.textarea textarea:focus ~ .underline:before, .underline:after,
	.input-data input:valid ~ .underline:before, .underline:after,
	.textarea textarea:valid ~ .underline:before, .underline:after{
		transform: scaleX(1);
	}
	.submit-btn .input-data{
		height: 45px!important;
		width: 25%!important;
		overflow: hidden;
	}
	.submit-btn .input-data .inner{
		height: 100%;
		width: 300%;
		position: absolute;
		left: -100%;
		background: #3498db;
	}
	.submit-btn .input-data input{
		position: relative;
		z-index: 2;
		background: none;
		border: none;
		color: #fff;
		font-size: 17px;
		font-weight: 500;
		text-transform: uppercase;
		letter-spacing: 1px;
		cursor: pointer;
	}
</style>
</html>