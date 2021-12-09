<!-- sidebar d-flex: menggunakan flex-box-->
<div class="border-right" id="sidebar-wrapper">
		<div class="sidebar-heading d-flex justify-content-center">
				<!-- heading logo -->
				<img src="/img/LogoPAYbitmap.png" alt="logo" class="mr-2 my-4" width="50" />
				<div class="heading-title text-left my-4">
						Sistem Kas Yayasan <br />
						RM. Suryowinoto Yogyakarta
				</div>
		</div>
		<!-- style item sidebar flush bs -->
		<div class="list-group list-group-flush">
				<a href="{{ url('admin') }}"
						class="list-group-item list-group-item-action {{ Request::segment(2) == '' ? 'active' : '' }}">Dashboard</a>
				<a href="{{ url('admin/kasmasuk') }}"
						class="list-group-item list-group-item-action {{ Request::segment(2) == 'kasmasuk' ? 'active' : '' }}">Kas
						Masuk</a>
				<a href="{{ url('admin/kaskeluar') }}"
						class="list-group-item list-group-item-action {{ Request::segment(2) == 'kaskeluar' ? 'active' : '' }}">Kas
						Keluar</a>
				<a href="{{ url('admin/laporan-masuk') }}"
						class="list-group-item list-group-item-action {{ Request::segment(2) == 'laporan-masuk' ? 'active' : '' }}">Laporan
						Masuk</a>
				<a href="{{ url('admin/laporan-keluar') }}"
						class="list-group-item list-group-item-action {{ Request::segment(2) == 'laporan-keluar' ? 'active' : '' }}">Laporan
						Keluar</a>
				<a href="{{ url('admin/rekapan') }}"
						class="list-group-item list-group-item-action {{ Request::segment(2) == 'rekapan' ? 'active' : '' }}">Rekapan
						Total</a>
				<div class="dropdown">
						<a href="#"
								class="list-group-item list-group-item-action dropdown-toggle {{ Request::segment(2) == 'donatur' ? 'active' : '' }}"
								data-toggle="dropdown">
								Donatur
						</a>
						<div class="dropdown-menu">
								<a class="dropdown-item {{ Request::segment(3) == 'transaksi' ? 'active' : '' }}"
										href="{{ url('admin/donatur/tambah') }}">Tambah Donatur</a>
								<a class="dropdown-item {{ Request::segment(3) == 'kunjungan' ? 'active' : '' }}"
										href="{{ url('admin/donatur/laporan') }}">Laporan Donatur</a>
						</div>
				</div>
				<a href="{{ url('admin/akses') }}"
						class="list-group-item list-group-item-action {{ Request::segment(2) == 'akses' ? 'active' : '' }}">Kelola
						Akses</a>
				{{-- <a href="donatur.html" class="list-group-item list-group-item-action">Kelola Donatur</a> --}}
		</div>
</div>
