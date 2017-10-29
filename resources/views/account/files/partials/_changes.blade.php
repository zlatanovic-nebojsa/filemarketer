<article class="message is-warning">
	<div class="message-header">
		<p>We're currently reviewing the following changes</p>
	</div>
	<div class="message-body">
		<div class="content">
            @if (($uploads = $file->uploads()->unapproved()->get())->count())
                <strong>Uploads</strong>
                @foreach ($uploads as $upload)
                    <p>{{ $upload->filename }}</p>
                @endforeach
            @endif

			@if($approval->title !== $file->title)
			<strong>Title</strong>
			<p>{{ $approval->title }}</p>
			@endif

			@if($approval->overview_short !== $file->overview_short)
			<strong>Short overview</strong>
			<p>{{ $approval->overview_short }}</p>
			@endif

			@if($approval->overview !== $file->overview)
			<strong>Overwiev</strong>
			<p>{{ $approval->overview }}</p>
			@endif
		</div>
	</div>
</article>