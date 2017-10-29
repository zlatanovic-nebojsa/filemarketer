<section class="hero is-primary">
	<div class="hero-body">
		<div class="level">
			<div class="level-item has-text-centered">
				<div>
					<p class="heading">Files</p>
					<p class="title has-text-weight-light">{{ $fileCount }}</p>
				</div>
			</div>
			<div class="level-item has-text-centered">
				<div>
					<p class="heading">Sales</p>
					<p class="title has-text-weight-light">{{ $saleCount }}</p>
				</div>
			</div>
			<div class="level-item has-text-centered">
				<div>
					<p class="heading">Sales this month</p>
					<p class="title has-text-weight-light">&euro;{{ $thisMonthEarned }}</p>
				</div>
			</div>
			<div class="level-item has-text-centered">
				<div>
					<p class="heading">Lifetime sales</p>
					<p class="title has-text-weight-light">&euro;{{ $lifetimeEarned }}</p>
				</div>
			</div>
		</div>
	</div>
</section>