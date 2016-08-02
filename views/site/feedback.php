<?php include_once ROOT . '/views/layout/header.php'; ?>  


	<div class="well">

			<?php if (isset($reviews)) foreach ($reviews as $key ): ?>
				
				<table class="" cellpadding="3">
					<tbody>	
						<tr>
							<td>
								Имя: 
							</td>
							<td> 
								<?=$key['name']?>
							</td>
						</tr>
						<tr>
							<td>
								Сообщение: 
							</td>
							<td style="word-wrap: break-word; width: 50px; "> 
								<?=$key['text']?>
							</td>
						</tr>
					</tbody>
				</table>
				<hr style="hight: 5px;">
			<?php endforeach; ?>
			<?php if ($errors): ?>
				<ul>
					<?php foreach ($errors as $err): ?>
						<li style="color: red"><?=$err;?></li>
					<?php endforeach;?>
				</ul>
			<?php endif;?>


		<form action= "" method= "POST" id="form" enctype="multipart/form-data">			
			<div class="table-responsive">
				<table class="table table-striped" >
					<tbody>	
						<tr>
							<td>
								Имя: 
							</td>
							<td> 
								<input type= "text" name= "name" id="name"> 
							</td>
						</tr>
						<tr>
							<td
							>E-mail: 
							</td> 
							<td>
								<input type= "text" name= "email" id="email">
							</td>
						</tr>
						<tr>
							<td>
								Сообщение: 
							</td>
							<td> 
								<textarea rows= "3" cols= "16" id = "text" name= "text"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								Картинка: 
							</td>
							<td> 
								<input type="file" name="file">
							</td>
						</tr>

						<tr>
							<td>
								&nbsp;
							</td>

							<td>
								<input name="submit" type= "submit" value= "Отправить" id="butt" onsubmit=""> 
								<input name="pre" type= "submit" value= "preview" id="pre" onclick=""> 
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
	</div>


<?php include_once ROOT . '/views/layout/footer.php'; ?>  