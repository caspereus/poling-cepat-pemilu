@extends('templates.master')

@section('title','Detail Perolehan Suara')

@section('page_name','Detail Perolehan Suara')

@section('breadcrumb')
	<li>Wilayah</li>
	<li><a href="{{ url('transaction/result') }}">Pemilu</a></li>
	<li>Detail Perolehan Suara</li>
@endsection

@section('content')
	<style>
		.minus_text{
			margin-top: -20px;
		}
		.text-big{
			margin-top: 100px;
			font-size: 140px;
		}
		.text-med{
			font-size: 40px;
			margin-top: -20px;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-success">Daftar Caleg</h4>
					</div>
					<div class="panel-body">
						<input type="hidden" id="count_data" value="{{ count($array) }}">
						
						<div class="row">
						@foreach($array as $partial)
							<div class="col-md-3">
								<div class="parent">
									<img src="{{ asset('images/caleg/'.$partial['caleg']['photo']) }}" alt="" class="" style="width: 100%; height: 330px;">
								</div>
								<br>
								<div class="row">
										<h4>{{ $partial['caleg']['name'] }}</h4>
										<p class="minus_text">{{ $partial['caleg']['partai_name'] }}</p>
								</div>
								<hr/>
								<h1 id="vote{{ $loop->index + 1 }}">0</h1>
								<p style="margin-top:-15px">Suara</p>
							</div>
							@endforeach
						</div>
						<hr>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			loadData();
			setInterval(function(){
				loadData();
			},3000);

			function loadData(){
				$.get("{{ url('transaction/caleg_vote/'.$array[0]['pemilu_setting_id']) }}",function(data){
					$(data).each(function(index,value){
						var dex = index + 1;
						$('#vote'+dex).html(value.caleg_vote);
					});
				});
			}
		})
	</script>
@endsection