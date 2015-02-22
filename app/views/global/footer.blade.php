<footer>
	<div class="row">
		<div class="col-sm-4">
			{{ HTML::image('img/footer_bg.png') }}
		</div>
		<div class="col-sm-4">
			<br>
			<ul class="list-unstyled">
				<!--<li><a href="{{ url('info/precios') }}">Precios</a></li>
				<li><a href="{{ url('info/reglas') }}">Reglas</a></li>
				<li><a href="{{ url('info/terminos') }}">Términos y Condiciones</a></li>
				<li><a href="{{ url('info/politicas') }}">Políticas de Privacidad</a></li>-->
			</ul>
		</div>
		<div class="col-sm-4">
			<br><br><br>
			<p class="lead hidden-xs">
				Sitio web para mayores de 18 años<br>
				&copy; 2015 - <strong><a href="{{ Config::get('site.full_url') }}">ChicasBuenas.cl</a></strong>
			</p>
			<p class="lead visible-xs text-center">
				Sitio web para mayores de 18 años<br>
				&copy; 2015 - <strong><a href="{{ Config::get('site.full_url') }}">ChicasBuenas.cl</a></strong>
			</p>
		</div>
	</div>
	<p class="hidden-xs" style="color: #ddd; font-size: 10px; text-align: justify; margin-top: 10px;">{{ str_replace(",", ", ", trans('site.meta.keywords')) }}</p>
</footer>