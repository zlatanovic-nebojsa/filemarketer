<section class="hero is-primary">
	<div class="hero-body">
		<div class="level">
			<div class="level-item has-text-centered">
				<div>
					<p class="heading">Total files</p>
					<p class="title has-text-weight-light">{{ $fileCount }}</p>
				</div>
			</div>
			<div class="level-item has-text-centered">
				<div>
					<p class="heading">Total sales</p>
					<p class="title has-text-weight-light">{{ $saleCount }}</p>
				</div>
			</div>
			<div class="level-item has-text-centered">
				<div>
					<p class="heading">Commission this month</p>
					<p class="title has-text-weight-light">&euro;{{ number_format($thisMonthCommission, 2) }}</p>
				</div>
			</div>
			<div class="level-item has-text-centered">
				<div>
					<p class="heading">Lifetime commision</p>
					<p class="title has-text-weight-light">&euro;{{ number_format($lifetimeCommission, 2) }}</p>
				</div>
			</div>
		</div>
	</div>
</section>