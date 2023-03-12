<?php
$arrayMahasiswa = [
    [
    "nama" => "luthfi",
    "mata kuliah" => "pemograman web 2",
    "nilai uts" => "89",
    "nilai uas" => "89",
    "nilai tugas" => "89",
    ],[
    "nama" => "udin",
    "mata kuliah" => "basis data",
    "nilai uts" => "89",
    "nilai uas" => "89",
    "nilai tugas" => "89",
    ],[
    "nama" => "asep",
    "mata kuliah" => "matematika",
    "nilai uts" => "89",
    "nilai uas" => "89",
    "nilai tugas" => "89",
    ],[	 
	"nama" => "jamal",
	"mata kuliah" => "ui/ux",
	"nilai uts" => "89",
	"nilai uas" => "89",
	"nilai tugas" => "89",
	]
	];
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">
	         Nilai Mahasiswa
			</h1> 
			<a href="1.html"  class="btn btn-primary-md">Tambah data
				</a> 
                
		
            
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							NO
						</th>
						<th>
							nama Mahasiswa
						</th>
						<th>
							mata kuliah
						</th>
						<th>
							nilai uts
						</th>
                        <th>
							nilai uas
						</th>
                        <th>
							nilai tugas
						</th>
						<th>
							rata-rata
						</th> <th>
							grade
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$nomor = 1;
                     foreach ($arrayMahasiswa as $key => $value);            
                     ?>
					<tr>
						<td><?=$nomor++ ?></td>
						<td><?=$value["nama"]?></td>
						<td><?=$value["mata kuliah"]?></td>
						<td><?=$value["nilai uts"]?></td>
						<td><?=$value["nilai uas"]?></td>
						<td><?=$value["nilai tugas"]?></td>
						<td><?=$rataRa =($value["nilai uts"]+ $value["nilai uas"] + $value["nilai tugas"]) /3?></td>
						<td>
						<?php
					if($rataRa >= 85 && $rataRa <= 100){
						echo"A";
					}
					elseif($rataRa >= 70 && $rataRa <= 84){
						echo"B";
					}elseif($rataRa >= 56 && $rataRa <= 69){
						echo"C";
					}elseif($rataRa >= 36 && $rataRa <= 55){
						echo"D";
					}elseif($rataRa <= 35){
						echo"D";
					}
						?>
					</td>
				</tr>
				
				</tbody>
			</table>
		</div>
	</div>
</div>
