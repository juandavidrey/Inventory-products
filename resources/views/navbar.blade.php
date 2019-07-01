<style>
		html, body {
				background-color: #fff;
				color: #636b6f;
				font-family: 'Nunito', sans-serif;
				font-weight: 200;
				height: 100vh;
				margin: 0;
		}

		.full-height {
				height: 100vh;
		}

		.flex-center {
				align-items: center;
				display: flex;
				justify-content: center;
		}

		.position-ref {
				position: relative;
		}

		.top-right {
				position: absolute;
				right: 10px;
				top: 18px;
		}

		.content {
				text-align: center;
		}

		.title {
				font-size: 84px;
		}

		.links > a {
				color: #636b6f;
				padding: 0 25px;
				font-size: 13px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
		}

		.m-b-md {
				margin-bottom: 30px;
		}
</style>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item">
							 <a class="nav-link" href="{{ URL::to('suppliers') }}">suppliers</a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="{{ URL::to('clients') }}">clients</a>
						</li>
            <li class="nav-item">
               <a class="nav-link" href="{{ URL::to('display') }}">display</a>
            </li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
