<?php
	session_start();

	include '../includes/pdo_db_conn.php';
	if (isset($_POST['userName']) && isset($_POST['password'])) 
	{
		if($_POST['userName']!=''&&$_POST['password']!=''){
	    	$sql = 'SELECT password FROM test.cred WHERE user = "'.$_POST["userName"].'"';
	    	$qu = $pdo->query($sql);
	    	$arr = $qu->fetchAll(PDO::FETCH_ASSOC);

 			if(md5($_POST['password']) == $arr[0]['password']){
 				$_SESSION['usr_in_ssn']=$_POST['userName'];
 			}else{
 				$msg = 'Either username or password is not matching';
 			}
 		}else{
 			$msg = 'Please fill both of above to login successfully!';
 		}
 	}

 	if($_POST['logOut']){
 		unset($_SESSION['usr_in_ssn']);
 		session_destroy();
 	}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
    
        <title> </title>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit-no">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <link rel="stylesheet" href="include_templ/bootstrap.min.css">

       <style>
			body{
        		background-color: rgb(30,20,10);
        	}

			html {
			     scroll-behavior: smooth;
			}

        	.box {
        		background-color: rgb(255,150,50);
        		border-radius: 1em;
        		//text-align: center;
        	}

        	.h-bg{
        		background-color: rgb(200,100,50)
        	}

        	.r1{ border-radius: 1em 0 0 0 }

/*Classes for Button colors*/

        	.b{
        		background-color: rgb(50,10,0);
        		color:white;
        	}

        	.b:hover {
        		background-color: rgb(80,20,0);	
        		color:white;
        	}

        	.e{
        		background-color: rgba(30,20,10,0.6);
        	}

			.e:hover{
        		background-color: rgba(30,20,10,1);
        	}

        	@media (min-device-width:768px)	{
	        	.c .btn{
	        		opacity: 0%;
	        		transition:opacity 0.5s
	        	}

	        	.c:hover .btn{
	        		opacity: 100%;
	        		transition:opacity 0.5s
	        	}

        	}

        	.c{/*for contact cards*/
        		min-width: 250px;
        		max-width: 720px
        	}

        	.box .btn-group-sm {
        		position:absolute;
        		right: 5px;
        		bottom: 5px;
        	}

        	.bg-grey {
        		background-color: rgba(100,100,100,0.3);
        	}

        	input, textarea{
        		opacity: 80%
        	}

        </style>
    
    </head>
    
    <body>
<!-- NAVIGATION BAR -->
       <nav class="navbar navbar-expand-lg navbar-light bg-grey">
            <a class="navbar-brand text-light mr-auto" href="#">
            	<svg width="64" height="64" version="1.1" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><g transform="translate(0 -280.07)" stroke="#ff2e00"><path d="m88 404.07h-44l-38.327-76 58.327-44 59.498 44z" stroke-width="7.5591"/><path d="m101.84 329.62c-10.351-10.775-25.236-17.047-40.177-16.932-3.777 0.0292-7.5705 0.45205-11.187 1.5416-3.6165 1.0895-7.0575 2.8628-9.8567 5.3988s-4.9337 5.8572-5.8042 9.5326c-0.87051 3.6754-0.42087 7.6976 1.4826 10.96 1.7893 3.0667 4.7552 5.332 8.0116 6.7469s6.8044 2.0357 10.34 2.3584c7.0716 0.64542 14.442 0.18766 20.996 2.9197 4.1572 1.7328 7.7961 4.7448 10.143 8.5891 2.3467 3.8442 3.3635 8.5123 2.6749 12.963-0.85633 5.5351-4.3435 10.533-9.0577 13.558-4.7142 3.0243-10.558 4.1186-16.108 3.3719-4.5481-0.61176-8.9288-2.4274-12.576-5.2123-3.6474-2.785-6.5529-6.5326-8.3412-10.759" fill="none" stroke-opacity=".98039" stroke-width="13.677"/></g></svg>
            	Contacts Management
            </a>
            <?php if(isset($_SESSION['usr_in_ssn'])){ ?>
            <div class="dropdown  ml-auto">
            	<button class="btn btn-transparent text-light" type="button" data-toggle="dropdown"><?php echo 'Welcome '.$_SESSION['usr_in_ssn'];?> <img src="images/ac_pic.svg"></button>
		            <div class="dropdown-menu dropdown-menu-right bg-transparent"><form class='dropdown-item' action="#" method="POST">
		            	<input type="hidden" name="logOut" id="logOut" value="1" >
		            	<button class='btn btn-secondary' type="submit">Log Out</button>            	
		            </form></div>
	          </div>
            <button class="navbar-toggler bg-secondary" type="button" data-toggle="collapse" data-target='#collapsedItems'>
                <span class="navbar-toggler-icon"></span>
            </button><?php } ?>
        </nav>
        <div class="container-fluid">
	        <div class="row flex-xl-nowrap justify-content-between">

<!-- SIDEBAR -->
	        	
	        		<?php 

	        		if(isset($_SESSION['usr_in_ssn'])){include 'sidebar.php';}
	        		?>


	        	<div class="col-md-9 col-xl-10 m-auto">
	        		<?php
	        		if(!isset($_SESSION['usr_in_ssn'])) {?>
	        		<div class="card w-50 m-auto text-light" style="background-color: rgba(255,255,255,0.1); border:1rem solid rgb(50,10,0); border-radius: 1rem; min-width: 250px;">
	        			<h5 class="card-header" style="background-color: rgb(50,10,0)" >Login</h5>
	        			<div class="card-body">
	        				<form action="#" method="post">
	        					<div class="form-group">
	        						<label for="userName">User Name</label>
	        						<input type="text" class="form-control"  name="userName" id="userName">
	        					</div>
	        					<div class="form-group">
	        						<label for="password">Password</label>
	        						<input type="password" class="form-control" name="password" id="password">
	        					</div>
	        					<small id='logMsg' class="text-warning form-text mb-2"><?php /*echo $arr[0]['password'].'</br>'.md5($_POST['password']) ;*/?></small>
	        					<button type="submit" class="btn b">Login</button>
	        				</form>
	        			</div>
	        		</div><?php }?>
<!-- VUE APP STARTS FROM HERE -->

					<div id='app' class="row justify-content-between">

<!--MODALS EDIT & ALERT--> 
						<?php if(isset($_SESSION['usr_in_ssn'])){include 'edit_alert_modals.php';}?>

<!-- NEW CONTACT FORM / SEARCH BOX-->
						<?php if(isset($_SESSION['usr_in_ssn'])){include 'nwct_form_srchbx.php';}?>

<!-- CONTACT CARDS DISPLAY -->
			        	<?php if(isset($_SESSION['usr_in_ssn'])){include 'cards_disp.php';}?>
				    </div>
					
				</div>
	        </div>
	     </div>

        <script src="include_templ/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="include_templ/vue_v2.6.14.js"></script>
		<script type="text/javascript" src="include_templ/popper.min.js"></script>
		<script src="include_templ/bootstrap.min.js"></script>

		<script>
			$('#logMsg').text('<?php echo $msg;?>');

			var app = new Vue ({
				el: '#app',
				data:{
					cards:'',
					updCard:{},
					neoCard:{
						mode:'insert',
						name:'',
						phNo:'',
						email:'',
						add:''
					},
					alert:{
						title:'',
						message:'',
						footShow:'',
						func:''
					},
					searchTxt:''
				},
				
				methods:{
					getCards: function(){
						$.post('ajax.php',
									{mode:'get'},
									function(response){
										app.cards=response; /*here this.cards doesnt work so a more direct reference given. 
															'app' is the Vue instance tag name*/
										},
									'json'
						);
					},

					modInvk: function(index){
						// this.updCard = this.cards[index]; /*This also worked but caused unusuall reactivity where changes in the modal inputs triggered immediate changes in 'cards' data object along with usuall changes in 'updCard' data. Also using 'for' loops to set  data directly in this.updCard removed reactivity from it completely. So creating a seperate object 'a' with 'for' loop (removes reactive getters and setters to 'cards'). then setting 'updCard' data directly to object a (sets reactive getters and setters only to 'updCard' obj)*/
						var a = {};
						for(prop in this.cards[index]){  
							a[prop] = this.cards[index][prop];
						}
						this.updCard=a;
						$('#cardUpd').modal('show');
					},

					posUptDb: function(){
						var posD = {
							mode:'update',
							id:this.updCard.id,
							name: this.updCard.name,
							phNo: this.updCard.phNo,
							email: this.updCard.email,
							add: this.updCard.address
						};
						$.post(	'ajax.php',
								posD,
								function(data){
									console.log(data);
									app.updCard={};
									if(data>0){
										app.getCards();
										app.alertMethod('Success!','Card Changes successfully saved!',2500,false,'');
									}else{
										app.alertMethod('Attention!','No changes to save!',2500,false,'');
									}
									$('#cardUpd').modal('hide');
								}
						);
					},

					posNeoDb: function(){
						if(this.neoCard.name!=""){
							$.post('ajax.php',
									this.neoCard,
									function(){
										app.getCards();
										app.alertMethod('Success','New Contact successfully saved!',2500,false,'')
										app.neoCard.name=app.neoCard.phNo=app.neoCard.email=app.neoCard.add='';
										app.scrolldwn();
									})
						}else{
							this.alertMethod('Error Alert','Name Cannot be empty',2500,false,'');
						}
					},


					del: function(i){
						$.post('ajax.php',
								{mode:'delete',
								id:i},
								function(){
									app.getCards();
									$('#alertModal').modal('hide');
								}
						);
					},

					searchCards: function(){
						$.post('ajax.php',
									{mode:'search',
									searchTxt:this.searchTxt},
									function(response){
										app.cards=response; 
										},
									'json'
						);						
					},

					alertMethod: function(title,message,time,footShow,func){ 
						/*Explanation: 
						title- mention the title of the alert-modal
						message- mention the message to be shown in alert-modal
						time- in case you want the modal to auto-disappear, mention time-delay 
							in ms, if you don't want it to disappear, mention it as - 0
						footShow- boolean argument, mention true if footer with ok / cancel 
							buttons are required, else mention false if to used only as autodisappearing alert.
						func- a function that is to be performed on pressing ok, should be in form of a
							closure (func returning a func) eg. function(){return f();} OR ()=>f()*/
						this.alert.title=title;
						this.alert.message=message;
						this.alert.footShow=footShow;
						this.alert.func=func;
						$('#alertModal').modal('show');
						if(time>0){
							setTimeout(function(){
								$('#alertModal').modal('hide');
							},time);
						}
					},

					scrolldwn: function(){
						var cardInd = 'c'+(this.cards.length-1);
						setTimeout(()=>{document.getElementById(cardInd).scrollIntoView();}, 2000);
					}
				},

				mounted(){
					this.getCards();
				},


			})

		</script>
    </body>

</html>
