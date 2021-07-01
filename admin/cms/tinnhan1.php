<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./a/tableExport.js" type="text/javascript"></script>
	<script src="./a/jquery.base64.js" type="text/javascript"></script>
	<!--export pdf -->
	<script src="./a/jspdf/jspdf.js" type="text/javascript"></script>
	<script src="./a/jspdf/libs/sprintf.js" type="text/javascript"></script>
	<script src="./a/jspdf/libs/base64.js" type="text/javascript"></script>
			 
			 <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Danh sách tin nhắn</h3>
                      </div>
					  
	<script type = "text/javascript">
	$(document).ready(function(e){
		$("#pdf").click(function(e){
			$("#mytb").tableExport({
				type: 'excel',
				escape: 'false'
			});
		})
	});
   
    </script>			
<table class="table" id = "mytb">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>

<button id = "pdf">export pdf </button>	
					  
                      

 </div> 
  </div>
                                 </div>

