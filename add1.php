<?php // Include confi.php
session_start();
include_once('config.php');
$query="SELECT cityname FROM city";
$result = mysqli_query($con,$query);


if($_SERVER['REQUEST_METHOD'] == "GET"){
	$type=$_GET["q"];
		$_SESSION['categorynames']=$type;
	if($type=="city"){

		$output='
		<input type="hidden" name="submitted" value="true" />
			<div class= "sub4">
			<div class="sub2">
			
				<table>
					<tr>
						<td>City<span class="error">*</span></td>
						<td><input type="text" class="inputclass" name="cityname" id="cityname"  value="" required/></td>
					</tr>
					<tr>	

						<td>Description<span class="error">*</span> </td>
						<td> <textarea class="descclass"  style="margin-top: 15px;" name="citydesc" rows=7 cols=50  id="citydesc" required/></textarea></td>
					
					</tr>
					
					<tr><td><div style="margin-top: 15px;">Hotel<span class="error">*</span></div></td>
					<td>
					<input style="margin-top: 15px;" type= "file" name="hotelimage" id="hotelimage" required/>
					</td>
					</tr>
					<tr><td><div style="margin-top: 15px;">Package<span class="error">*</span></div></td>
					<td>
					<input style="margin-top: 15px;" type= "file" name="packageimage" id="packageimage" required/></td>
					
					</tr>
					<tr><td><div style="margin-top: 15px;">Adventures<span class="error">*</span></div></td>
					<td>
					<input style="margin-top: 15px;" type= "file" name="advenimage" id="advenimage" required/>
					</td>
					</tr>

					<tr><td><div style="margin-top: 15px;">Places to visit<span class="error">*</span></div></td>
					<td>
					<input style="margin-top: 15px;" type= "file" name="placeimage" id="placeimage" required/>
					
					</tr>
					<tr>
						<td><button id="Additem" value="Add Item" name="Additem" onclick="uploadFile()">Add</button></td>
						<td><input id="button" type="reset" value="Reset" /></td>
					</tr>
					


				
				</table>
				</div>
				</div>'
					;
					echo $output;
	}
	elseif($type=="hotel"){
		
		$output='<input type="hidden" name="submitted" value="true" />
			<div class= "sub4">
			<div class="sub2" >
			
				<table>';
				echo $output;
				echo '<tr> <td> City </td>';
				echo '<td>';
					echo'<select id="search" name="search">';
					while($row = mysqli_fetch_assoc($result)){ 
					echo'<option value ='.$row["cityname"] .'>'.$row["cityname"].'</option>';
					}echo
					'</select></br></br>';
					echo '</td> </tr>';
					$output1='<tr>
						<td>Name<?php ?><span class="error">*</span></td>
						<td><input type="text" class="inputclass" id="hotelname" name="hotelname"  value="" required/></td>
					</tr>
					<tr>
						<td>Location<span class="error">*</span> </td>
						<td> <input type="text" name="hotellocation" id="hotellocation" class="inputclass" required/></td>
					</tr>
					<tr>
						<td>Contact<span class="error">*</span> </td>
						<td><input type="number" name="hotelnorooms" id="hotelnorooms" class="inputclass" required/> </td>
					</tr>
					<tr>
						<td>Type</td>
						<td> <input type="radio" name="hoteltype" value="3">3*
						 <input type="radio" name="hoteltype" id="hoteltype" value="5" />5* 
						<input type="radio" name="hoteltype" id="hoteltype" value="7" />7*</td>
					</tr>
					
					<tr>	
						<td>Description<span class="error">*</span> </td>
						<td> <textarea class="descclass"  name="hoteldesc" id="hoteldesc" rows=7 cols=50  id="hoteldesc" required/></textarea></td>
					
					</tr>
					
					<tr><td></td>
					<td>
					<span>HotelImage</span></td>
					<td><input type= "file" name="htlimg" id="htlimg" required/>
					</td>
					</tr>
					<tr>
						<td><input id="button" type="submit"value="Add Item" name="Additem" onclick="UploadHotelFile()"/></td>
						<td><input id="button" type="reset" value="Reset" /></td>
					</tr>
				</table>
				</div>
				</div>';
				echo $output1;
					
	}

	elseif($type=="package"){
		$output='<input type="hidden" name="submitted" value="true" />
			<div class= "sub4">
			<div class="sub2" >
			
				<table>';
				echo $output;
				echo '<tr> <td> City </td>';
				echo '<td>';
					echo'<select id="search" name="search" onchange="fetch2_select()" >';
					while($row = mysqli_fetch_assoc($result)){ 
					echo'<option value ='.$row["cityname"] .'>'.$row["cityname"].'</option>';
					}echo
					'</select></br></br>';
					echo '</td> </tr>';
					echo '<tr> <td> Hotel </td>';
					
					echo '<td id="inp2">';

					echo '</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<td>Days<span class="error">*</span>
						<input type="number" name="packdays" id="packdays" class="inputclass" style="width:50px;" required/> </td> &nbsp; &nbsp; &nbsp;';
					echo '<td>Nights<span class="error">*</span>
						<input type="number" name="packnights" id="packnights" class="inputclass" style="width:50px;"required/> </td>';
					echo '</tr>';

					$output1='
					<tr>	
						<td>Description<span class="error">*</span> </td>
						<td> <textarea class="descclass"  name="itemdesc" rows=7 cols=50  id="itemdesc" required/></textarea></td>
					
					</tr>
					<tr><td>Cost<span class="error">*</span> </td>
						<td><input type="number" name="cost" id="cost" class="inputclass" required/> </td>
					</tr>

					<tr><td></td>
					<td>
					<span>Image</span></td>
					<td><input type= "file" name="packimg" id="packimg" required/>
					</td>
					</tr>
					<tr>
						<td><input id="button" type="submit"value="Add Item" name="Additem" onclick="UploadPackageFile()"/></td>
						<td><input id="button" type="reset" value="Reset" /></td>
					</tr>
				
				</table>
				</div>
				</div>';
				echo $output1;
		}

	elseif($type=="adventure"){
		$output='<input type="hidden" name="submitted" value="true" />
			<div class= "sub4">
			<div class="sub2" >
			
				<table>';
				echo $output;
				echo '<tr> <td> City </td>';
				echo '<td>';
					echo'<select id="search" name="search"  >';
					while($row = mysqli_fetch_assoc($result)){ 
					echo'<option value ='.$row["cityname"] .'>'.$row["cityname"].'</option>';
					}echo
					'</select></br></br>';
					echo '</td> </tr>';
					echo '<tr>';
					echo '<td>Adventure<span class="error">*</span></td>
						<td><input type="text" name="adventure" id="adventure" class="inputclass"  required/> </td></tr>';
					echo '<tr><td>Cost<span class="error">*</span></td>
						<td><input type="number" name="adv_cost" id="adv_cost" class="inputclass" required/> </td>';
					echo '</tr>';

					$output1='
					<tr>	
						<td>Description<span class="error">*</span> </td>
						<td> <textarea class="descclass"  name="itemdesc" rows=7 cols=50  id="itemdesc" required/></textarea></td>
					
					</tr>

					<tr>
					<td>
					<span>Image</span></td>
					<td><input type= "file" name="advimg" id="advimg" required/>
					</td>
					</tr>
					<tr>
						<td><input id="button" type="submit"value="Add Item" name="Additem" onclick="UploadAdventureFile()"/></td>
						<td><input id="button" type="reset" value="Reset" /></td>
					</tr>
				
				</table>
				</div>
				</div>';
				echo $output1;}
	
				elseif($type=="place"){
		$output='<input type="hidden" name="submitted" value="true" />
			<div class= "sub4">
			<div class="sub2" >
			
				<table>';
				echo $output;
				echo '<tr> <td> City </td>';
				echo '<td>';
					echo'<select id="search" name="search"  >';
					while($row = mysqli_fetch_assoc($result)){ 
					echo'<option value ='.$row["cityname"] .'>'.$row["cityname"].'</option>';
					}echo
					'</select></br></br>';
					echo '</td> </tr>';
					echo '<tr>';
					echo '<td>Place<span class="error">*</span></td>
						<td><input type="text" name="place" id="place" class="inputclass"  required/> </td></tr>';
					$output1='
					<tr>	
						<td>Description<span class="error">*</span> </td>
						<td> <textarea class="descclass"  name="placedesc" rows=7 cols=50  id="placedesc" required/></textarea></td>
					
					</tr>

					<tr>
					<td>
					<span>Image</span></td>
					<td><input type= "file" name="placeimg" id="placeimg" required/>
					</td>
					</tr>
					<tr>
						<td><input id="button" type="submit"value="Add Item" name="Additem" onclick="UploadPlaceFile()"/></td>
						<td><input id="button" type="reset" value="Reset" /></td>
					</tr>
				
				</table>
				</div>
				</div>';
				echo $output1;}
	

	else{
		$output='<select id="search" name="search" onchange="fetch1_select()">
			<option value="doc" selected>doc</option>
			<option value="image">Image</option>
			<option value="pdf">Pdf</option>
			<option value="ppt">Ppt</option>
			<option value="text">Text</option>
	</select></br></br>';}
	//echo $output;

	}

 //mysqli_close($con);

 ?>




