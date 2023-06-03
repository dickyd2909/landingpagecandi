<div id="bgtable">
    <div id="botable">
        <div id="tabletop" class="clearfix">
            <div class="tabletoptit">
                Data Galery
            </div>
            <div class="tabletopbtn">
                <a href="#" id="myBtn">+ Galery</a>
            </div>
        </div>
        <div id="table">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th></th>
                        <th>Judul</th>
                        <th>Order</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody id="post_list">
                    <?php
                        $no = 1;
                        $db = $koneksi->query("SELECT * FROM galery ORDER BY galery_order ASC");
                        while($dt = $db->fetch_array()){
                    ?>
                        <tr data-post-id="<?php echo $dt["galery_id"]; ?>">
                            <td width="1%" align="center"><?= $no++; ?></td>
                            <td width="1%">
								<?php if(!empty($dt['galery_image'])){ ?>
									<img src="../../assets/images/galery/<?= $dt['galery_image']; ?>" width="150">
								<?php }else{?>
									<img src="../../assets/images/no-image.png" width="150">
								<?php } ?>
							</td>
                            <td><?= $dt['galery_nama'] ?></td>
                            <td><?= $dt['galery_order'] ?></td>
                            <td><a href="#" id="myBtnEdit<?= $dt['galery_id']; ?>" class="btnedit"><i class="fa fa-pen"></i></a> <a href="javascript:void(0)" title="Hapus" class="btnhps" data-nama="<?= $dt['galery_nama']; ?>" data-url="index.php?m=galeryhapus&id=<?= $dt['galery_id']; ?>"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    <?php } ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal tambah -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Tambah Data Galery</h2>
    </div>
    <div class="modal-body">
        <form method="post" action="index.php?m=galerysimpan" enctype="multipart/form-data">
            <div id="formbox" class="clearfix">
                <div class="formlabel">Nama</div>
                <div class="forminput">
                    <input name="galery_nama" type="text" class="form-control" required />
                </div>
            </div>
            <div id="formbox" class="clearfix">
                <div class="formlabel">Image</div>
                <div class="forminput">
                    <div class="preview-zone hidden">
					<div class="box box-solid">
					 <div class="box-header">
					  <div class="box-tools pull-right">
					   <button type="button" class="btnremove remove-preview">
						<i class="fa fa-times"></i> Reset This Form
					   </button>
					  </div>
					 </div>
					 <div class="box-body"></div>
					</div>
				   </div>
				   <div class="dropzone-wrapper">
					<div class="dropzone-desc">
					 <i class="glyphicon glyphicon-download-alt"></i>
					 <p>Choose an image file or drag it here.</p>
					</div>
					<input type="file" name="galery_image" class="dropzone">
				   </div>
                </div>
            </div>
            <div class="formsubmit">
                <input name="submit" type="submit" value="Simpan" class="btnsubmit"></input>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- modal edit -->
		<!--MODAL EDIT DATA-->
<?php
    $adb = $koneksi->query("SELECT * FROM galery ORDER BY galery_order ASC");
    while($adt = $adb->fetch_array()){
?>
    <div id="myModalEdit<?= $adt['galery_id']; ?>" class="modal">
        <div class="modal-content">
        <div class="modal-header">
            <span class="closeedit" id="close<?= $adt['galery_id']; ?>">&times;</span>
            <h2>Edit Galery</h2>
        </div>
        <div class="modal-body">
            <form method="post" action="index.php?m=galeryupdate" enctype="multipart/form-data">
            <div id="formbox" class="clearfix">
                <div class="formlabel">Nama</div>
                <div class="forminput">
                    <input name="galery_nama" type="text" value="<?= $adt['galery_nama']; ?>" class="form-control" required />
					<input name="galery_id" type="hidden" value="<?= $adt['galery_id']; ?>" class="form-control" required />
                </div>
            </div>
            <div id="formbox" class="clearfix">
                <div class="formlabel">Image</div>
                <div class="forminput">
                    <div class="preview-zone hidden">
					<div class="box box-solid">
					 <div class="box-header">
					  <div class="box-tools pull-right">
					   <button type="button" class="btnremove remove-preview">
						<i class="fa fa-times"></i> Reset This Form
					   </button>
					  </div>
					 </div>
					 <div class="box-body"></div>
					</div>
				   </div>
				   <div class="dropzone-wrapper">
					<div class="dropzone-desc">
					 <i class="glyphicon glyphicon-download-alt"></i>
					 <p>Choose an image file or drag it here.</p>
					</div>
					<input type="file" name="galery_image" class="dropzone">
				   </div>
                </div>
            </div>
			<div id="formbox" class="clearfix">
                <div class="formlabel">Image</div>
                <div class="forminput">
					<?php if(!empty($adt['galery_image'])){ ?>
						<img src="../../assets/images/galery/<?= $adt['galery_image']; ?>" width="150">
					<?php }else{ ?>
						<img src="../../assets/images/no-image.png" width="150">
					<?php } ?>
                </div>
            </div>
            <div class="formsubmit">
                <input name="edit" type="submit" value="Update" class="btnsubmit"></input>
            </div>
            </form>
        </div>
        </div>
    </div>
<?php } ?>	

<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0]; 
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
	<?php  
		$adb = $koneksi->query("SELECT * FROM galery ORDER BY galery_order ASC");
		while($adt = $adb->fetch_array()){
	?>
			var modaledit<?= $adt['galery_id'];?> 	= document.getElementById("myModalEdit<?= $adt['galery_id'];?>");
			var btnedit<?= $adt['galery_id'];?> 	= document.getElementById("myBtnEdit<?= $adt['galery_id'];?>");
			var spanedit<?= $adt['galery_id'];?> 	= document.getElementById("close<?= $adt['galery_id'];?>");
			
			btnedit<?= $adt['galery_id'];?>.onclick = function() {
			  modaledit<?= $adt['galery_id'];?>.style.display = "block";
			}
			
			spanedit<?= $adt['galery_id'];?>.onclick = function() {
			  modaledit<?= $adt['galery_id'];?>.style.display = "none";
			}
			
			window.onclick = function(event) {
			  if (event.target == modaledit<?= $adt['galery_id'];?>) {
				modaledit<?= $adt['galery_id'];?>.style.display = "none";
			  }
			}
	<?php } ?>	
</script>
<script type="text/javascript" lang="javascript">
    $('.btnhps').click(function(e) {
        let nama = $(this).data('nama'), url = $(this).data('url')
        Swal.fire({
            title: 'Anda Yakin?',
            text: `Apakah anda yakin ingin menghapus ${nama}?`,
            icon: 'question',
            showCancelButton: true,
        }).then(result => {
            if (result.value) {
                window.location = url
            }
        })
    })
</script>
<?php if(isset($_SESSION['success'])){ ?>
	<script>
		Swal.fire({
		  title: 'Sukses!',
		  text: '<?= $_SESSION['success']; ?>',
		  icon: 'success',
		  confirmButtonText: 'Ok'
		});
	</script>
<?php unset($_SESSION['success']);} ?>
<?php if(isset($_SESSION['error'])){ ?>
	<script>
		Swal.fire({
		  title: 'Gagal!',
		  text: '<?= $_SESSION['error']; ?>',
		  icon: 'error',
		  confirmButtonText: 'Ok'
		});
	</script>
<?php unset($_SESSION['success']);} ?>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
	$( "#post_list" ).sortable({
		placeholder : "ui-state-highlight",
		update  : function(event, ui)
		{
			var post_order_ids = new Array();
			$('#post_list tr').each(function(){
				post_order_ids.push($(this).data("post-id"));
			});
			$.ajax({
				url:"../libs/postOrderGalery.php",
				method:"POST",
				data:{post_order_ids:post_order_ids},
				success:function(data)
				{
				 if(data){
					$(".alert-danger").hide();
					$(".alert-success ").show();
				 }else{
					$(".alert-success").hide();
					$(".alert-danger").show();
				 }
				}
			});
		}
	});
</script>
<script>
	function readFile(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
			var htmlPreview = 
			'<img width="200" src="' + e.target.result + '" />'+
			'<p>' + input.files[0].name + '</p>';
			var wrapperZone = $(input).parent();
			var previewZone = $(input).parent().parent().find('.preview-zone');
			var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

			wrapperZone.removeClass('dragover');
			previewZone.removeClass('hidden');
			boxZone.empty();
			boxZone.append(htmlPreview);
			};

			reader.readAsDataURL(input.files[0]);	
		}
	}
	function reset(e) {
		e.wrap('<form>').closest('form').get(0).reset();
		e.unwrap();
	}
	$(".dropzone").change(function(){
		readFile(this);
	});
	$('.dropzone-wrapper').on('dragover', function(e) {
		 e.preventDefault();
		 e.stopPropagation();
		 $(this).addClass('dragover');
	});
	$('.dropzone-wrapper').on('dragleave', function(e) {
		 e.preventDefault();
		 e.stopPropagation();
		 $(this).removeClass('dragover');
	});
	$('.remove-preview').on('click', function() {
		 var boxZone = $(this).parents('.preview-zone').find('.box-body');
		 var previewZone = $(this).parents('.preview-zone');
		 var dropzone = $(this).parents('.form-group').find('.dropzone');
		 boxZone.empty();
		 previewZone.addClass('hidden');
		 reset(dropzone);
	});
</script>
