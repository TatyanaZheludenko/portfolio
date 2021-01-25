<p><input name="page" type="radio" id="design" value="design"<?if(!empty($_POST['page']))
																					{
																						if($_POST['page'] == 'design')
																						{ 	
																							echo 'checked';
																						}
																						
																					}?>> Готовый дизайн</p>


<p><input name="page" type="radio" id="template_design" value="template_design"<?if(!empty($_POST['page']))
																											{
																												if($_POST['page'] == 'template_design')

																												{ 
																													echo 'checked';
																												}
																											
																											}?>> Шаблонный дизайн</p>




<p><input name="page" type="radio" id="individual_design" value="individual_design"<?if(!empty($_POST['page']))
																												 {
																												
																												    if($_POST['page'] == 'individual_design')
																												 	 { 
																														 echo 'checked';
																													 }
																												 }?>> Индивидуальный дизайн</p>



<p><input name="mobil" type="checkbox" id="mobil" value="mobil"<?if(!empty($_POST['mobil'])){ echo 'checked';}?> > Мобильная верстка</p>
<p><input name="landing" type="checkbox" id="landing" value="landing"<?if(!empty($_POST['landing'])){ echo 'checked';}?> > Верстка лендингов</p>





											
