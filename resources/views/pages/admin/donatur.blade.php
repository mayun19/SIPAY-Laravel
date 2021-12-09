@extends('layouts.app-admin')

@section('title')
		Donatur - Admin
@endsection

@section('content')
		<!-- Section Content -->
		<div class="section-content section-dashboard-home" data-aos="fade-up">
				<div class="container-fluid">
						<div class="dashboard-heading">
								<h2 class="dashboard-title">Donatur</h2>
								<p class="dashboard-sub">Kelola data donatur Yayasan </p>
						</div>
						<div class="dashboard-content">
								<div class="row mt-4">
										<div class="col-lg-4 col-xl-3  col-md-5">
												<div class="card mb-2">
														<div class="card-body">
																<div class="dashboard-card-title">
																		Total Donatur
																</div>
																<div class="dashboard-card-subtitle">
																		130
																</div>
														</div>
												</div>
										</div>
										<div class="col-lg-4 col-xl-3  col-md-5">
												<div class="card mb-2">
														<div class="card-body">
																<div class="dashboard-card-title">
																		Donatur Tetap
																</div>
																<div class="dashboard-card-subtitle">
																		70
																</div>
														</div>
												</div>
										</div>
										<div class="col-lg-4 col-xl-3  col-md-5">
												<div class="card mb-2">
														<div class="card-body">
																<div class="dashboard-card-title">
																		Donatur Tidak Tetap
																</div>
																<div class="dashboard-card-subtitle">
																		60
																</div>
														</div>
												</div>
										</div>
								</div>
								<div class="row mt-3">
										<div class="col-12 col-md-8 col-xl-5 mb-2">
												<div class="section-filter">
														<form action="" method="GET">
																{{-- form filter --}}
																<div id="tipe-donatur">
																		<div class="form-group col-lg-8">
																				<label>Tipe Donatur</label>
																				<select name="category" class="form-control">
																						<option value="" disabled>
																								--Pilih Donatur--
																						</option>
																						<option value="">Donatur Tetap</option>
																						<option value="">Tidak Tetap</option>
																				</select>
																		</div>
																</div>
																<div class="row btn-ajukan">
																		<div class="col-lg-8 text-right">
																				<button type="submit" class="btn btn-sm btn-success px-3">Filter</button>
																		</div>
																</div>
														</form>
												</div>
										</div>
								</div>
								<div class="row mt-2">
										<div class="col-12 col-md-10 mt-2">
												<div class="card mb-3">
														<div class="card-body">
																<h5>Daftar Donatur</h5>
																<div class="table-responsive-xl">
																		<table class="table table-borderless">
																				<thead class="thead-table">
																						<tr class="">
																								<th scope="col">No</th>
																								<th scope="col">Nama Donatur</th>
																								<th scope="col">No Telepon</th>
																								<th scope="col" class="text-center">Alamat</th>
																								<th scope="col">Tipe Donatur</th>
																						</tr>
																				</thead>
																				<tbody>
																						<tr>
																								<td>1.</td>
																								<td>Natasha</td>
																								<td>082136401337</td>
																								<td>Notoprajan NG/ II 647 B
																										RT 36 RW 06 Ngampilan Yogyakarta</td>
																								<td>
																										Tidak Tetap
																								</td>
																						</tr>
																				</tbody>
																		</table>
																		<hr />
																		<a target="_blank" href="" class="px-3">
																				<i class="fa fa-print"></i> Cetak
																		</a>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
