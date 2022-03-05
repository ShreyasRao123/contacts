				        <div class="accordion col-md-12" id="group1">
				        <div class="row justify-content-around">

				        	<div id ="newContact" class="col-md-9 m-1 collapse" data-parent='#group1'>
				        		<div class="row box justify-content-around">
					        		<div class="col-2">
					        			<div class="input-group m-1">
					        				<label for="name">Name:</label>
					        			</div>
					        		</div>
					        		<div class="col-9">
					        			<div class="input-group m-1">
					        				<input type="text" class="form-control" v-model='neoCard.name' id ="name" name="name" placeholder="enter name here">
					        			</div>
					        		</div>
					        		<div class="col-2">
					        			<div class="input-group m-1">
					        				<label for="phNo">Ph No.:</label>
					        			</div>
					        		</div>
					        		<div class="col-9">
					        			<div class="input-group m-1">
					        				<input type="text" class="form-control" v-model='neoCard.phNo' id ="phNo" name="phNo" placeholder="enter phone no. here">
					        			</div>
					        		</div>
					        		<div class="col-2">
					        			<div class="input-group m-1">
					        				<label for="email">email:</label>
					        			</div>
					        		</div>
					        		<div class="col-9">
					        			<div class="input-group m-1">
					        				<input type="text" class="form-control" v-model='neoCard.email' id ="email" name="email" placeholder="enter email ID here">
					        			</div>
					        		</div>
					        		<div class="col-2">
					        			<div class="input-group m-1">
					        				<label for="add">Add:</label>
					        			</div>
					        		</div>
					        		<div class="col-9">
					        			<div class="input-group m-1">
					        				<textarea class="form-control" v-model='neoCard.add' id ="add" name="add" placeholder="enter complete address here"></textarea>
					        			</div>
					        		</div>
					        		<div class="col-11 text-center">
					        			<button class="btn btn-block m-1 b" @click='posNeoDb()' type="submit" id="submit">Submit</button>
					        		</div>
					        		
					        	</div>
					        </div>

				        	<div id ="search" class="col-md-7 m-1 collapse" data-parent='#group1'>
				        		<div class="row box justify-content-around text-center">
					        		<div class="col-lg-9">
					        			<div class="input-group m-1">
						        			<input class="form-control" v-model='searchTxt' @input='searchCards()' type="text" name="search" placeholder="Type name to search">
							        	</div>
						        	</div>
						        	<div class="col-lg-2">
						        			<button class="btn btn-outline m-1 b" @click='()=>{searchTxt=""; getCards();}' type="button" title="Clear">&times;</button>
							        </div>
					        	</div>
					        </div>
				        </div>
				        </div>