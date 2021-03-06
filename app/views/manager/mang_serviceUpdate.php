<?php require APPROOT . "/views/inc/header.php" ?>

<body class="layout-template-2">
	<!-- New service container -->
	<header class="full-header">
		<div class="header-center verticalCenter">
			<h1 class="header-topic">Update Service</h1>
		</div>
		<div class="header-right verticalCenter">
			<span class="top-right-closeBtnSpecial">
				<i class=" fal fa-times fa-2x "></i>
			</span>
		</div>
	</header>

	<div class=" content contentNewRes">
		<form class="form" action="<?php echo URLROOT; ?>/Services/updateService/<?php echo $data['serviceDetails']->serviceID; ?>" method="post">
			<div class="newService-main newservice" id="newServiceMain">

				<!-- <form class="form" action=""> -->

				<!-- Basic information -->
				<div class="newService-sub-head">
					<h3>Basic Info</h3>
				</div>

				<div class="newService-sub">
					<!-- <form class="form" action=""> -->

					<!-- service name -->
					<div class="row">
						<div class="column">
							<div class="text-group">
								<label class="labels" for="serviceName"> Service Name</label><br>
								<input type="text" name="sName" value="<?php echo $data['name']; ?>" id="sName">
							</div>
							<span class="error"><?php echo $data['sName_error']; ?></span>
						</div>
						<div class="column">
							<div class="text-group">
								<label class="labels" for="serviceCusCategory">Customer Category</label>
								<select class="dropdownSelectBox" name="serviceCusCategory">
									<option class="unbold" value="val1" option selected="true" disabled="disabled">Select One</option>
									<option value=1 value="Gent" <?php if ($data['customerCategory'] == 1) echo 'selected'; ?>>Male</option>
									<option value=2 value="Ladies" <?php if ($data['customerCategory'] == 2) echo 'selected'; ?>>Female</option>
									<option value=3 <?php if ($data['customerCategory'] == 3) echo 'selected'; ?>>Male & Female</option>
								</select>
							</div>
							<span class="error"><?php echo $data['sSelectedCusCategory_error']; ?></span>
						</div>
					</div>
					<!-- end of service name -->

					<!-- service type -->
					<div class="row">

						<div class="column">
							<!-- New service type -->
							<label class="labels" for="serviceType">Service Type</label>
							<select class="dropdownSelectBox" name="serviceType">
								<option class="unbold" value="0" option selected="true">Select One
								</option>

								<?php foreach ($data['sTypesArray'] as $sType) : ?>

									<option value="<?php echo $sType->type; ?>" <?php if ($data['sSelectedType'] == $sType->type) echo 'selected'; ?>>
										<?php echo $sType->type; ?></option>

								<?php endforeach; ?>
							</select>
							<!-- end of service type -->

							<!-- Service type button -->
							<div class="row1">
								<label class="labels2" for="servicePrice">OR</label>
								<input type="text" name="sNewType" id="sNewType" placeholder="--Type In--" value="<?php  ?>">

								<span class="error paddingLeft"><?php echo $data['sSelectedAllType_error']; ?></span>

							</div>
							<!-- End of service type button -->

							<!-- Service price -->
							<div class="row3">
								<label class="labels" for="servicePrice">Price</label>
								<input type="text" name="sPrice" value="<?php echo $data['price']; ?>">
								<span class="error paddingLeft"> <?php echo $data['sPrice_error']; ?></span>
							</div>
							<!-- End of ervice price -->
						</div>

						<!-- Employees -->
						<div class="column">
							<label class="labels" for="serviceEmp">Employee</label>
							<div class="checkbox-div">
								<?php foreach ($data['sProvArray'] as $sProv) : ?>
									<?php if ($sProv->status == 1) : ?>
										<div class="divIndiv">



											<input type="checkbox" name="serProvCheckbox[]" data-columns="<?php echo $data['serviceDetails']->serviceID; ?>" class="sProvCheckBoxes" value='<?php echo $sProv->staffID; ?>' <?php if (!empty($data['sSelectedProv']))
																																																							{
																																																								foreach ($data['sSelectedProv'] as $selectedSP)
																																																								{
																																																									if ($selectedSP == $sProv->staffID) echo 'checked';
																																																								}
																																																							}
																																																							?> <?php if ($_SERVER['REQUEST_METHOD'] != 'POST')
																																																								{
																																																									foreach ($data['serProvDetails'] as $sProvDetails)
																																																									{
																																																										if ($sProvDetails->staffID == $sProv->staffID) echo 'checked';
																																																									}
																																																								}
																																																								?>>


											<lable class="lableInDiv">
												<?php echo $sProv->staffID; ?> - <?php echo $sProv->fName; ?> <?php echo $sProv->lName; ?>
											</lable>

										</div>
										<hr class="resHr">
									<?php endif; ?>
								<?php endforeach; ?>

							</div>
							<span class="error paddingLeft"><?php echo $data['sSelectedSProve_error']; ?></span>
						</div>
						<!-- End of employees -->
					</div>


					<!-- New service type model -->
					<div class="modal-container normal">
						<div class="modal-box">
							<div class="new-type-head">
								<h1>New Type</h1>
							</div>
							<label class="labels paddingBottom" for="serviceNewType">Service Type</label>
							<input type="text" name="" placeholder="--Type Here--">
							<div class="new-type-head">
								<button class="btn btnClose normal close-type-btn">Close</button>
								<button class="btn btnClose normal add-type-btn">Add</button>
							</div>
						</div>
					</div>
					<!-- End of New service type model -->

					<!-- </form> -->
				</div>
				<!-- end of Basic information -->

				<!-- Duration and Resources -->
				<div class="newService-sub-head">
					<h3>Duration and Resources</h3>
				</div>
				<div class="timeDurations" id="addDiv">
					<div class="newService-sub">
						<!-- <form class="form" action=""> -->
						<h4 class="paddingBottom">Slot 1</h4>
						<!-- slot 1-->
						<div class="row " id="slotdetails1">
							<!-- duration -->
							<div class="column">
								<label class="labels paddingBottom">Duration</label><br>
								<select class="dropdownSelectBox" name="slot1Duration">
									<option class="unbold" value="val0" option selected="true" disabled="disabled">Select
										duration</option>

									<?php for ($i = 10; $i <= 120; $i += 10) : ?>

										<?php if ($i == 60 || $i == 120) : ?>
											<option value="<?php echo $i; ?>" <?php if ($data['slot1Duration'] == $i) echo 'selected'; ?>> <?php echo ($i / 60); ?> h </option>
										<?php elseif ($i > 60 && $i < 120) : ?>
											<option value="<?php echo $i; ?>" <?php if ($data['slot1Duration'] == $i) echo 'selected'; ?>> <?php echo ($i / $i); ?> h <?php echo ($i %  60); ?>
												mins</option>
										<?php else : ?>
											<option value="<?php echo $i; ?>" <?php if ($data['slot1Duration'] == $i) echo 'selected'; ?>> <?php echo $i; ?> mins </option>
										<?php endif; ?>

									<?php endfor; ?>

								</select>
								<span class="error paddingLeft"><?php echo $data['sSlot1Duration_error']; ?></span>
							</div>
							<!-- end of duration -->

							<!-- quantity -->
							<div class="column" id="resorceDetails1">
								<label class="labels paddingBottom">Resources & Quantity</label><br>
								<div class="checkbox-div">
									<?php
									$j = 0; ?>

									<?php foreach ($data['sResArray'] as $sResource) : ?>
										<!-- <?php
												if (isset($data['sSelectedResCount1']))
													print_r($data['sSelectedResCount1'][$j]);
												?> -->
										<div class="divIndiv">
											<!-- <?php $findResource = 1; ?> -->

											<label class="lableInDiv" id="checkedItem">
												<?php echo $sResource->resourceID; ?> - <?php echo $sResource->name; ?>
											</label>

											<?php $resID =  $sResource->resourceID ?>

											<select class="dropdownSelectBox-small quantity-align resCount" name="resourceCount1[]">
												<option class="unbold" value="0" option selected="true">0</option>

												<?php $Qcount = $sResource->quantity; ?>

												<?php for ($i = 1; $i <= $Qcount; $i++) : ?>

													<option value="<?php echo $i; ?>" <?php if (isset($data['sSelectedResCount1'][$j]))
																						{
																							if ($data['sSelectedResCount1'][$j] == $i)
																							{
																								echo 'selected';
																							}
																						} ?> <?php
																								if ($_SERVER['REQUEST_METHOD'] != 'POST')
																								{
																									foreach ($data['resDetailsSlot1'] as $redDetails1)
																									{
																										if ($redDetails1->resourceID == $resID && $i == $redDetails1->requiredQuantity)
																										{
																											// if ($i == $redDetails1->requiredQuantity)
																											// {
																											echo 'selected';
																											// }
																										}
																									}
																								}
																								?>><?php echo $i; ?>
													</option>

												<?php endfor; ?>

											</select>
										</div>
										<hr class='resHr'>
										<?php $j++; ?>
									<?php endforeach; ?>

								</div>
								<span class="error paddingLeft"><?php echo $data['sSelectedResCount1_error']; ?></span>
							</div>
							<!-- end of quantity -->
						</div>
						<!-- slot 1-->
					</div>

					<?php if ($data['noofSlots'] == 2 ||  ($data['noofSlots'] == 1 && ($data['slot2Duration'] != NULL || $data['interval1Duration'] != NULL || $data['sSelectedResCount2'] != NULL))) : ?>
						<div class='newService-sub' id='fullSlotDetail1'>
							<div class='btn-remove quantity-align'>
								<a href='#fullSlotDetail 1' name='remove' id='2' class='close-slot'>
									<i class='fas fa-times fa-1g'></i><br />
								</a>
							</div>
							<h4 class='paddingBottom'>Slot 2</h4>
							<div class='row'>
								<div class='column'>

									<div class='row2' id='intervalDetails1'>
										<label class='labels'>Interval Duration</label><br>
										<select class='dropdownSelectBox intervalSelectBox1' name="interval1Duration">
											<option class='unbold' value='val0' option selected='true' disabled='disabled'>Select duration</option>
											<?php for ($i = 10; $i <= 50; $i += 10) : ?>
												<option value="<?php echo $i; ?>" <?php if ($data['interval1Duration'] == $i) echo 'selected'; ?>> <?php echo $i; ?> mins </option>
											<?php endfor; ?>
										</select>
										<span class="error paddingLeft"><?php echo $data['interval1Duration_error']; ?></span>

									</div>

									<div class='row4' id='slotDetails2'>
										<label class='labels'>Slot Duration</label><br>
										<select class='dropdownSelectBox slotDurationSelectBox2' name="slot2Duration">
											<option class='unbold' value='val0' option selected='true' disabled='disabled'>Select duration</option>
											<?php for ($i = 10; $i <= 120; $i += 10) : ?>
												<?php if ($i == 60 || $i == 120) : ?>
													<option value="<?php echo $i; ?>" <?php if ($data['slot2Duration'] == $i) echo 'selected'; ?>> <?php echo ($i / 60); ?> h </option>
												<?php elseif ($i > 60 && $i < 120) : ?>
													<option value="<?php echo $i; ?>" <?php if ($data['slot2Duration'] == $i) echo 'selected'; ?>> <?php echo ($i / $i); ?> h <?php echo ($i %  60); ?>
														mins</option>
												<?php else : ?>
													<option value="<?php echo $i; ?>" <?php if ($data['slot2Duration'] == $i) echo 'selected'; ?>> <?php echo $i; ?> mins </option>
												<?php endif; ?>

											<?php endfor; ?>
										</select>
										<!-- <span class=($data['slot2Duration'] != NULL || $data['interval1Duration'] != NULL || $data['sSelectedResCount2'] != NULL)'error paddingLeft'></span> -->
										<span class="error paddingLeft"><?php echo $data['sSlot2Duration_error']; ?></span>

									</div>

								</div>

								<div class='column' id='resorceDetails2'>
									<label class="labels paddingBottom">Resources & Quantity</label><br>
									<div class="checkbox-div">
										<?php $j = 0; ?>
										<?php foreach ($data['sResArray'] as $sResource) : ?>

											<div class="divIndiv">

												<label class="lableInDiv resourceDetails2" id="checkedItem">
													<?php echo $sResource->resourceID; ?> - <?php echo $sResource->name; ?>
												</label>

												<?php $resID =  $sResource->resourceID ?>

												<select class="dropdownSelectBox-small quantity-align resCount resourceCountSelectBox2" name="resourceCount2[]">
													<option class="unbold" value="0" option selected="true">0</option>

													<?php $Qcount = $sResource->quantity; ?>

													<?php for ($i = 1; $i <= $Qcount; $i++) : ?>

														<option value="<?php echo $i; ?>" <?php if (isset($data['sSelectedResCount2'][$j]))
																							{
																								if ($data['sSelectedResCount2'][$j] == $i)
																								{
																									echo 'selected';
																								}
																							} ?> <?php
																									if ($_SERVER['REQUEST_METHOD'] != 'POST')
																									{
																										foreach ($data['resDetailsSlot2'] as $redDetails2)
																										{
																											if ($redDetails2->resourceID == $resID && $i == $redDetails2->requiredQuantity)
																											{
																												// if ($i == $redDetails2->requiredQuantity)
																												// {
																												echo 'selected';
																												// }
																											}
																										}
																									}
																									?>><?php echo $i; ?>
														</option>

													<?php endfor; ?>

												</select>
											</div>
											<hr class='resHr'>
											<?php $j++; ?>
										<?php endforeach; ?>

									</div>
									<span class="error paddingLeft"><?php echo $data['sSelectedResCount2_error']; ?></span>

								</div>
							</div>
						</div>
					<?php endif; ?>

					<?php if ($data['noofSlots'] == 3 ||  ($data['noofSlots'] == 1 && ($data['slot3Duration'] != NULL || $data['interval2Duration'] != NULL || $data['sSelectedResCount3'] != NULL)) ||  ($data['noofSlots'] == 2 && ($data['slot3Duration'] != NULL || $data['interval2Duration'] != NULL || $data['sSelectedResCount3'] != NULL))) : ?>
						<?php if ($data['noofSlots'] == 3) : ?>
							<div class='newService-sub' id='fullSlotDetail1'>
								<div class='btn-remove quantity-align'>
									<a href='#fullSlotDetail 1' name='remove' id='2' class='close-slot'>
										<i class='fas fa-times fa-1g'></i><br />
									</a>
								</div>
								<h4 class='paddingBottom'>Slot 2</h4>
								<div class='row'>
									<div class='column'>

										<div class='row2' id='intervalDetails1'>
											<label class='labels'>Interval Duration</label><br>
											<select class='dropdownSelectBox intervalSelectBox1' name="interval1Duration">
												<option class='unbold' value='val0' option selected='true' disabled='disabled'>Select duration</option>
												<?php for ($i = 10; $i <= 50; $i += 10) : ?>
													<option value="<?php echo $i; ?>" <?php if ($data['interval1Duration'] == $i) echo 'selected'; ?>> <?php echo $i; ?> mins </option>
												<?php endfor; ?>
											</select>
											<span class="error paddingLeft"><?php echo $data['interval1Duration_error']; ?></span>

										</div>

										<div class='row4' id='slotDetails2'>
											<label class='labels'>Slot Duration</label><br>
											<select class='dropdownSelectBox slotDurationSelectBox2' name="slot2Duration">
												<option class='unbold' value='val0' option selected='true' disabled='disabled'>Select duration</option>
												<?php for ($i = 10; $i <= 120; $i += 10) : ?>
													<?php if ($i == 60 || $i == 120) : ?>
														<option value="<?php echo $i; ?>" <?php if ($data['slot2Duration'] == $i) echo 'selected'; ?>> <?php echo ($i / 60); ?> h </option>
													<?php elseif ($i > 60 && $i < 120) : ?>
														<option value="<?php echo $i; ?>" <?php if ($data['slot2Duration'] == $i) echo 'selected'; ?>> <?php echo ($i / $i); ?> h <?php echo ($i %  60); ?>
															mins</option>
													<?php else : ?>
														<option value="<?php echo $i; ?>" <?php if ($data['slot2Duration'] == $i) echo 'selected'; ?>> <?php echo $i; ?> mins </option>
													<?php endif; ?>

												<?php endfor; ?>
											</select>
											<!-- <span class='error paddingLeft'></span> -->
											<span class="error paddingLeft"><?php echo $data['sSlot2Duration_error']; ?></span>

										</div>

									</div>

									<div class='column' id='resorceDetails2'>
										<label class="labels paddingBottom">Resources & Quantity</label><br>
										<div class="checkbox-div">
											<?php $j = 0; ?>
											<?php foreach ($data['sResArray'] as $sResource) : ?>

												<div class="divIndiv">

													<label class="lableInDiv resourceDetails2" id="checkedItem">
														<?php echo $sResource->resourceID; ?> - <?php echo $sResource->name; ?>
													</label>

													<?php $resID =  $sResource->resourceID ?>

													<select class="dropdownSelectBox-small quantity-align resCount resourceCountSelectBox2" name="resourceCount2[]">
														<option class="unbold" value="0" option selected="true">0</option>

														<?php $Qcount = $sResource->quantity; ?>

														<?php for ($i = 1; $i <= $Qcount; $i++) : ?>

															<option value="<?php echo $i; ?>" <?php if (isset($data['sSelectedResCount2'][$j]))
																								{
																									if ($data['sSelectedResCount2'][$j] == $i)
																									{
																										echo 'selected';
																									}
																								} ?> <?php
																										if ($_SERVER['REQUEST_METHOD'] != 'POST')
																										{
																											foreach ($data['resDetailsSlot2'] as $redDetails2)
																											{
																												if ($redDetails2->resourceID == $resID && $i == $redDetails2->requiredQuantity)
																												{
																													// if ($i == $redDetails2->requiredQuantity)
																													// {
																													echo 'selected';
																													// }
																												}
																											}
																										}
																										?>><?php echo $i; ?>
															</option>

														<?php endfor; ?>

													</select>
												</div>
												<hr class='resHr'>
												<?php $j++; ?>
											<?php endforeach; ?>

										</div>
										<span class="error paddingLeft"><?php echo $data['sSelectedResCount2_error']; ?></span>

									</div>
								</div>
							</div>
						<?php endif; ?>

						<?php if ($data['noofSlots'] == 3 || ($data['noofSlots'] == 1 && ($data['slot3Duration'] != NULL || $data['interval2Duration'] != NULL || $data['sSelectedResCount3'] != NULL)) || ($data['noofSlots'] == 2 && ($data['slot3Duration'] != NULL || $data['interval2Duration'] != NULL || $data['sSelectedResCount3'] != NULL))) : ?>
							<div class='newService-sub' id='fullSlotDetail2'>
								<div class='btn-remove quantity-align'>
									<a href='#fullSlotDetail 2' name='remove' id='3' class='close-slot'>
										<i class='fas fa-times fa-1g'></i><br />
									</a>
								</div>
								<h4 class='paddingBottom'>Slot 3</h4>
								<div class='row'>
									<div class='column'>

										<div class='row2' id='intervalDetails2'>
											<label class='labels'>Interval Duration</label><br>
											<select class='dropdownSelectBox intervalSelectBox2' name="interval2Duration">
												<option class='unbold' value='val0' option selected='true' disabled='disabled'>Select duration</option>
												<?php for ($i = 10; $i <= 50; $i += 10) : ?>
													<option value="<?php echo $i; ?>" <?php if ($data['interval2Duration'] == $i) echo 'selected'; ?>> <?php echo $i; ?> mins </option>
												<?php endfor; ?>
											</select>
											<span class="error paddingLeft"><?php echo $data['interval2Duration_error']; ?></span>

										</div>

										<div class='row4' id='slotDetails3'>
											<label class='labels'>Slot Duration</label><br>
											<select class='dropdownSelectBox slotDurationSelectBox3' name="slot3Duration">
												<option class='unbold' value='val0' option selected='true' disabled='disabled'>Select duration</option>
												<?php for ($i = 10; $i <= 120; $i += 10) : ?>
													<?php if ($i == 60 || $i == 120) : ?>
														<option value="<?php echo $i; ?>" <?php if ($data['slot3Duration'] == $i) echo 'selected'; ?>> <?php echo ($i / 60); ?> h </option>
													<?php elseif ($i > 60 && $i < 120) : ?>
														<option value="<?php echo $i; ?>" <?php if ($data['slot3Duration'] == $i) echo 'selected'; ?>> <?php echo ($i / $i); ?> h <?php echo ($i %  60); ?>
															mins</option>
													<?php else : ?>
														<option value="<?php echo $i; ?>" <?php if ($data['slot3Duration'] == $i) echo 'selected'; ?>> <?php echo $i; ?> mins </option>
													<?php endif; ?>

												<?php endfor; ?>
											</select>
											<span class="error paddingLeft"><?php echo $data['sSlot3Duration_error']; ?></span>

										</div>

									</div>

									<div class='column' id='resorceDetails3'>
										<label class="labels paddingBottom">Resources & Quantity</label><br>
										<div class="checkbox-div">
											<?php $j = 0; ?>
											<?php foreach ($data['sResArray'] as $sResource) : ?>

												<div class="divIndiv">
													<!-- <?php $findResource = 1; ?> -->

													<label class="lableInDiv resourceDetails3" id="checkedItem">
														<?php echo $sResource->resourceID; ?> - <?php echo $sResource->name; ?>
													</label>

													<?php $resID =  $sResource->resourceID ?>

													<select class="dropdownSelectBox-small quantity-align resCount resourceCountSelectBox3" name="resourceCount3[]">
														<option class="unbold" value="0" option selected="true">0</option>

														<?php $Qcount = $sResource->quantity; ?>

														<?php for ($i = 1; $i <= $Qcount; $i++) : ?>

															<option value="<?php echo $i; ?>" <?php if (isset($data['sSelectedResCount3'][$j]))
																								{
																									if ($data['sSelectedResCount3'][$j] == $i)
																									{
																										echo 'selected';
																									}
																								} ?> <?php
																										if ($_SERVER['REQUEST_METHOD'] != 'POST')
																										{
																											foreach ($data['resDetailsSlot3'] as $redDetails3)
																											{
																												if ($redDetails3->resourceID == $resID && $i == $redDetails3->requiredQuantity)
																												{
																													// if ($i == $redDetails3->requiredQuantity)
																													// {
																													echo 'selected';
																													// }
																												}
																											}
																										}
																										?>><?php echo $i; ?>
															</option>

														<?php endfor; ?>

													</select>
												</div>
												<hr class='resHr'>
												<?php $j++; ?>
											<?php endforeach; ?>

										</div>
										<span class="error paddingLeft"><?php echo $data['sSelectedResCount3_error']; ?></span>

									</div>
								</div>
							</div>
						<?php endif; ?>

					<?php endif; ?>
				</div>


				<!-- add another slot -->
				<div class="anotheSlot">
					<p id="add"><a href="#addDiv" class="AddSlotToService">+ Add another slot</a></p>
				</div>

				<!-- submit service button -->
				<div class="button-Add-Div">
					<button type="submit" class="buttonAdd btn btn-filled btn-blue" name="action" value="updateService">Save</button>
				</div>
			</div>
		</form>
	</div>

	<!------------------- RECALL FOR SPROV RESERVATIONS ---------------------->

	<div class="modal-container recall-reservation-from-update-service">
		<div class="modal-box">
			<div class="confirm-model-head">
				<h1>Recall Reservations</h1>
			</div>
			<div class="confirm-model-head">
				<p>Cannot proceed. He/She has upcoming reservations for this service. <br>Just unassign from service or recall reservations</p>
			</div>
			<div class="confirm-model-head">
				<button class="btn  normal ModalCancelButton ModalButton recallModalCancelBtn">Unassign</button>
				<button class="btn ModalBlueButton ModalButton  btnCloseRes recallModalRecallBtn" onclick="addToRecallQueue()">Recall</button>
			</div>
		</div>
	</div>

	<!------------------- RECALL FOR SPROV RESERVATIONS ---------------------->

	<script type="module">
		import {
			A
		} from 'http://localhost/beauty-craft/public/js/mang_service.js';
		var x = document.getElementById("fullSlotDetail1");
		var y = document.getElementById("fullSlotDetail2");

		if (y !== null) {
			i = 3;
			A(i);

		} else if (x !== null) {
			i = 2;
			A(i);

		}
	</script>
	<?php require APPROOT . "/views/inc/footer.php" ?>