		
		<style>
			.sidebar .nav a.active {
					background-color: rgb(216, 212, 212); /* Atur warna latar belakang sesuai kebutuhan */
			}
			
	</style>
	
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('back/profil.jpg') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ Auth::user()->name }}
									<span class="user-level">Admin</span>
									{{-- <span class="caret"></span> --}}
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a  href="{{ route('home') }}"  aria-expanded="false"  class="{{ Request::is('home*') ? 'active' : '' }}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a href="{{route('tracking.index')}}" class="{{ Request::is('tracking*') ? 'active' : '' }} ">
								<i class="fas fa-desktop"></i>
								<p >Tracking</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('transport.index') }}" class="{{ Request::is('transport*') ? 'active' : '' }}">
								<i class="fas fa-desktop"></i>
								<p>Transport</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('tour.index') }}" class="{{ Request::is('tour*') ? 'active' : '' }}">
								<i class="fas fa-desktop"></i>
								<p>Tour</p>
							</a>
						</li>
						{{-- <li class="nav-item">
							<a href="{{ route('pengurus.index') }}" class="{{ Request::is('pengurus*') ? 'active' : '' }}">
								<i class="fas fa-desktop"  class="{{ Request::is('pengurus*') ? 'active' : '' }}"></i>
								<p  class="{{ Request::is('pengurus*') ? 'active' : '' }}">Kepengurusan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('proker.index') }}" class="{{ Request::is('proker*') ? 'active' : '' }}">
								<i class="fas fa-desktop"></i>
								<p>Program Kerja</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('saran.index') }}" class="{{ Request::is('saran*') ? 'active' : '' }}">
								<i class="fas fa-desktop"></i>
								<p>Saran</p>
							</a>
						</li> --}}
						<li class="nav-item">
							<a href="{{ route('logout') }}"
								 onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
									<i class="fas fa-undo"></i>
									<p>{{ __('Logout') }}</p>
							</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
								</form>
							
					</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		{{-- <div>
			<h1>adad</h1>
		</div> --}}