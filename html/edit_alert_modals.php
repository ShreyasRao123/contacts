				        <div class="modal fade" id="cardUpd" tabindex="-1" role="dialog">
				    		<div class="modal-dialog" role="document">
				    			<div class="modal-content box">
				    				<div class="modal-header">
				    					<h5 class="modal-title" id="cardUpdLbl">Card Update</h5>
				    					<button type="button" class="close" data-dismiss="modal">
				    						<span>&otimes;</span>
				    					</button>
				    				</div>
				    				
				    				<div class="modal-body">
						    			<div class="row justify-content-around">
							        		<div class="col-2">
							        			<div class="input-group m-1">
							        				<label for="name-u">Name:</label>
							        			</div>
							        		</div>
							        		<div class="col-9">
							        			<div class="input-group m-1">
							        				<input type="text" class="form-control" v-model = 'updCard.name' id ="name-u" name="name-u" placeholder="enter name here">
							        			</div>
							        		</div>
							        		<div class="col-2">
							        			<div class="input-group m-1">
							        				<label for="phNo-u">Ph No.:</label>
							        			</div>
							        		</div>
							        		<div class="col-9">
							        			<div class="input-group m-1">
							        				<input type="text" class="form-control" v-model='updCard.phNo' id ="phNo-u" name="phNo-u" placeholder="enter phone no. here">
							        			</div>
							        		</div>
							        		<div class="col-2">
							        			<div class="input-group m-1">
							        				<label for="email-u">email:</label>
							        			</div>
							        		</div>
							        		<div class="col-9">
							        			<div class="input-group m-1">
							        				<input type="text" class="form-control" v-model='updCard.email' id ="email-u" name="email-u" placeholder="enter email ID here">
							        			</div>
							        		</div>
							        		<div class="col-2">
							        			<div class="input-group m-1">
							        				<label for="add-u">Add:</label>
							        			</div>
							        		</div>
							        		<div class="col-9">
							        			<div class="input-group m-1">
							        				<textarea class="form-control" v-model='updCard.address' id ="add-u" name="add-u" placeholder="enter complete address here"></textarea>
							        			</div>
							        		</div>
							        	</div>
				    				</div>

				    				<div class="modal-footer">
				    					<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
				    					<button type="button" @click='posUptDb()' class="btn btn-primary" >Update Card</button>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
<!-- ALERT MODAL -->
				    	<div class='modal fade' id="alertModal" tabindex="-1" role='dialog'>
				    		<div class="modal-dialog modal-sm" role='document'>
				    			<div class="modal-content box">
				    				<div class="modal-header">
				    					<h5 class="modal-title h4">{{alert.title}}</h5>
				    					<button class="close" type='button' data-dismiss='modal' ><span>&otimes;</span></button>
				    				</div>
				    				<div class="modal-body">
				    					{{alert.message}}
				    				</div>
				    				<div class="modal-footer" v-show='alert.footShow'>
				    					<button class="btn btn-primary" @click="alert.func()" type="button">Ok</button>
				    					<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
				    				</div>
				    			</div>
				    		</div>
				    	</div>