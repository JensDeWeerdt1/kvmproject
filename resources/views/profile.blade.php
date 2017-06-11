@extends('layouts.app')

@section('content')
<div class="container profile">
	<div class="row">
		<div class="col-sm-6">
			<div class="pf-block user">
				<h1 class="pf-block__title">Uw profielgegevens</h1>
				<a href="/profiel/instellingen" class="btn btn-primary pf-block__title__edit">Profiel bewerken</a>
				<div class="pf-block__body user-row">
					<div class="user__image-wrapper user-col">
						<img src="{{ Auth::user()->profilePic }}" class="user__image" alt="{{ Auth::user()->name }}'s profiel foto">
					</div>
					<div class="user__info user-col">
							<h5 class="user__info__name">Naam <br><span>{{ Auth::user()->name }}</span></h5>
							<h5 class="user__info__email">Email <br><span>{{ Auth::user()->email }}</span></h5>
						<h5 class="user__info__email">Abonnementnummer<br><span>{{ Auth::user()->abonnementnummer }}</span></h5>
					</div>
				</div>
			</div>
		</div>

	<div class="row secondrow">
		<div class="col-sm-6">
			<div class="pf-block adduser">
				<div class="pf-block__body">
					<div class="row userrow">
						<!-- NIEUWE GEBRUIKER TOEVOEGEN -->
						@foreach (['danger', 'warning', 'success', 'info'] as $msg)
								@if(Session::has('user-' . $msg))
										<p class="alert alert-{{ $msg }}">{{ Session::get('user-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
								 @endif
						@endforeach

						@if(Auth::user()->account_type == "admin")
						<form class="" action="{{ URL('/profiel/addUser')}}" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="labelInputveld">
							<label for="name">Name</label>
							</div>
							<div class="labelInputveld">
							<input type="text" class="form-control" name="name" value="" >
							</div>

							<div class="labelInputveld">
							<label for="email">Email</label>
							</div>
							<div class="labelInputveld">
							<input type="text" class="form-control" name="email" value="">
							</div>

							<div class="labelInputveld">
							<label for="password">Password</label>
							</div>
							<div class="labelInputveld">
							<input type="password" class="form-control" name="password" value="">
							</div>

							<div class="labelInputveld">
							<label for="passwordRepeat">Repeat password</label>
							</div>
							<div class="labelInputveld">
							<input type="password" class="form-control" name="passwordRepeat" value="">
							</div>

							<input type="submit" name="submit" class="submit btn btn-primary" id="userAdd_submit" value="Add user">

						</form>
					@endif

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
