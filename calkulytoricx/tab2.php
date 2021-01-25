<p><input name="serv" type="radio" id="gotoviy" value="gotoviy"<?if(!empty($_POST['serv']))
																												 {
																												
																												    if($_POST['serv'] == 'gotoviy')
																												 	 { 
																														 echo 'checked';
																													 }
																												 }?>> Сервера предоставлены и настраиваемые клиентом</p>

<p><input name="serv" type="radio" id="razvorot" value="razvorot"<?if(!empty($_POST['serv']))
																												 {
																												
																												    if($_POST['serv'] == 'razvorot')
																												 	 { 
																														 echo 'checked';
																													 }
																												 }?>> Разворот Prod/Dev среды</p>



