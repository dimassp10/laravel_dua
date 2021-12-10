		<div class="form-group" >
			<label for="title">Title</label>
			<input class="form-control" type="text" name="title" value="{{ old('title') ?? $post->title }}">

				
		</div>
		<div >
			<label for="category_id">Category Id</label>
			<input class="form-control" type="text" name="category_id" value="{{ old('category_id') ?? $post->category_id }}">

		</div>
		<br>
			<div> 
				<label for="thumbnail">Thumbnail</label>
				<input class="form-control" type="file" name="thumbnail" value="{{ old('thumbnail') ?? $post->thumbnail }} ">				
			</div>
		<br>
		<div> 
			<label for="content">Content</label>
			<textarea class="form-control" name="content" cols="30 "  rows="4"   >{{ old('thumbnail') ?? $post->thumbnail }}</textarea>				
		</div>

		<div class="form-group">
			<input class="btn btn-primary" type="submit" value="create">
			
		</div>