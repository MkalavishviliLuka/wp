<?php get_header();?>
<main>
    <div class="page-section pt-4">
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb bg-transparent mb-4">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-single-wrap">
              <div class="post-thumbnail">
                <img src="<?php the_post_thumbnail_url();?>" alt="">
              </div>
              <h1 class="post-title"><?php the_title();?></h1>
              <div class="post-meta">
                <div class="post-author">
                  <span class="text-grey">By</span> <a href="#"><?php the_author();?></a>  
                </div>
                <span class="gap">|</span>
                <div class="post-date">
                  <a href="#"><?php the_date();?></a>
                </div>
                <span class="gap">|</span>
                <div>
                  <a href="#">StreetStyle</a>, <a href="#">Fashion</a>, <a href="#">Couple</a>  
                </div>
                <span class="gap">|</span>
                <div class="post-comment-count">
                  <a href="#">8 Comments</a>
                </div>
              </div>
              <div class="post-content">
                  <p><?php the_content();?></p>
                  <div class="post-tags">
                  <p class="mb-2">Tags:</p> 
                  <a href="#" class="tag-link">LifeStyle</a>
                  <a href="#" class="tag-link">Food</a>
                  <a href="#" class="tag-link">Coronavirus</a>
                </div>
              </div>
            </div> <!-- .blog-single-wrap -->

       
          </div>
          
          <div class="col-lg-4">
            <div class="widget">
              <div class="widget-box">
                <h3 class="widget-title">Search</h3>
                <div class="divider"></div>
                <form action="#" class="search-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                    <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                  </div>
                </form>
              </div>
              <div class="widget-box">
                <h3 class="widget-title">Categories</h3>
                <div class="divider"></div>
                <ul class="categories">
                  <li><a href="#">Food <span>12</span></a></li>
                  <li><a href="#">Dish <span>22</span></a></li>
                  <li><a href="#">Desserts <span>37</span></a></li>
                  <li><a href="#">Drinks <span>42</span></a></li>
                  <li><a href="#">Ocassion <span>14</span></a></li>
                </ul>
              </div>

              <div class="widget-box">
                <h3 class="widget-title">Tag Cloud</h3>
                <div class="divider"></div>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">dish</a>
                  <a href="#" class="tag-cloud-link">menu</a>
                  <a href="#" class="tag-cloud-link">food</a>
                  <a href="#" class="tag-cloud-link">sweet</a>
                  <a href="#" class="tag-cloud-link">tasty</a>
                  <a href="#" class="tag-cloud-link">delicious</a>
                  <a href="#" class="tag-cloud-link">desserts</a>
                  <a href="#" class="tag-cloud-link">drinks</a>
                </div>
              </div>
  
              <div class="widget-box">
                <h3 class="widget-title">Paragraph</h3>
                <div class="divider"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>
          </div>
          
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  </main>

<?php get_footer();?>