@component('styleguide.component', ['title' => 'Text'])
	<div>
		<label class="label" for="form-text">Placeholder</label>

		<input type="text" id="form-text" placeholder="Enter full name">
	</div>

	<div class="s-push-top">
		<label class="label" for="form-text--value">Value</label>

		<input type="text" id="form-text--value" value="Joe Bloggs" placeholder="Enter full name">
	</div>

	<div class="s-push-top">
		<label class="label" for="form-text--disabled">Disabled</label>

		<input type="text" id="form-text--disabled" value="Joe Bloggs" disabled>
	</div>

	<div class="s-push-top">
		<label class="label" for="form-text--error">Error</label>

		<input class="is-invalid" type="text" id="form-text--error" placeholder="Enter full name">

		<label class="error-text" for="form-text--error">There is an error</label>
	</div>

	<div class="s-push-top">
		<label class="label" for="form-text--search">Search</label>

		<input type="search" id="form-text--search" placeholder="Search…">
	</div>
@endcomponent

@component('styleguide.component', ['title' => 'Select'])
	<div>
		<label class="label" for="form-select">Default</label>

		<div class="select">
			<select id="form-select">
				<option value="" selected disabled>Please select</option>
				<option>Value 1</option>
			</select>
		</div>
	</div>

	<div class="s-push-top">
		<label class="label" for="form-select--disabled">Disabled</label>

		<div class="select">
			<select id="form-select--disabled" disabled>
				<option value="" selected disabled>Please select</option>
				<option>Value 1</option>
			</select>
		</div>
	</div>

	<div class="s-push-top">
		<label class="label" for="form-select--error">Error</label>

		<div class="select">
			<select class="is-invalid" id="form-select--error">
				<option value="" selected disabled>Please select</option>
				<option>Value 1</option>
			</select>
		</div>

		<label class="error-text" for="form-select--error">There is an error</label>
	</div>
@endcomponent
