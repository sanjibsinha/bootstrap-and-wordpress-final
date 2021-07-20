<form action="/" method="get">
  
  <div class="form-group">
    
    <input type="text" name="s" class="form-control" 
    id="search" placeholder="Search"
    value="<?php the_search_query(  ); ?>"required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>