<div v-for = '(card,index) in cards' :id='"c"+index' class="col-md box m-1 overflow-auto c">
						        
						        	<div class="row ">
						        		<div class="col-3 h-bg r1">
						        			Name:
						        		</div>
						        		<div class="col-9">
						        			{{card.name}}
						         		</div>
						        	</div>
						        	<div class="row">
						        		<div class="col-3 h-bg">
						        			Ph. No.:
						        		</div>
						        		<div class="col-9">
						        			{{card.phNo}}
						        		</div>
						        	</div>
						        	<div class="row">
						        		<div class="col-3 h-bg">
						        			email Id:
						        		</div>
						        		<div class="col-9 ">
						        			{{card.email}}
						        		</div>
						        	</div>
						        	<div class="row">
						        		<div class="col-3 h-bg">
						        			Add.:
						        		</div>
						        		<div class="col-9">
						        			{{card.address}}
						        		</div>
						        	</div>

				        			<div class = 'btn-group btn-group-sm' role='group'>
						        		<button @click='modInvk(index)' class="btn e" ><svg width="24" height="24" version="1.1" viewBox="0 0 8.4667 8.4667" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" class="d-block"><title>Edit</title> <g transform="matrix(.96518 -.19572 -.1887 .88824 54.691 -253.96)" stroke="#00ee83" stroke-width=".58423"><path d="m3.8092 293.99c1.6508-1.3262 3.3017-2.6525 4.9525-3.9787m-7.0169 4.8817 1.9753-0.79725m0.63832 0.6717c-0.62654-0.77988-1.2531-1.5598-1.8796-2.3396m-0.76225 2.5847c0.24463-0.88287 0.48925-1.7658 0.73388-2.6486 1.6614-1.3348 3.3229-2.6695 4.9843-4.0043m-5.797 6.5548c0.91485-0.0486 1.8297-0.0972 2.7445-0.14586 1.6614-1.3348 3.3229-2.6695 4.9843-4.0043" fill="none" stroke="#00ee83" stroke-width=".58423"/></g></svg></button>
						        		<button @click='alertMethod("Delete Warning","Are you sure you want to delete card of "+card.name+" ?",0,true,()=>del(card.id))' class="btn e" ><svg width="24" height="24" version="1.1" viewBox="0 0 8.4667 8.4667" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" class="d-block"><title>Delete</title><g transform="translate(0 -288.53)"><path d="m5.5551 291.6v3.6609m-1.2428-3.6427v3.6609m-1.3275-3.6518v3.6609m-0.94766-4.4096h4.4656v5.3039h-4.4656zm1.1591-1.5508 2.0626-0.0273m-3.6016 0.71807h5.1688" fill="none" stroke="#ff2e00" stroke-width=".8"/></g></svg></button>
						        	</div>
					        </div>